<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS, HEAD');
header('Content-Type: application/json');

$empresas = ['empresas' => [
        ['usuario' => 'user1', 'password' => 'clave1'],
        ['usuario' => 'user2', 'password' => 'clave2'],
    ],
];

echo json_encode($empresas);
