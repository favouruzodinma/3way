<?php
@session_start();


$hostname="localhost";
$dbUser="root";
$dbPassword="";
$dbName="3ways";
// $conn = mysqli_connect('localhost', 'swifbxyt_swiftblock', 'swiftblockadmin123', 'swifbxyt_swiftblock');
$conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName);

if(!$conn){
    die("something went wrong, check your network");
}


?>
