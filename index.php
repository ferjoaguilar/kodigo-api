<?php
// MI PRIMER ENDPOINT

// HEADER
header('Content-Type: application/json');

$endpoint = $_SERVER['REQUEST_URI'];

// VAMOS A CREAR LA KODIGO-API

switch ($endpoint) {
    // GET
    case '/api/v1/bootcamps':
        http_response_code(200);
        echo json_encode([
            'message' => 'Get all bootcamps'
        ]);
        break;

    // POST
    case '/api/v1/bootcamps/create':
    http_response_code(201);
    echo json_encode([
        'message' => 'Create bootcamps'
    ]);
    break;

    //PUT
    case '/api/v1/bootcamps/update':
        http_response_code(200);
        echo json_encode([
            'message' => 'Update bootcamps'
        ]);
        break;

    //DELETE
    case '/api/v1/bootcamps/delete':
        http_response_code(200);
        echo json_encode([
            'message' => 'Delete bootcamps'
        ]);
        break;
    
    default:
        http_response_code(404);
        echo json_encode([
            'message' => 'Endpoint not found'
        ]);
        break;
}
?>