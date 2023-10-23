<?php
session_cache_expire(120);
ini_set('session.gc_maxlifetime', 7200); 
@session_start();

include("conn.php");


$email = $conn->real_escape_string($_GET['email']);
$test='email.php';
include('mail.php');
// @mail($email,"Job Portal - Account Verification", "Hello,\nPlease click the link below (or copy and paste on your browser) to verify your jobportalng.com account.\nhttp://www.jobportalng.com/verify?email={$email}","From: noreply@jobportalng.com");
$_SESSION['msg']='<font color=green><b>Verification Link Sent <img src="yes.png" align="absmiddle"><br> Kindly check your email (and spam folder) for activation link. <a href=resend?email='.$email.' style="color:red">Resend</a></b></font><br>';
header("location: login");

?>