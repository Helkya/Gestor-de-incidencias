<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'gdi';

$connexion = mysqli_connect($host, $username, $password);

if (mysqli_connect_errno()) {
    echo 'Fallo de conexión';
    exit();
}

mysqli_select_db($connexion, $dbName) or die('No se encontró la base de datos');
mysqli_set_charset($connexion, 'utf8');
?>