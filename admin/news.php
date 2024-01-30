<?php require_once('header.php')?>
<?php require_once('sidebar.php')?>
    <div class="col-sm-10">
               <br>
               <div class="row">

                  <a href=# class="btn btn-success ml-2 mb-1" style="float:right;"> news update</a>
                  <br>
                  
                   <table class="table">
                      <thead>
                         <tr>
                          <th>id</th>
                           <th>Fullname</th>
                           <th>Email</th>
                           <th>Contact</th>
                           <th>Subject</th>
                           <th>message</th>
                           
                          
                         </tr>
                      </thead>

                      <tbody>
                      <?php
                    include('connection.php');
                   $sql = "SELECT id,name,email,contact,subject,message from contactus";
                    $result = $conn-> query($sql);

                    if ($result-> num_rows > 0) {

                    while ($row = $result-> fetch_assoc( )) {
                      echo "<tr><td>".$row["id"] ."</td><td>".$row["name"] ."</td><td>".$row["email"] ."</td><td>".$row["contact"] ."</td><td>".$row["subject"] ."</td><td>".$row["message"] ."</td></tr>";


                
                      
                    }

                    }
                    ?>

                      </tbody>
                   </table>
               </div>
           </div>
<?php require_once('footer.php')?>
