<?php
session_cache_expire(120);
ini_set('session.gc_maxlifetime', 7200); 
@session_start();

include("conn.php");
require("function.php");

$email=clean($_POST['email']);
$pass=clean($_POST['pass']);

$local_ip=$_SESSION['current_page'];



//check banned
$result = mysqli_query($conn, "SELECT * FROM applicant where email='$email' and password='$pass' and regstat='verified'");
$pending = mysqli_query($conn, "SELECT * FROM applicant where email='$email' and password='$pass' and regstat='pending'");

if (mysqli_num_rows($pending) >=1) {
    $_SESSION["em"]=$email;
    $_SESSION["msg"]='<font color=red><b>Account not yet verified </b>..Kindly check your mail box (and spam folder) for verification - <a href=resend?email='.$email.'>Click here</a> to resend verification email.</font>';
    header("location: login");
    } 
else if (mysqli_num_rows($result) >= 1) {
    $_SESSION["em"]=$email;
    $dtime=date('d-M-Y - h:i a');
   
        mysqli_query($conn, "update applicant set vstatus='online' where email='$email'");
        header("location: dashboard");  
    }
    
else {
$_SESSION["msg2"]='Invalid Operation! wrong credentials supplied';
header("location: login");
}
?>