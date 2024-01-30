<?php

  //create connection
  require_once('connection.php');

  ///pick form values

  if(isset(($_POST["add_user"])))
{
   $fullname=$_POST['fullname'];
   $username = $_POST['username'];
   $email = $_POST['email'];
   $phonenumber=$_POST['phonenumber'];
   $password = $_POST['password'];
   $cpassword = $_POST['confirmpassword'];
   $usertype = $_POST['usertype'];

   if(strlen($password) < 6){
    
$_SESSION['status'] = 'password must be at least 6 characters';
   $_SESSION['status_code'] = "error";
header('Location: addUser.php');
} else {
   $email_query = "SELECT * FROM users WHERE email='$email' ";
   $email_query_run = mysqli_query($conn, $email_query);
   if(mysqli_num_rows($email_query_run) > 0)
   {
     $_SESSION['status'] = "Email Already Exists. Please Try another one.";
     $_SESSION['status_code'] = "error";
     header('Location: addUser.php');
   }
   else
   {
     if($password === $cpassword)
     {
       #encrypt the password
     //$hashedPassword=hash('MD5',$password);
       $query = "INSERT INTO users (fullname,username,email,phonenumber,password,usertype) VALUES ('$fullname','$username','$email','$phonenumber','$password','$usertype')";
       $query_run = mysqli_query($conn, $query);
       if($query_run)
       {
         //echo "Saved";
         $_SESSION['status'] = "User Added Successfully.";
         $_SESSION['status_code'] = "success";
         header('Location: user.php');
       }
       else
       {
         $_SESSION['status'] = "User Not Added Please Try again later.";
         $_SESSION['status_code'] = "error";
         header('Location: addUser.php');
       }
     }
       else
       {
         $_SESSION['status'] = "Password And Confirm Password Does Not Match";
         $_SESSION['status_code'] = "error";
         header('Location: addUser.php');
       }
 }
}
}

  // $fullname=$_POST['fullname'];
  // $email=$_POST['email'];
  // $phonenumber=$_POST['phonenumber'];
  // $username=$_POST['username'];
  // $password=$_POST['password'];

  // ///insert data to databse

  // $sql="INSERT INTO `users` (`id`,`fullname`,`phonenumber`,`email`,`username`,`password`) VALUES (NULL,'$fullname','$phonenumber','$email','$username','$password')";
  // $query=mysqli_query($conn,$sql) or die('Could not insert'.mysqli_error());

  // if($query){
  //     echo"Success";
  //     header('location:user.php');
  // }else{
  //   echo"Failed";
  //   header('location:addUser.php'); 
  // }






?>