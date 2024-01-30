<?php
session_start();

include('connection.php');
$MSG = "";
if(isset($_POST['contact_btn']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$query = "INSERT INTO contactus (name,email,contact,subject,message) VALUES ('$name','$email','$contact','$subject','$message')";
	$query_run = mysqli_query($conn, $query);
	if($query_run)
	{
	echo"<script>alert('Thank You For Contacting Us. We will get back to you Soon.');
	windows.location='contactus.php'</script>";
	}
	else
	{
	echo"<script>alert('Your Message was not sent!! Please Try Again..');
	windows.location='contactus.php'</script>";
	}
}else{
	$MSG = "";
}

?>