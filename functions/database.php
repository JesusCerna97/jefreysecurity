<?php

$database = [
    // 'hostname' => 'localhost',
    // 'username' => 'jefferse_security',
    // 'password' => 'vHa8Ifv1PAMN',
    // 'database' => 'jefferse_security',

    'hostname' => 'localhost',
    'username' => 'jefferse_security',
    'password' => 'vHa8Ifv1PAMN',
    'database' => 'jefferse_security',
];

$connection = mysqli_connect($database['hostname'], $database['username'], $database['password'], $database['database']) or die('Error al conectar con la base de datos.');

$connection->set_charset('utf8');