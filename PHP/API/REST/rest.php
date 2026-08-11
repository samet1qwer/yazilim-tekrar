<?php

header("Content-Type: application/json; charset=utf-8");

$method = $_SERVER["REQUEST_METHOD"];

if ($method === "GET") {

    echo json_encode([
        "success" => true,
        "message" => "Todo listesi",
        "data" => [
            ["id" => 1, "görev" => "PHP öğren"],
            ["id" => 2, "görev" => "REST API öğren"]
        ]
    ]);

} elseif ($method === "POST") {

    $data = json_decode(file_get_contents("php://input"), true);

    echo json_encode([
        "success" => true,
        "message" => "Todo eklendi",
        "data" => $data
    ]);

} elseif ($method === "PUT") {

    $data = json_decode(file_get_contents("php://input"), true);

    echo json_encode([
        "success" => true,
        "message" => "Todo güncellendi",
        "data" => $data
    ]);

} elseif ($method === "DELETE") {

    echo json_encode([
        "success" => true,
        "message" => "Todo silindi"
    ]);

} else {

    http_response_code(405);

    echo json_encode([
        "success" => false,
        "message" => "Method desteklenmiyor"
    ]);
}