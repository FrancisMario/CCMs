<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    # code...
    header("Location: login-dashboard.html");
}

$username = strtolower($_POST['user']);
$password = $_POST['password'];

//the user name and the password are hardcoded into the authentication files



include 'upload.php';


 $sql = "SELECT * FROM `admins` WHERE user='$username' AND password='$password';";

$r = mysqli_query($link,$sql);

$n = mysqli_affected_rows($link);

if($n > 0){

$row = mysqli_fetch_array($r);
 
 session_start();
// Set session variables
$_SESSION["user"] = $row['user'];
$_SESSION["club"] = $row['club'];
$_SESSION["tresury"] = $row['tresury'];

header("Location: request.php");

}else{
	echo "it didn't work<br/>";
	echo $n;
	header("Location: login-dashboard.html");
}

 