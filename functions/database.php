<?php

$database = [
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'contact_security',
];

$connection = mysqli_connect($database['hostname'], $database['username'], $database['password'], $database['database']) or die('Error al conectar con la base de datos.');

$connection->set_charset('utf8');