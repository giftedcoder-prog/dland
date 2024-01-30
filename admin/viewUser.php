<?php require_once('header.php')?>
<?php require_once('sidebar.php')?>

<?php
  require_once('connection.php');
  $id=$_GET['id'];

  $sql="SELECT * FROM `users` WHERE `id`='$id'";
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
                View Student
                </div>
                <div class="card-body">
                

                <form method="POST" action="processUpdateUser.php">
                
                   <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Id</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="id" value="<?php echo$row['id']?>" required readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Fullname</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="fullname" value="<?php echo$row['fullname']?>" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Phonenumber</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="phonenumber" value="<?php echo$row['phonenumber']?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Email Address</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" value="<?php echo$row['email']?>" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="username" value="<?php echo$row['username']?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" value="<?php echo$row['password']?>" required>
                        </div>
                    </div>


                    <div class="form-group row">
                       
                        <div class="col-sm-12">
                          <a href="/land/admin/user.php" class="btn btn-primary btn-block"> Go Back</a>
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