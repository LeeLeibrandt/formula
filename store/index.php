<?php

    session_start();
    // Include functions and connect to the database using PDO MySQL
    include 'functions.php';
    $pdo = pdo_connect_mysql();

    // Page is redirected to products page when guest visit
    $page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'products';
    
    // Include and show the requested page
    include $page . '.php';
?>