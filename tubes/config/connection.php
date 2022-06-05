<?php

$server   = "localhost";
$username = "root";
$password = "";
$database = "pw2022_a_213040006";

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die('Failed Connect ! ' . mysqli_connect_error());
}
