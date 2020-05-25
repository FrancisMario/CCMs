<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    # code...
    header("Location: login-dashboard.html");
}
include 'empty - Copy.html';

if (!isset($_SESSION['club'])) {
    # code...
    header("Location: login-dashboard.html");
}



$id = $_POST['id'];
$club = $_SESSION['club'];
$user = $_SESSION['user'];

?>
   
<div id="page-wrapper" >
 <?php

 include "User.php";

 $user = new User($id);

       $name = $user->name;
       $status = $user->status;
       $dofor = $user->dofor;
       $whyjoin = $user->whyjoin;
       $achive = $user->achive;
       $address = $user->address;
       $contact = $user->contact;
       $gender = $user->gender;
       $grade = $user->grade;
       $grnumber = $user->grnumber;
       $field = $user->field;
       $shift = $user->shift;
       $class = $user->class;
       $profile = $user->profile;
       $total = $user->total;
       $regid = $user->regid;

       echo $name;
       echo $status;
       echo $dofor;
       echo $whyjoin;
       echo $achive;
       echo $address;
       echo $contact;
       echo $gender;
       echo $grade;
       echo $grnumber;
       echo $field;
       echo $shift;
       echo $class;
       echo $profile;
       echo $total;
       echo $regid;

?>
 </div>
