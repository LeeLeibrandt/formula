<?php
    
    session_start();

    require_once('database.php');
    require_once('functions.php');

    head('login form');

    if(isset($_SESSION["user_login"]))	//check condition user login not direct back to index.php page
    {
        header("location: welcome.php");
    }

    if(isset($_REQUEST['btn_login']))	//button name is "btn_login" 
    {
        $username	= strip_tags($_REQUEST["txt_username_email"]);	//textbox name "txt_username_email"
        $email		= strip_tags($_REQUEST["txt_username_email"]);	//textbox name "txt_username_email"
        $password	= strip_tags($_REQUEST["txt_password"]);			//textbox name "txt_password"
            
        if(empty($username)){						
            $errorMsg[]="please enter username or email";	//check "username/email" textbox not empty 
        }
        else if(empty($email)){
            $errorMsg[]="please enter username or email";	//check "username/email" textbox not empty 
        }
        else if(empty($password)){
            $errorMsg[]="please enter password";	//check "passowrd" textbox not empty 
        }
        else
        {
            try
            {
                $select_stmt=$db->prepare("SELECT * FROM tbl_user WHERE username=:uname OR email=:uemail"); //sql select query
                $select_stmt->execute(array(':uname'=>$username, ':uemail'=>$email));	//execute query with bind parameter
                $row=$select_stmt->fetch(PDO::FETCH_ASSOC);
                
                if($select_stmt->rowCount() > 0)	//check condition database record greater zero after continue
                {
                    if($username==$row["username"] OR $email==$row["email"]) //check condition user taypable "username or email" are both match from database "username or email" after continue
                    {
                        if(password_verify($password, $row["password"])) //check condition user taypable "password" are match from database "password" using password_verify() after continue
                        {
                            $_SESSION["user_login"] = $row["user_id"];	//session name is "user_login"
                            $loginMsg = "Successfully Login...";		//user login success message
                            header("refresh:2; welcome.php");			//refresh 2 second after redirect to "welcome.php" page
                        }
                        else
                        {
                            $errorMsg[]="wrong password";
                        }
                    }
                    else
                    {
                        $errorMsg[]="wrong username or email";
                    }
                }
                else
                {
                    $errorMsg[]="wrong username or email";
                }
            }
            catch(PDOException $e)
            {
                $e->getMessage();
            }		
        }
    }
?>
   <style>
       body{
           background-color:#000;
       }
       .box{
           width:100vw;
           height:100vh;
           display:flex;
        }
        .left{
            width: 30%;
            height: 100%;
            display: flex;
            flex-wrap:wrap;
            justify-content: center;
            align-items: center;
            background-color:#000;
        }
        .left form{
            width:100%;
            margin:3rem;
        }
        .left form-group label{
            width:100%;
        }
        .right{
            width: 70%;
            height: 100%;
           
        }
        .right img{
            width:100%;
            height:100%;
        }
        input{
            width:100%;
            height:50px;
            border-radius:5px;
            border-radius:0;
            background-color:transparent;
            border:transparent;
            color: rgb(129, 252, 252);
        }
        input:focus{
            outline:none;
            border-bottom:1px solid #fff;
        }
        .btn{
            border-radius:0;
            color:#fff;
            border:1px solid #fff;
            font-weight:600;
        }
        .btn:hover{
            background-color:#fff;
            border:1px solid #fff;
            color:#000;
            font-weight:600;
        }
        @media screen and (max-width:800px){
            .box{
                display:flex;
                flex-wrap:wrap;
            }
            .left, 
            .right{
                width:100%;
                height:50%;
            }
            .left form{
                width:100%;
                height:100%;
            }
            .right img{
				width:100%;
            }
        }
   </style>
    <div class="box">
        
        <div class="right">
            <img src="../img/Login.jpeg" alt="car">
        </div>   

        <div class="left">
            <?php
                    if(isset($errorMsg))
                    {
                        foreach($errorMsg as $error)
                        {
                        ?>
                            <div class="alert alert-danger">
                                <strong><?php echo $error; ?></strong>
                            </div>
                        <?php
                        }
                    }
                    if(isset($loginMsg))
                    {
                    ?>
                        <div class="alert alert-success">
                            <strong><?php echo $loginMsg; ?></strong>
                        </div>
                    <?php
                    }
            ?> 
            <form method="post" class="form-horizontal"> 
                <h1 style="color:#eee;">Login Form</h1>
                <div class="form-group">
                    <input type="text" name="txt_username_email"  placeholder="Username or Email" autocomplete="off" />
                </div>
                <div class="form-group">
                    <input type="password" name="txt_password"  placeholder="Enter password" />
                </div>
                <div class="form-group">
                    <input type="submit" name="btn_login" class="btn" value="Login">
                </div>
                   <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9 m-t-15">
                        You don't have a account yet? <a href="register.php"><p class="text-info">Register Account</p></a>		
                    </div>
                </div>
            </form> 
        </div>       
    </div>
<?php
    foot();
?>
