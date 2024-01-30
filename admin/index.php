<?php require_once('header.php')?>
<?php require_once('sidebar.php')?>
<div class="col-sm-10">
               <br>
               <div class="row">

                   <div class="col-sm-4">
                       <div class="card">
                            <div class="card-header">
                              New Lands
                            </div>
                            <?php
                            require "connection.php";
                            $query = "SELECT id FROM land ORDER BY id";
                            $query_run = mysqli_query($conn, $query);
                            $row = mysqli_num_rows($query_run);
                            ?>

                            <div class="card-body">
                                <h1 class="card-title"><?php echo $row?></h1>
                                <a href="#" class="btn btn-primary">More Info</a>
                            </div>
                        </div>
                   </div>

                   <div class="col-sm-4">
                       <div class="card">
                            <div class="card-header">
                               Booked Lands
                                </div>
                              <?php
                            require "connection.php";
                            $query = "SELECT id FROM Users ORDER BY id";
                            $query_run = mysqli_query($conn, $query);
                            $row = mysqli_num_rows($query_run);
                            ?>


                            <div class="card-body">
                                <h1 class="card-title"><?php echo $row?></h1>
                               
                                <a href="#" class="btn btn-primary">More Info</a>
                            </div>
                        </div>
                   </div>
                   <div class="col-sm-4">
                       <div class="card">
                            <div class="card-header">
                              Users
                            </div>

                             <?php
                            require "connection.php";
                            $query = "SELECT id FROM Users ORDER BY id";
                            $query_run = mysqli_query($conn, $query);
                            $row = mysqli_num_rows($query_run);
                            ?>

                            <div class="card-body">
                                <h1 class="card-title"><?php echo $row?> </h1>
                              
                                <a href="#" class="btn btn-primary">More info</a>
                            </div>
                        </div>
                   </div>

                   
               </div>
           </div>

           


  
<?php require_once('footer.php')?>