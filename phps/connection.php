<?php

$dbhost = "localhost";
$dbname = "tumba";
$dbuser = "root";
$dbpass = "";

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    //set PDO error mode exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed !";
    die();
}