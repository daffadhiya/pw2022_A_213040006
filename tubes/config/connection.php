<?php

$server   = "139.180.212.80";
$username = "guest1";
$password = "X@)#(dsjd903GWP213($*04";
$database = "pw2022_a_213040006";

$db = mysqli_connect($server, $username, $password, $database);

if (!$db) {
    die('Failed Connect ! ' . mysqli_connect_error());
}
