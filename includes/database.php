<?php

// database Connection variables
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root'); 
define('DATABASE', 'msfts');

function DB()
{
    try {
        $db = new PDO('mysql:host='.HOST.';dbname='.DATABASE.'', USER, PASSWORD);
        return $db;
    } catch (PDOException $e) {
        return "Error!: " . $e->getMessage();
        die();
    }
}