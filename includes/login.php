<?php 
    session_start();
    
    include_once('functions.php');
    include_once('database.php');
    head("login form");

    //redirect if user login
    if(isset($_SESSION['username'])){
        header('location: ../welcome.php');
    }
?>

<form action="login.php" method="POST">
    <h1>Login</h1>
    <input type="text" name="username"placeholder="Username / Email"  /><br>
    <input type="password" name="password" placeholder="********" /><br>
    <button type="submit" name="submit"  class="btn btn-outline-primary">submit</button>
    <a href="register.php">Register</a>
</form>


<?php
    foot();
?>