<?php require_once('header.php')?>
<?php require_once('sidebar.php')?>
<div class="col-sm-10">
<br>
   <div class="row">
  
       <div class="col-sm-1"></div>
       <div class="col-sm-10">
            <div class="card">
                <div class="card-header">
                Add User
                </div>
                <div class="card-body">
                
          
                <form method="POST" action="processAddUser.php">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Fullname</label>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control" name="fullname" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Phonenumber</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="phonenumber" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Email Address</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="username" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                        <input type="password" class="form-control" name="confirmpassword" required>
                        </div>
                    </div>


                    <div class="form-group row">
                       
                        <div class="col-sm-6">
                          <a href="/land/admin/user.php" class="btn btn-primary btn-block"> Go Back</a>
                        </div>

                        <div class="col-sm-6">
                           <input type="submit" class="btn btn-success btn-block" name="add_user">
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