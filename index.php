<?php
// MI PRIMER ENDPOINT

// HEADER
header('Content-Type: application/json');

$endpoint = $_SERVER['REQUEST_URI'];

// VAMOS A CREAR LA KODIGO-API

// ENDPOINT - GET ALL BOOTCAMPS
// ENDPINT - CREATE A BOOTCAMP
// ENDPOINT - EDIT A BOOTCAMP
// EDNPOINT - DELETE A BOOTCAMP

switch ($endpoint) {
    // GET
    case '/api/v1/bootcamps':
        echo json_encode([
            'message' => 'Get all bootcamps'
        ]);
        break;
    // POST
    case '/api/v1/bootcamps/create':
    echo json_encode([
        'message' => 'Create bootcamps'
    ]);
    break;

    //PUT
    case '/api/v1/bootcamps/update':
        echo json_encode([
            'message' => 'Update bootcamps'
        ]);
        break;

    //DELETE
    case '/api/v1/bootcamps/delete':
        echo json_encode([
            'message' => 'Delete bootcamps'
        ]);
        break;
}
?>