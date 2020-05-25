<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    # code...
    header("Location: login-dashboard.html");
}

$name = $_POST['firstname'];
$lname = $_POST['lastname'];
$grnumber = $_POST['grnumber'];
$gender = $_POST['gender'];
$grade = $_POST['grade'];
$class = $_POST['class'];
$field = $_POST['field'];
$phone = $_POST['phone'];
$shift = $_POST['shift'];
$whyjoin = $_POST['whyjoin'];
$dofor = $_POST['dofor'];
$achieve = $_POST['achieve'];

include 'upload.php';

$sql = "INSERT INTO `application` (`FirstName`, `LastName`, `Grade`, `Class`, `Field`, `PhoneNumber`, `Gender`,`GRNumber`,`Shift`,`Why`,`Dofor`,`Achieve`, `id`) VALUES ('$name', '$lname', '$grade', '$class', '$field', '$phone', '$gender','$grnumber','$shift','$whyjoin','$dofor','$achieve', NULL);";

if (mysqli_query($link, $sql)) {
	# code...
	echo 'you are in the IT club database';
	header("Location:application.php?msg=succeed");
} else {
	echo "Somethong Went wrong";
	header("Location:application.php?msg=failed");
}