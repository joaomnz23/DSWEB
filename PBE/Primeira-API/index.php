<?php

header('Content-Type: application/json'); // Define o tipo de conteúdo da resposta como JSON
header('Access-Control-Allow-Origin: *'); // Permite requisições de qualquer origem (CORS)
header('Access-Control-Allow-Methods: GET, POST'); // Define os métodos HTTP permitidos

$method = $_SERVER['REQUEST_METHOD']; // Captura o método HTTP da requisição atual (GET, POST, etc.)
//echo $method."\n";
$path   = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // Extrai apenas o caminho da URL, ignorando query string
//echo $path."\n";

// Remove barra inicial
$path = trim($path, '/'); // TRIM remove espaços, passando parâmetros, remove o que foi passado de parâmetro
//echo $path."\n";

// Divide em segmentos
$segments = explode('/', $path);
//echo $segments[0] . "\n";

// Pega o endpoint solicitado
$endpoint = $segments[1] ?? '';
//A LINHA ACIMA É COMO SE FOSSE O IF ABAIXO:
/*
if ($endpoint = $segments[1]){
    $endpoint = $segments[1];
} else {
    $endpoint = '';
    }
*/

//echo $endpoint."\n";

switch ($endpoint) {

    case 'hello':
        echo json_encode([
            'status'  => 'success',
            'mensagem' => 'Ola! A API esta funcionando.'
        ]);
        break;

    case 'echo':
        if ($method === 'POST') {
            // Lê e decodifica o JSON do corpo da requisição para um array PHP
            $input = json_decode(file_get_contents('php://input'), true);
        } else {
            $input = "Metodo GET";
        }
        echo json_encode([
            'status' => 'success',
            'echo'   => $input
        ]);
        break;
    case 'produtos':
        echo json_encode([
            'status' => 'sucesso',
            'nomeProduto' => 'pao',
            'precoProduto' => 'R$12,00'
        ]);
        break;

    default:
        http_response_code(404);
        echo json_encode([
            'status'  => 'error',
            'message' => 'Endpoint nao encontrado.'
        ]);
}
