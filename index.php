<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
$empresas = ['empresas' => [
        ['usuario' => 'user1', 'password' => 'clave1'],
        ['usuario' => 'user2', 'password' => 'clave2'],
    ],
];

echo json_encode($empresas);
?>    
</body>
</html>