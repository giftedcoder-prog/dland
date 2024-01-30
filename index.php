    
<?php 
session_start();
?>
    <?php require_once('header.php')
    //col-sm-4
    ?>
    <!-- Hotel Room Section Begin -->
        <section class="hotel-rooms spad">
        <div class="container">
            
            <div class="row">
                <?php
                    include('connection.php');
                    $query = "SELECT * FROM land";
                    $sql_get = mysqli_query($conn," SELECT * FROM land WHERE status=0 ORDER BY id desc");
                    if(mysqli_num_rows($sql_get)>0)
                    {
                        while($row = mysqli_fetch_assoc($sql_get))
                    {
                    ?>
                <div class="col-lg-4 col-md-6">
                    <div class="room-items">
                    <div class="room-img set-bg">
                            <img src="admin/images/<?php echo $row['image']; ?>" style="width: 350px; height: 280px;" class="land-image" alt="...">
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>                        
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5><?php echo $row['description']; ?></h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span><?php echo $row['location']; ?></span></a>
                                    <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on Map</span></a>
                                </div>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <div class="size">
                                        <p>Lot Size</p>
                                        <img src="img/rooms/size.png" alt="">
                                        <i class="flaticon-bath"></i>
                                        <span><?php echo $row['size']; ?></span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="room-price">
                                <p>For Sale</p>
                                <span>ksh.<?php echo $row['price']; ?></span>
                            </div>
                            <a href="contactus.php" class="site-btn btn-line">Buy land</a>
                        </div>
                    </div>
                </div>
                <?php
                    
                    }
                    }
                    else
                    {
                    echo "No land Found";
                    }
                    ?>                  
            </div>
            
        </div>
    </section>


             <!-- Servies Section End -->
    <section class="instagram">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4>follow us on Instagram @lands</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <!-- Rooms Pic Section Begin-->
        <div class="room-pic">
            <div class="container-fluid">
                <div class="row sp-40">
                    <img src="img/room-pic/1.jpg" alt="">
                    <img src="img/room-pic/2.jpg" alt="">
                    <img src="img/room-pic/3.jpg" alt="">
                    <img src="img/room-pic/4.jpg" alt="">
                    <img src="img/room-pic/5.jpg" alt="">
                </div>
            </div>
        </div>
        

    </section>
    <!-- Hotel Room Section End -->
    <?php require_once('footer.php')?>