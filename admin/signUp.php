<html>
<header>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<script type="text/javascript" src="/dashboard/bootstrap/js/bootstrap.min.js"></script>
</header>
<body>
    <div class="container">
      <div class="row" style="height:100px;"></div>
       <div class="row">
         <div class="col-sm-3"></div>
         <div class="col-sm-6">
          
         <div class="card">
                <div class="card-header">
                SignUp
                </div>
                <div class="card-body">

                    <form method="POST" action="processSighnup.php">
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
                            <label for="inputPassword" class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-9">
                            <input type="password" class="form-control" name="confirmpassword" required>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">usertype</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="usertype" required>
                            </div>
                        </div>


                        <div class="form-group row">
                        
                            <div class="col-sm-6">
                            <a href="/land/admin/login.php" class="btn btn-primary btn-block"> Already Amember Login</a>
                            </div>

                            <div class="col-sm-6">
                            <input type="submit" class="btn btn-success btn-block" name="user_sighnup">
                            </div>
                        </div>

                    </form>

                </div>
            </div>

         
         
         </div>
         <div class="col-sm-3"></div>
       </div>
    </div>
</body>
</html>