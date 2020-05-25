<?php



 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
session_start();
	# code...
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$grnumber = $_POST['grnumber'];
$grade = $_POST['grade'];
$class = $_POST['class'];
$field = $_POST['field'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$shift = $_POST['shift'];
$whyjoin = $_POST['whyjoin'];
$dofor = $_POST['dofor'];
$achieve = $_POST['achieve'];
$source = $_POST['source'];
$approve = $_POST['approve'];

$club = $_SESSION['club'];

include 'upload.php';

$sql = "INSERT INTO $club (`FirstName`, `LastName`, `PhoneNumber`, `GRNumber`, `Gender`, `Grade`, `Class`, `Field`, `Shift`, `Why`, `Achieve`, `Dofor`, `id`,`source`,`approve`) VALUES ($firstname, $lastname, $phone,$grnumber, $gender, $grade, $class, $field, $shift, $whyjoin, $achieve, $dofor, NUll, $source, $approve);";

// mysqli_query($link, $sql);

 if (mysqli_query($link, $sql)) {
  
  if ($source === 'in') {
  	# code...
 header("Location: form.php?msg=successfull");

 } else {
 	header("Location: application.php?msg=successfull");
 }
 } 

 else{
	
  if ($source === 'in') {
  	# code...
 header("Location: form.php?msg=Unsuccessfull");

 } else {
 	header("Location: application.php?msg=Unsuccessfull");
 }
 } 

 } else {
 	header("Location: login-dashboard.html");
 }

?>