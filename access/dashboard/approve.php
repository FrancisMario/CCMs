<?php
session_start();


if (isset($_SESSION['club'])) {
	# code...
$id = $_POST['id'];
$club = $_SESSION['club'];

include 'upload.php';
 
$sql = "UPDATE `$club` SET approve = 'true' WHERE id= $id;";

if (mysqli_query($link,$sql)){
	# code...
	header("Location: request.php?successfull");
}


 else{

// header("Location: ../../index.php");
	header("Location: request.php?unsuccessfull");

} 
}
else {
	header("Location: login-dashboard.html");
}
//UPDATE `nusrat.members` SET status= 1 WHERE id=1
?>