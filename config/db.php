<?php
$server = 'localhost';
$db = 'prueba';
$user = 'root';
$password = '';
try {
    $conexion = new PDO("mysql:host=$server;dbname=$db;",$user,$password);
    //echo 'conectando...';
} catch (\Throwable $th) {
    echo $th->getMessage();
}

?>