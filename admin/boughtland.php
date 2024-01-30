<?php require_once('header.php')?>
<?php require_once('sidebar.php')?>


<div class="col-sm-10">
<br>
   <div class="row">
  
       <div class="col-sm-1"></div>
       <div class="col-sm-10">
            <div class="card">
                <div class="card-header">
              Bought Lands
                </div>
                <div class="card-body">
                
           <!-- Hotel Room Section Begin -->
    <section class="hotel-rooms spad">
        <div class="container">

              <div class="row">
               
                <div class="col-lg-4 col-md-6">
                    <?php
                    include('connection.php');
                    $query = "SELECT * FROM land";
                    $sql_get = mysqli_query($conn, "SELECT * FROM land WHERE status=1");
                    if(mysqli_num_rows($sql_get)>0)
                    {
                        while($row = mysqli_fetch_assoc($sql_get))
                    {
                    ?>
                    
                    <div class="room-items">
                        <div class="room-img set-bg">
                            <img src="/land/admin/images/<?php echo $row['image']; ?>" style="width: 240px; height: 200px;">
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5><?php echo $row['description']; ?></h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span><?php echo $row['location']; ?></span></a>
                                    <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                            Map</span></a>
                                </div>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <div class="size">
                                        <p>Lot Size <?php echo $row['size']; ?></p>
                                        <p>Lot Status <a href="#" class="text-danger">Bought</a></p>
                                        <img src="../img/rooms/size.png" alt="">
                                        <i class="flaticon-bath"></i>                                        
                                    </div>

                                <div class="room-features">
                                        <div class="room-info">
                                    <div class="size">
                                        <p>Bought By <a class="text-danger"> <?php echo $row['fullname']; ?> </a> </p>
                                        <p>Contact <a class="text-danger"> <?php echo $row['phonenumber']; ?></a></p>
                                        <i class="flaticon-bath"></i> 
                                                                            
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            else
            {
                echo "No land found";
            }
                    ?>
                </div>         

              
            </div>
        </div>
    </section>

      
<?php require_once('footer.php')?>