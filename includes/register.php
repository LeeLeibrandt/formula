<?php 
    session_start();

    include_once('functions.php');
    include_once('database.php');

    //redirect if user login
    if(isset($_SESSION['username'])){
        header('location: ../welcome.php');
    }

    if(isset($_POST['submit']))
    {
        $username = strip_tags($_REQUEST['username']);
        $email = strip_tags($_REQUEST['email']);
        $password = strip_tags($_REQUEST['password']);

        if(empty($username))
        {
            $errorMsg[] = "Please enter your username";
        }
        elseif(empty($email))
        {
            $errorMsg[] = "Please enter your email";
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $errorMsg[] = "Please enter a valid email"; 
        }
        elseif(strlen($password) < 6 )
        {
            $errorMsg[] = "Password must be greater than 6 characters";
        }
        else
        {
            try
            {   
                //SELECT QUERY
                $select_stmt = $conn->prepare("SELECT username, email FROM tnl_user
                                                WHERE username=:uname OR email=:uemail");
                //EXECUTE QUERY
                $select_stmt->execute(array(':uname'=>$username, ':uemail'=>$email));
                
                //CHECK IF USERNAME/EMAIL EXIST IN DATABASE
                if($row['username'] == $username)
                {
                    $errorMsg[] = "Username already taken";
                }
                elseif($row['email'] == $email)
                {
                    $errorMsg[] = "Email already taken";
                }
                //CHECK IF NO ERRORS OCCURED
                elseif(!isset($errorMsg))
                {
                    //ENCRYPT USERS PASSWORD HASH
                    $new_password = password_hash($password, PASSWORD_DEFAULT);
                    //SQL INSERT QUERY
                    $insert = $conn->prepare("INSERT INTO users (username, email, password)
                                                        VALUES (:uname,:uemail,:upassword)");
                    
                    //EXECUTE QUERY 
                    if($insert->execute(array(  ':uname'    => $username,
                                                ':uemail'   => $email,                               
                                                ':upassword'=> $new_password)))
                    {
                        //QUERY SUCCESS
                        $registerMsg = "Register Successfully. Please login to your new account.";
                    }
                }
            }
            catch(PDOException $error)
            {
                echo $error->getMessage();
            }
        }
    }
    
    head("Register user");
?>

    <?php

        if(isset($errorMsg))
        {
            foreach($errorMsg as $errors)
            {
    ?>
            <div class="alert alert-danger">
                <strong><?php echo ?></strong>
            </div>
        }

    <form method="post" class="form-horizontal">
        <div class="form-group">
            <label class="col-sm-3 control-label">Username</label>
            <div class="col-sm-6">
                <input type="text" name="username" class="form-control" placeholder="enter username" />
            </div>
        </div>
                    
        <div class="form-group">
            <label class="col-sm-3 control-label">Email</label>
            <div class="col-sm-6">
                <input type="text" name="email" class="form-control" placeholder="enter email" />
            </div>
        </div>
                        
        <div class="form-group">
            <label class="col-sm-3 control-label">Password</label>
            <div class="col-sm-6">
                <input type="password" name="password" class="form-control" placeholder="enter passowrd" />
            </div>
        </div>
                        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9 m-t-15">
                <input type="submit"  name="submit" class="btn btn-primary " value="Register">
            </div>
        </div>
                    
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9 m-t-15">
                You have a account register here? <a href="index.php"><p class="text-info">Login Account</p></a>		
            </div>
        </div>
                        
	</form>


<?php
    foot();
?>