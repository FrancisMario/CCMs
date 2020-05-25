<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    # code...
    header("Location: login-dashboard.html");
}
else {
session_start();

if (isset($_SESSION['user'])) {
	# code...
 $club = $_SESSION['club'];

$cash = $_POST['cash'];
$oldcash = $_POST['old'];
$id = $_POST['id'];
$new = $oldcash + $cash;
if ($cash > 0) {

include 'upload.php';

$sql = "UPDATE `$club` SET `total`='$new' WHERE `Id`=$id";

if(mysqli_query($link, $sql)){

	header("Location: Finance.php");
}

} else{
	echo "You a big cheat";
} 
} else{
	header("Location: login-dashboard.html");
}

}