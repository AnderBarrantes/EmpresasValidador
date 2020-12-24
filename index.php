<?php

header('Content-Type: application/html');

$empresas = ['empresas' => [
    ['usuario' => 'user1', 'password' => 'clave1'],
    ['usuario' => 'user2', 'password' => 'clave2'], ],
];

echo json_encode($empresas);
