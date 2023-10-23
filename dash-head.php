<?php
session_cache_expire(120);
ini_set('session.gc_maxlifetime', 7200); 
@session_start();

include("conn.php");

$em=$_SESSION["em"];

$result=mysqli_query($conn, "select * from applicant where email='$em' and regstat='verified' and email!=''") or die(mysqli_error($conn));
			  $crow = $result->fetch_assoc();
              $ride=$crow['user_id'];
			  $fn=$crow['fn'];
			  $mn=$crow['mn'];
              $ln=$crow['surn'];
              $phone=$crow['phone'];
              $email=$crow['email'];
			  $pic=$crow['pic'];
			  $dcity=$crow['address'];
			  $fee=$crow['fee_status'];
			  $fal=$crow['faculty'];
			  $dpt=$crow['department'];



		
			  
			  //referal fields
  
if (mysqli_num_rows($result)==0) 
{    
$_SESSION["msg"]="<font color=red><b>Login to your dashboard!.</b></font>";
header("location: login");
}
else {
//used for menu			  
if (mysqli_num_rows($result)>0) { $online='yes'; } else { $online='no'; }



	function read_able($ttime){
		return date("M j,Y ",strtotime($ttime));
	}

}
?>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Dashboard- All Nations Institute of Marine & Technology</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.jpg">

    <!-- inject:css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/fancybox.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- end inject -->
</head>