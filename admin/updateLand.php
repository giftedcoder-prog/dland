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
                

                <form method="POST" action="processUpdateLand.php" enctype="multipart/form-data">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Id</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="id" value="<?php echo$row['id']?>" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-sm-3 col-form-label">Land Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="edit_land_image" id="land_image" value="<?php echo $row['image']?>" class="form-control">
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Fullname</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="fullname"  value="<?php echo$row['fullname']?>">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="number" class="col-sm-3 col-form-label">Phonenumber</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="phonenumber" value="<?php echo$row['phonenumber']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">email</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="email" value="<?php echo$row['email']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="location" class="col-sm-3 col-form-label">Location</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="location" value="<?php echo$row['location']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="size" class="col-sm-3 col-form-label">Size</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="size" value="<?php echo$row['size']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="price" value="<?php echo$row['price']?>">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="description" value="<?php echo$row['description']?>">
                        </div>
                    </div>

                    <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="0">New</option>
                        <option value="1">Bought</option>
                    </select>
                </div>

                    <div class="form-group row">
                       
                        <div class="col-sm-6">
                          <a href="land.php" class="btn btn-primary btn-block">Go Back</a>
                        </div>

                        <div class="col-sm-6">
                           <input type="submit" name="update_land" class="btn btn-success btn-block" value="Update ">
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