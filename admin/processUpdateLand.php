<?php
require_once('connection.php');

// $id=$_POST['id'];
//   $fullname=$_POST['fullname'];
//   $email=$_POST['email'];
//   $phonenumber=$_POST['phonenumber'];
//   $location=$_POST['location'];
//   $size=$_POST['size'];
//   $price=$_POST['price'];
//   $status="New";
//   $description=$_POST['description'];

// $sql="UPDATE `land` SET `fullname`='$fullname',`email`='$email',`phonenumber`='$phonenumber',`location`='$location',`size`='$size',`status`='$status', `description`='$description'  WHERE `id`='$id'";
// $result=mysqli_query($conn,$sql);
// if($result){
//   header('location:land.php');
// }



if(isset($_POST['update_land']))
{
	$edit_id = $_POST['edit_id'];
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$location = $_POST['location'];
	$size = $_POST['size'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$status = $_POST['status'];
	$edit_land_image = $_FILES["land_image"]['name'];
	
	$query = "UPDATE land SET `fullname`='$fullname', `email`='$email', `phonenumber`='$phonenumber', `location`='$location', `size`='$size', `price`='$price', `status`='$status', `description`='$description', `image`='$edit_land_image' WHERE id='$edit_id' ";
	$query_run = mysqli_query($conn, $query);
	if($query_run)
		{
			move_uploaded_file($_FILES["land_image"]["tmp_name"], "images/". $_FILES["land_image"]["name"]);
			echo('land data updated');
			header('Location: land.php');
		}
		else
	{
		echo('Land data not updated');
		header('Location: land.php');
	}
}
?>