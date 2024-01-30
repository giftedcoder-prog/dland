<?php require_once('header.php')?>
<?php require_once('sidebar.php')?>

<?php
  require_once('connection.php');
  $id=$_GET['id'];

  $sql="SELECT * FROM `land` WHERE `id`='$id'";
  $results=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($results);
?>

<div class="col-sm-10">
<br>
   <div class="row">
  
       <div class="col-sm-1"></div>
       <div class="col-sm-10">
            <div class="card">
                <div class="card-header">
              Update Land
                </div>
                <div class="card-body">
                

                <form method="POST" action="processUpdateLand.php">

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Id</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="id" value="<?php echo$row['id']?>" required readonly>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Fullname</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="fullname"  value="<?php echo$row['fullname']?>" required required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Phonenumber</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="phonenumber" value="<?php echo$row['phonenumber']?>" required required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">email</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="email" value="<?php echo$row['email']?>" required required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Location</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="location" value="<?php echo$row['location']?>" required required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Size</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="size" value="<?php echo$row['size']?>" required required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="price" value="<?php echo$row['price']?>" required required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="description" value="<?php echo$row['description']?>" required required>
                        </div>
                    </div>


                    <div class="form-group row">
                       
                        <div class="col-sm-6">
                          <a href="/land/admin/land.php" class="btn btn-primary btn-block"> Go Back</a>
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