<?php

$host = "localhost";
$db = "bedfordCapital";
$username = "root";
$password = "";

try {
    $connnect = new PDO("mysql:host=$host;dbname=$db;", $username, $password);
} catch (PDOException $error) {
    echo "Error is connect in line " . $error->getLine();
}
