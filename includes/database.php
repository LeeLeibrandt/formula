<?php

// database Connection variables
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root'); 
define('DATABASE', 'justforfun');

try {
    $conn = new PDO('mysql:host='.HOST.';dbname='.DATABASE.'', USER, PASSWORD);
    return $conn;
} 
catch (PDOException $error) 
{
    return "Error!: " . $error->getMessage();
    die();
}