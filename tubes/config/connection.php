<?php
require_once realpath(__DIR__ . '/../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '\../');
$dotenv->load();

$server   = $_ENV['DB_HOST'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$database = $_ENV['DB_NAME'];

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die('Failed Connect ! ' . mysqli_connect_error());
}
