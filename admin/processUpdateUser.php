<?php
require_once('connection.php');

$id=$_POST['id'];
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$username=$_POST['username'];
$password=$_POST['password'];

$sql="UPDATE `users` SET `fullname`='$fullname',`email`='$email',`phonenumber`='$phonenumber',`username`='$username',`password`='$password' WHERE `id`='$id'";
$result=mysqli_query($conn,$sql);
if($result){
  header('location:user.php');
}




if(isset($_POST['update_user']))
{
	$edit_id = $_POST['edit_id'];
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$username=$_POST['username'];
    $password=$_POST['password'];
	
	$query = "UPDATE users SET `fullname`='$fullname', `email`='$email', `phonenumber`='$phonenumber',`username`='$username',`password`='$password' WHERE `id`='$id'";
	$query_run = mysqli_query($conn, $query);
	{
		 header('location:user.php');
	}
	
}
?>