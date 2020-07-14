<?php
	session_start();

	require_once("database.php");
	require_once("functions.php");

	head('Register form');

	if(isset($_REQUEST['btn_register'])) 
	{
		$username	= strip_tags($_REQUEST['txt_username']);
		$email		= strip_tags($_REQUEST['txt_email']);	
		$password	= strip_tags($_REQUEST['txt_password']);
			
		if(empty($username)){
			$errorMsg[]="Please enter username";	//check username textbox not empty 
		}
		else if(empty($email)){
			$errorMsg[]="Please enter email";	//check email textbox not empty 
		}
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errorMsg[]="Please enter a valid email address";	//check proper email format 
		}
		else if(empty($password)){
			$errorMsg[]="Please enter password";	//check passowrd textbox not empty
		}
		else if(strlen($password) < 6){
			$errorMsg[] = "Password must be atleast 6 characters";	//check passowrd must be 6 characters
		}
		else
		{	
			try
			{	
				$select_stmt=$db->prepare("SELECT username, email FROM tbl_user 
											WHERE username=:uname OR email=:uemail"); // sql select query
				
				$select_stmt->execute(array(':uname'=>$username, ':uemail'=>$email)); //execute query 
				$row=$select_stmt->fetch(PDO::FETCH_ASSOC);	
				
				if($row["username"]==$username){
					$errorMsg[]="Sorry username already exists";	//check condition username already exists 
				}
				else if($row["email"]==$email){
					$errorMsg[]="Sorry email already exists";	//check condition email already exists 
				}
				else if(!isset($errorMsg)) //check no "$errorMsg" show then continue
				{
					$new_password = password_hash($password, PASSWORD_DEFAULT); //encrypt password using password_hash()
					
					$insert_stmt=$db->prepare("INSERT INTO tbl_user	(username,email,password) VALUES
																	(:uname,:uemail,:upassword)"); 		//sql insert query					
					
					if($insert_stmt->execute(array(	':uname'	=>$username, 
													':uemail'	=>$email, 
													':upassword'=>$new_password))){
														
						$registerMsg="Register Successfully..... Please Click On Login Account Link"; //execute query success message
						header("Location: login.php?register=successful");
					}
				}
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
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
			<img src="../img/Register.jpeg" alt="car">
		</div>

		<div class="left">
			<form method="post" class="form-horizontal">
				<?php
						if(isset($errorMsg))
						{
							foreach($errorMsg as $error)
							{
					?>
								<div class="alert alert-danger">
									<strong>WRONG ! <?php echo $error; ?></strong>
								</div>
					<?php
							}
						}
						if(isset($registerMsg))
						{
					?>
							<div class="alert alert-success">
								<strong><?php echo $registerMsg; ?></strong>
							</div>
					<?php
						}
				?> 
				<h1 style="color:#eee;">Register Form</h1>
				<div class="form-group">
					<input type="text" name="txt_username" placeholder="enter username" autocomplete="off" />
				</div>
							
				<div class="form-group">
					<input type="text" name="txt_email" placeholder="enter email" autocomplete="off" />
				</div>
								
				<div class="form-group">
					<input type="password" name="txt_password" placeholder="enter passowrd" />
				</div>
								
				<div class="form-group">
					<div class="col-sm-offset-3 ">
						<input type="submit"  name="btn_register" class="btn" value="Register">
					</div>
				</div>
							
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9 m-t-15">
						You have a account register here? 
						<a href="login.php"><p class="text-info">Login Account</p></a>		
					</div>
				</div>	
			</form>		
		</div>
	</div>		
	
										
<?php
	foot();
?>