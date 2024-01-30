<?php require_once('header.php')?>
<?php require_once('sidebar.php')?>
<?php include('connection.php');?>


<?php
if(isset($_POST['upload']))
{
      $fullname = $_POST['fullname'];
      $email = $_POST['email'];
      $phonenumber = $_POST['phonenumber'];
      $location = $_POST['location'];
      $size = $_POST['size'];
      $price = $_POST['price'];
      $description = $_POST['description'];
      $image = $_FILES["land_image"]['name'];

      $img_types = array('image/jpg','image/png','image/jpeg');
      $validate_img_extension = in_array($_FILES["land_image"]['type'], $img_types);

      if($validate_img_extension)
      {
            if(file_exists("images/" . $_FILES["land_image"]["name"]))
            {
              $store = $_FILES["land_image"]["name"];
              echo"<script>alert('Image already exists. '.$store.');
              windows.location='land.php'</script>";              
            }
             else
            {
              $query = "INSERT INTO land (`fullname`,`email`,`phonenumber`,`location`,`size`,`price`,`description`,`image`) VALUES ('$fullname','$email','$phonenumber','$location','$size','$price','$description','$image')";
              $query_run = mysqli_query($conn, $query);
              if($query_run)
              {
                move_uploaded_file($_FILES["land_image"]["tmp_name"], "images/".$_FILES["land_image"]["name"]);
                echo"<script>alert('Land Added');
              windows.location='land.php'</script>";
              }
              else
              {
              echo"<script>alert('Land Not Added');
              windows.location='land.php'</script>";
            }
        }
    }
      else
      {
        echo"<script>alert('Only PNG, JPG and JPEG Images are allowed');
        windows.location='land.php'</script>";
      }
}

?>


<div class="col-sm-10">
<br>
   <div class="row">
  
       <div class="col-sm-1"></div>
       <div class="col-sm-10">
            <div class="card">
                <div class="card-header">
               Add New Land
                </div>
                <div class="card-body">
                
          
                <form method="POST" action="addLand.php" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file"  class="form-control" id="land_image" name="land_image" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Fullname</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="fullname" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Phonenumber</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="phonenumber" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">email</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="email" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Location</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="location" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Size</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="size" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="price" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="description" required>
                        </div>
                    </div>
                    <div class="form-group row">
                       
                        <div class="col-sm-6">
                          <a href="land.php" class="btn btn-primary btn-block"> Go Back</a>
                        </div>

                  
                        <div class="col-sm-6">
                           <input type="submit" name="upload" class="btn btn-success btn-block" value="Add Land">
                        </div>
                    </div>

                </form>


                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>

   </div>
</div>

<?php require_once('footer.php')?>
