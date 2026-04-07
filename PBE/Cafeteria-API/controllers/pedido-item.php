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
    // GET /pedido_itens 
    // GET /pedido_itens/1
    // -------------------------------------------------------
    case 'GET':
        if ($id) {
            $resultado = $database->executeQuery('SELECT * FROM pedido_itens WHERE pedido_id = :id', [':id' => $id]);
            $pedido_itens = $resultado->fetchAll();

            echo json_encode([
                'status' => 'success',
                'data'   => $pedido_itens
            ]);
        } else {
            $resultado = $database->executeQuery('SELECT * FROM pedido_itens');
            $pedido_itens = $resultado->fetchAll();

            echo json_encode([
                'status' => 'success',
                'data'   => $pedido_itens
            ]);
        }
        break;
    // -------------------------------------------------------
    // POST /pedido_itens
    // Body: { "cliente": "[nome do cliente]" }
    // -------------------------------------------------------
    case 'POST':
        $body = json_decode(file_get_contents('php://input'), true);
        $pedido_id = trim($body['pedido_id']);
        $produto_id = trim($body['produto_id']);
        $quantidade = trim($body['quantidade']);

        if (!$pedido_id) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Campo PEDIDO ID não informado'
            ]);
            break;
        }

        if (!$produto_id) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Campo PRODUTO ID não informado'
            ]);
            break;
        }

        if (!$quantidade) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Campo QUANTIDADE não informado'
            ]);
            break;
        }

        $getPreco = $database->executeQuery('SELECT preco FROM produtos WHERE id = :id', ['id' => $produto_id]);
        $precoProduto = $getPreco->fetch(PDO::FETCH_ASSOC);

        // Verificar se encontrou o produto
        if (!$precoProduto) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Produto não encontrado'
            ]);
            break;
        }

        $preco = $precoProduto['preco'];

        $database->executeQuery(
            "INSERT INTO pedido_itens (pedido_id, produto_id, quantidade, preco) 
            VALUES (:pedido_id, :produto_id, :quantidade, :preco)",
            [':pedido_id' => $pedido_id, ':produto_id' => $produto_id, ':quantidade' => $quantidade, ':preco' => $preco]
        );

        $database->executeQuery('
            UPDATE pedidos
            SET total = (
                SELECT SUM(quantidade * preco)
                FROM pedido_itens
                WHERE pedido_id = :pedido_id 
            )
            WHERE id = :pedido_id
        ', [':pedido_id' => $pedido_id]);




        http_response_code(201);
        echo json_encode([
            'status' => 'success',
            'message' => 'ITENS DO PEDIDO cadastrados com sucesso',
            'idItem' => $database->lastInsertId()
        ]);

        break;
    // -------------------------------------------------------
    // PUT /pedido_itens/1
    // Body: { "nome": "Salgados" }
    // -------------------------------------------------------
    case 'PUT':

        break;
    // -------------------------------------------------------
    // DELETE /pedido_itens/1
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
            'DELETE FROM pedido_itens WHERE id = :id',
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
