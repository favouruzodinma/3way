<?php
include_once('../function.php');

$error = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['signup'])) {

        $userid = date("shi") . rand(203994, 485789);

        if (empty($_POST['fname'])) {
            $errFname = "First Name is required!!";
            $error = true;
        } else {
            $fname = cleaninput($_POST["fname"]);
        }

        if (empty($_POST['lname'])) {
            $errLname = "Last Name is required!!";
            $error = true;
        } else {
            $lname = cleaninput($_POST["lname"]);
        }

        if (empty($_POST['uname'])) {
            $errUname = "Username is required!!";
            $error = true;
        } else {
            $uname = cleaninput($_POST["uname"]);
        }

        if (empty($_POST['email'])) {
            $errEmail = "Email is required!!";
            $error = true;
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = "Email is not valid";
            $error = true;
        } else {
            $email = cleaninput($_POST['email']);
            $sql = $conn->query("SELECT email FROM admin WHERE email ='$email' ");

            if ($sql->num_rows > 0) {
                $errEmail = "Email is already taken!!";
                $error = true;
            }
        }

        if (empty($_POST["password"])) {
            $PasswordErr = "Password is required";
            $error = true;
        } elseif (strlen($_POST['password']) < 5) {
            $PasswordErr = "Password is too short!!";
            $error = true;
        } elseif (strlen($_POST['password']) > 16) {
            $PasswordErr = "Password is too long!!";
            $error = true;
        } else {
            $password = cleaninput($_POST['password']);
        }

        if (empty($_POST["cpassword"])) {
            $CpasswordErr = "Confirm your password";
            $_error = true;
        } else {
            $cpassword = cleaninput($_POST["cpassword"]);
            if ($password != $cpassword) {
                $CpasswordErr = "Passwords don't match";
                $error = true;
            }
        }

        if ($error == false) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = $conn->query("INSERT INTO admin SET fname='$fname', lname='$lname', uname='$uname', email='$email', password='$hashed_password'");

            if ($sql) {
                header('Location:../login');
            } else {
                echo "<h1>Fail!</h1>";
            }
        }
    }
}
?>
