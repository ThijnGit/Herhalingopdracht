<?php
require '../vendor/autoload.php';
use Dotenv\Dotenv;
//$dotenv = Dotenv::createImmutable('../.ENV');
$dotenv = Dotenv::createImmutable('../');
$dotenv->load();
    $servername = $_ENV['servername'];
    $username = $_ENV['username'];
    $password = $_ENV['password'];
    $database = $_ENV['database'];
    $conn = new mysqli($servername, $username, $password, $database);
?>