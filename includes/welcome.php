<?php
    session_start();

    include_once('database.php');
    include_once('functions.php');

    head('Welcome');
?>
<div class="wrapper">
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
                echo $row['username']."</h2>";
            }
        ?>
        <a href="../index.php" class="btn btn-primary">Home</a>
        <a href="loout.php" class="btn btn-outline-danger">Logout</a>
    </div>
</div>
<?php
    foot();
?>

