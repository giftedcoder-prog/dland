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
                login
                </div>
                <div class="card-body">
                
          
                <form method="POST" action="processlogin.php">

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" required>
                        </div>
                    </div>


                    <div class="form-group row">
                       
                        <div class="col-sm-6">
                          <a href="/land/admin/signUp.php" class="btn btn-primary btn-block"> No Account SignUp</a>
                        </div>

                        <div class="col-sm-6">
                           <input type="submit" class="btn btn-success btn-block" name="login_btn">
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