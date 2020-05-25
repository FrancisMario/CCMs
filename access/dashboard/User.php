<?php
 
 class User  {
   
 var $name;
 var $status;
 var $dofor;
 var $whyjoin;
 var $achive;
 var $address;
 var $contact;
 var $gender;
 var $grade;
 var $grnumber;
 var $field;
 var $shift;
 var $class;
 var $profile;
 var $total;
 var $regid;
   function __construct($data) {
     # code..    
   	function getArray($data){
   
   $club = $_SESSION['club'];

  $sql = "SELECT * FROM $club WHERE id=$data;";

  include 'upload.php';

  $r = mysqli_query($link,$sql);

  if ($row = mysqli_fetch_array($r)) {
  	# code...
  	return $row;
  } else {
  	echo "Error";
  }

 }
       $array = getArray($data);

       $this->name = $array['FirstName'].$array['LastName'];
       $this->status = $array['status'];
       $this->dofor = $array['Dofor'];
       $this->whyjoin = $array['Why'];
       $this->achive = $array['Achieve'];
       $this->address = $array['Address'];
       $this->contact = $array['PhoneNumber'];
       $this->gender = $array['Gender'];
       $this->grade = $array['Grade'];
       $this->grnumber = $array['GRNumber'];
       $this->field = $array['Field'];
       $this->shift = $array['Shift'];
       $this->class = $array['Class'];
       $this->profile = $array['Profile'];
       $this->total = $array['Total'];
       $this->regid = $array['id'];



        }

}
