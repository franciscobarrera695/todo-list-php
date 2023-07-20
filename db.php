<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__,'.env.example');
$dotenv->load();


$server = $_ENV['DB_HOST'];
$db = $_ENV['DB_NAME'] ;
$user = $_ENV['DB_USER'] ;
$password =  $_ENV['DB_PASS'] ;
try {
    $conexion = new PDO("mysql:host=$server;dbname=$db;",$user,$password);
    //echo 'conectando...'
} catch (\Throwable $th) {
    echo $th->getMessage();
    echo 'error';
}

?>