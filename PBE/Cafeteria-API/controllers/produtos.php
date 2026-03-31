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

switch ($method) {
    // -------------------------------------------------------
    // GET /produtos 
    // GET /produtos/1
    // -------------------------------------------------------
    case 'GET':
        $resultado = $database->executeQuery('SELECT * FROM produtos');
        $produtos = $resultado->fetchAll();

        echo json_encode([
            'status' => 'success',
            'data'   => $produtos
        ]);
        break;
    // -------------------------------------------------------
    // POST /produtos
    // Body: { "nome": "Café Expresso" }
    // -------------------------------------------------------
    case 'POST':
        $body = json_decode(file_get_contents('php://input'), true);
        $nome = trim($body['nome']);
        $preco = trim($body['preco']);
        $categoriaID = trim($body['categoria_id']);
        $disponivel = 1;

        if (!$nome) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Campo nome não informado'
            ]);
            break;
        }
        $database->executeQuery(
            "INSERT INTO produtos (nome, preco, categoria_id, disponivel) 
            VALUES (:nome, :preco, :categoria_id, :disponivel)",
            [':nome' => $nome, ':preco' => $preco, ':categoria_id' => $categoriaID, ':disponivel' => $disponivel]
        );

        http_response_code(201);
        echo json_encode([
            'status' => 'success',
            'message' => 'Produto cadastrado com sucesso',
            'idCategoria' => $database->lastInsertId()
        ]);

        break;
    // -------------------------------------------------------
    // PUT /produtos/1
    // Body: { "nome": "Salgados" }
    // -------------------------------------------------------
    case 'PUT':

        break;
    // -------------------------------------------------------
    // DELETE /produtos/1
    // -------------------------------------------------------
    case 'DELETE':
        if (!$id) {
            http_response_code(400);
            echo json_encode([
                'status'  => 'error',
                'message' => 'Informe o ID da categoria na URL.'
            ]);
            break;
        }

        $produtos = $database->executeQuery(
            'DELETE FROM produtos WHERE id = :id',
            [':id' => $id]
        );

        if ($produtos->rowCount() === 0) {
            http_response_code(404);
            echo json_encode([
                'status'  => 'error',
                'message' => 'Produto não encontrado.'
            ]);
            break;
        }

        echo json_encode([
            'status'  => 'success',
            'message' => 'Produto removido com sucesso.'
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
