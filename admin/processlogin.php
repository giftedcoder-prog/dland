<?php
require_once('connection.php');


if(isset($_POST['login_btn']))
{
	$email_login = $_POST['email'];
	$password_login = $_POST['password'];
	if(strlen($password_login) < 6){
		
	
		$_SESSION['status'] = 'password must be at least 6 characters';
		$_SESSION['status_code'] = "error";
		header('Location: login.php');
		}else
		    {
				#encrypt the password
				//$hashedPassword=hash('MD5',$password);
				$query = "SELECT * FROM users WHERE email='$email_login' AND password='$password_login' ";
				$query_run = mysqli_query($conn, $query);
				$usertypes = mysqli_fetch_array($query_run);
				if($usertypes['usertype'] == "admin")
				{
					$_SESSION['username'] = $email_login;
					$_SESSION['status'] ="Login sucessful.";
					$_SESSION['status_code'] = "succes";
					header('Location: index.php');
				}
				else if($usertypes['usertype'] == "user")
				{
					$_SESSION['username'] = $email_login;
					header('Location: ../index.php');
				}
				else
				{
					$_SESSION['status'] = 'Email id / Password is Invalid';
					$_SESSION['status_code'] = "error";
					header('Location: login.php');
				}
            }
}

?>