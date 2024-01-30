<?php
if(isset($_POST['log_outbtn']))
session_destroy();
unset($_SESSION['username']);
header('Location: login.php');
?>