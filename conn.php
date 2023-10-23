<?php
@session_start();

define('DB_SERVER', "localhost");
define('DB_USER', "root");
define('DB_PASSWORD', "");
define('DB_ENGINE', "3ways");


$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_ENGINE);
date_default_timezone_set("Africa/Lagos");
if ($conn->connect_error) {
    trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}

putenv("TZ=Africa/Lagos");
error_reporting(0);
?>