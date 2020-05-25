<?php
session_start();
if (isset($_SESSION['user'])) {
	# code...
  include 'upload.php';

  $clubTreasury = $_SESSION['tresury'];

  $user = $_POST['user'];
  $date = $_POST['date'];
  $amount = $_POST['amount'];
  $note = $_POST['note'];
  $action = $_POST['action'];

  $sql = "INSERT INTO $clubTreasury (`user`, `date`, `amount`, `note`, `action`) VALUES ('$user', '$date', '$amount', '$note', '$action');";

  echo $clubTreasury."<br>";
  echo $user."<br>";
  echo $date."<br>";
  echo $amount."<br>";
  echo $note."<br>";
  echo $action."<br>";
   
   if (mysqli_query($link,$sql)) {
   	# code...
   	header("Location: treasury.php?sucessful");
   } else{
   	header("Location: treasury.php?failed");
   }

 }

?>