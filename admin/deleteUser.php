<?php
  $id=$_GET['id'];

  require_once('connection.php');
  $sql="DELETE FROM `users` WHERE `id`='$id'";
  $result=mysqli_query($conn,$sql);
  if($result){
      header('location:user.php');
  }
  
?>