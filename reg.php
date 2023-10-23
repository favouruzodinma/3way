<?php
session_cache_expire(120);
ini_set('session.gc_maxlifetime', 7200); 
@session_start();

include("conn.php");
require("function.php");


$user_id=clean($_POST['user_id']);
$fn=clean($_POST['fn']);
$middle=clean($_POST['middle']);
$surname=clean($_POST['surname']);
$phone=clean($_POST['phone']);
$email=clean($_POST['email']);
$gender=clean($_POST['gender']);
$birthday=clean($_POST['birthday']);
$address=clean($_POST['address']);
$city =clean($_POST['city']);
$state =clean($_POST['state']);
$country=clean($_POST['country']);
$academic=clean($_POST['academic']);
$fal_id=clean($_POST['faculty']);
$dpt=$conn->query("select * from faculty where faculty_id='$fal_id' ");
if($dpt->num_rows>0){
$bow1=$dpt->fetch_assoc();
$fal_id=$bow1['faculty_id'];
$fal_name=$bow1['dname'];
  } 
$department=clean($_POST['department']);
$pass=clean($_POST['pass']);

$result = mysqli_query($conn, "SELECT * FROM applicant where email='$email'");
if (mysqli_num_rows($result) == 0) {
    $_SESSION["em"]=$email;
    $dtime=date('d-M-Y - h:i a');
  
   //create account
    $sql= mysqli_query($conn, "insert into applicant set fn='$fn', mn='$middle', surn='$surname', phone='$phone', email='$email', gender='$gender', birthday='$birthday', address='$address',dstate='$state', city='$city', country='$country', faculty='$fal_name', department='$department', aca_session='$academic', password='$pass',  user_id='$user_id'") or die(mysqli_error($conn));

    if($sql){  
//send verification email
$test='email.php';
include('mail.php');
    }
    $_SESSION["msg"]='Your registration was successful! Check your mail box (and spam folder) for verification email';
    header("location: application");

}else {
    $_SESSION["msg"]='<div class="Email address already exist! login below to complete transaction';
    header("location: application");
    }


?>