<?php

require_once 'database.php';
$database = new Database();

$method   = $_SERVER['REQUEST_METHOD'];
$path     = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path     = trim($path, '/');
$segments = explode('/', $path);

if (isset($segments[2])) {
    $id = $segments[2];
} else {
    $id = null;
}

switch($method){
    // -------------------------------------------------------
    // GET /pedidos 
    // GET /pedidos/1
    // -------------------------------------------------------
    case 'GET':
        $resultado = $database->executeQuery('SELECT * FROM pedidos');
        $pedidos = $resultado->fetchAll();

        echo json_encode([
            'status' => 'success',
            'data'   => $pedidos
        ]);
        break;
    // -------------------------------------------------------
    // POST /pedidos
    // Body: { "cliente": "[nome do cliente]" }
    // -------------------------------------------------------
    case 'POST':
        $body = json_decode(file_get_contents('php://input'), true);
        $cliente = trim($body['cliente']);

        if(!$cliente){
            echo json_encode([
                'status' => 'error',
                'message' => 'Campo nome não informado'
            ]);
            break;
        }
        $database->executeQuery(
            "INSERT INTO pedidos (cliente) VALUES (:cliente)",
            [ ':cliente' => $cliente ]
        );

        http_response_code(201);
        echo json_encode([
            'status' => 'success',
            'message' => 'Categoria cadastrada com sucesso',
            'idCategoria' => $database->lastInsertId()
        ]);
        
        break;
    // -------------------------------------------------------
    // PUT /pedidos/1
    // Body: { "nome": "Salgados" }
    // -------------------------------------------------------
    case 'PUT':
        
        break;
    // -------------------------------------------------------
    // DELETE /pedidos/1
    // -------------------------------------------------------
    case 'DELETE':
        if (!$id) {
            http_response_code(400);
            echo json_encode([
                'status'  => 'error',
                'message' => 'Informe o ID do pedido na URL.'
            ]);
            break;
        }
 
        $stmt = $database->executeQuery(
            'DELETE FROM pedidos WHERE id = :id',
            [':id' => $id]
        );
 
        if ($stmt->rowCount() === 0) {
            http_response_code(404);
            echo json_encode([
                'status'  => 'error',
                'message' => 'Pedido não encontrado.'
            ]);
            break;
        }
 
        echo json_encode([
            'status'  => 'success',
            'message' => 'Pedidod removido com sucesso.'
        ]);
        break;
    // -------------------------------------------------------
    // Método não permitido
    // -------------------------------------------------------
    default:
        http_response_code(405);
        echo json_encode([
            'status'  => 'error',
            'message' => 'Método não permitido.'
        ]);
}


?>