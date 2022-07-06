<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "formulir";

$conection = new mysqli($hostname, $username, $password, $database);

if ($conection->connect_error) {
    die("Connection failed: " . $conection->connect_error);
}





