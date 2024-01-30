<?php require_once('header.php')?>
<?php require_once('sidebar.php')?>
    <div class="col-sm-10">
               <br>
               <div class="row">

                  <a href="addLand.php" class="btn btn-success ml-2 mb-1" style="float:right;">Add New Land</a>
                  <br>
                  
                   <table class="table">
                      <thead>
                         <tr>
                           <th>No</th>
                           <th>Image</th>
                           <th>Fullname</th>
                           <th>Phonenumber</th>
                           <th>Email</th>
                           <th>Location</th>
                           <th>Size</th>
                           <th>Description</th>
                           <th>Price</th>
                           <th>Action</th>
                         </tr>
                      </thead>

                      <tbody>
                      <?php
                    include('connection.php');
                    $query = "SELECT * FROM land";
                    $sql_get = mysqli_query($conn," SELECT * FROM land WHERE status=0");
                    if(mysqli_num_rows($sql_get)>0)
                    {
                        while($row = mysqli_fetch_assoc($sql_get))
                    {
                    ?>
                            <tr>
                              <td><?php echo$row['id']?></td>
                              <td><img src="/land/admin/images/<?php echo$row['image']?>" style="width:60px;height:60px;"></td>
                              <td><?php echo$row['fullname']?></td>
                              <td><?php echo$row['phonenumber']?></td>
                              <td><?php echo$row['email']?></td>
                              <td><?php echo$row['location']?></td>
                              <td><?php echo$row['size']?></td>
                              <td><?php echo$row['description']?></td>
                              <td><?php echo$row['price']?></td>
                              <td>
                                 <a href="/land/admin/viewLand.php?id=<?php echo$row['id']?>" class="btn btn-sm btn-primary mb-1">View</a>
                                 <a href="/land/admin/updateLand.php?id=<?php echo$row['id']?>" class="btn btn-sm btn-success mb-1">Update</a>
                                 <a href="/land/admin/deleteLand.php?id=<?php echo$row['id']?>" class="btn btn-sm btn-danger">Delete</a>
                              </td>
                           </tr> 
                              <?php
                    
                    }
                    }
                    else
                    {
                    echo "No New land Found";
                    }
                    ?>
                      </tbody>
                   </table>
               </div>
           </div>
<?php require_once('footer.php')?>
