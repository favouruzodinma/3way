<?php
session_cache_expire(120);
ini_set('session.gc_maxlifetime', 7200); 
@session_start();

include("conn.php");

$email = $conn->real_escape_string($_GET['email']);

mysqli_query($conn,"update applicant SET  regstat='verified' where email='$email'");
$_SESSION['msg']='Your Account Has Been Successfully Verified <img src="yes.png" align="absmiddle">';
header("location: login");
?>