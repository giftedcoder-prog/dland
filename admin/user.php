<?php require_once('header.php')?>
<?php require_once('sidebar.php')?>
    <div class="col-sm-10">
               <br>
               <div class="row">

                  <a href="addUser.php" class="btn btn-success ml-2 mb-1" style="float:right;">Add Users</a>
                  <br>
                  
                   <table class="table">
                      <thead>
                         <tr>
                           <th>No</th>
                           <th>Fullname</th>
                           <th>Phonenumber</th>
                           <th>Email</th>
                           <th>Username</th>
                           <th>Password</th>
                           <th>Action</th>
                         </tr>
                      </thead>

                      <tbody>

                      <?php
                        require_once('connection.php');
                        $sql="SELECT * FROM `users`";
                        $result=mysqli_query($conn,$sql);

                        while($row=mysqli_fetch_array($result)){
                           ?>
                            <tr>
                              <td><?php echo$row['id']?></td>
                              <td><?php echo$row['fullname']?></td>
                              <td><?php echo$row['phonenumber']?></td>
                              <td><?php echo$row['email']?></td>
                              <td><?php echo$row['username']?></td>
                              <td><?php echo$row['password']?></td>
                              <td>
                                 <a href="/land/admin/viewUser.php?id=<?php echo$row['id']?>" class="btn btn-sm btn-primary">View</a>
                                 <a href="/land/adminDashboard/updateStudent.php?id=<?php echo$row['id']?>" class="btn btn-sm btn-success">Update</a>
                                 <a href="/land/admin/deleteUser.php?id=<?php echo$row['id']?>" class="btn btn-sm btn-danger">Delete</a>
                              </td>
                           </tr> 
                           
                           <?php

                        }
                      ?>
                      
                      </tbody>
                   </table>
               </div>
           </div>
<?php require_once('footer.php')?>
