<?php session_start(); ?>
<?php require_once('header.php');
include('connection.php');?>
    <!-- Contact Section Begin -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form">
                        <h4>Get in Touch</h4>

                        <form method="POST" action="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="name" name="name" placeholder="Name" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                 <div class="col-lg-6">
                                    <input type="contact" name="contact" placeholder="contact" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                    <textarea placeholder="Message" name="message" required></textarea>
                                    <div class="alert alert-<?php echo $_SESSION['status_code'];?>>

                                        </div>
                                    <button class="site-btn c-btn" type="submit" name="contact_btn">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php

$MSG = "";
if(isset($_POST['contact_btn']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $query = "INSERT INTO contactus (name,email,contact,subject,message) VALUES ('$name','$email','$contact','$subject','$message')";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
    echo"<script>alert('Thank You For Contacting Us. We will get back to you Soon.');
    windows.location='contactus.php'</script>";
    }
    else
    {
    echo"<script>alert('Your Message was not sent!! Please Try Again..');
    windows.location='contactus.php'</script>";
    }
}else{
    $MSG = "";
}

?>               
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
<?php require_once('footer.php')?>    