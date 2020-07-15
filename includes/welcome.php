<?php
    session_start();

    include_once('database.php');
    include_once('functions.php');

    head('Welcome');
?>
<style>
    body{
        text-align:center;
        background-color:#000;
        color:#fff;
    }
    .wrapper{
        width:100%;
        height:100%;
    }
    .wrapper .hero{
        width:100%;
        height:60vh;
    }
    .wrapper .hero img{
        width:100%;
        height:100%;
    }
</style>
<div class="wrapper">
    <div class="hero">
        <img src="../img/Category_Banner_1400x500px_Racing_Point2020.jpg" alt="hero">
    </div>
	<div class="container">
        <?php
            if(!isset($_SESSION['user_login']))
            {
                header('location: ../index.php');
            }
            
            $id = $_SESSION['user_login'];

            $select_stmt = $db->prepare("SELECT * FROM tbl_user WHERE user_id=:uid");
            $select_stmt->execute(array(":uid"=>$id));

            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

            if(isset($_SESSION['user_login']))
            {
        ?>
                <h2>Welcome,
        <?php   
                echo $row['username'] . "</h2>";
            }
        ?>
        <a href="../index.php" class="btn btn-primary">Home</a>
        <a href="../store.php" class="btn btn-outline-success">Store</a>
        <a href="logout.php" class="btn btn-outline-danger">Logout</a>
    </div>
</div>
<?php
    foot();
?>

