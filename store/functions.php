<?php

function pdo_connect_mysql() 
{
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = 'root';
    $DATABASE_NAME = 'formula';

    try 
    {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME , $DATABASE_USER, $DATABASE_PASS);
    } 
    catch (PDOException $exception) 
    {
    	// If there is an error with the connection, stop the script and display the error.
    	die ('Failed to connect to database!');
    }
}

// Template header, feel free to customize this
function template_header($title) 
{
echo <<< EOT
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>$title</title>
            <link href="style.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        </head>
        <style>
            #icon a{
                border: 2px solid black;
                background-color: white;
                color: black;
                margin:1rem;
                padding:10px;
                font-family: "Open Sans", Arial, sans-serif;
                font-size: 30px;
                font-weight: bold;
            }
            #icon a:hover{
                background-color:black;
                color:white;
            }
        </style>
        <body>
            <header>
                <center><div class="content-wrapper">
                    <div id="icon">
                        <a href="../../index.php" class="site-logo">N</a>
                    </div>
                    <nav>
                        <a href="index.php?page=products">PRODUCTS</a>
                        <a href="../../index.php">HOME</a>
                        <a href="../about/about.php">ABOUT</a>
                        <a href="../gallery/gallery.html">GALLERY</a>
                        <a href="../contact/contact.php">CONTACT</a>
                    </nav>
                    <div class="link-icons">
                        <a href="index.php?page=cart">
                            <!--<span>$num_items_in_cart</span>-->
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                </div></center>
            </header>
            <main>
EOT;
}
// Get the amount of items in the shopping cart, this will be displayed in the header.
$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;

