<?php

include 'upload.php';

$mem = array('peerhealthmem','pressmem','healthmem','sciencemathmem','librarymem','govhismem','redcrossmem','bookmem','farmassocmem','sumemam','amsamem','nicamem','frenchmem');

$tresury = array('peerhealthtresury','presstresury','healthtresury','sciencemathtresury','librarytresury','govhistresury','redcrosstresury','booktresury','farmassoctresury','sutresury','amsatresury','nicatresury','frenchtresury');

$user = array('peerheath@ccms','press@ccms','health@ccms','science@ccms','library@ccms','govhis@ccms','redcross@ccms','book@ccms','farm@ccms','su@ccms','amsa@ccms','nica@ccms','french@ccms');

$name = array('mario','chinchi','lucas','lawboi','aziz','muhammed','mustic','alex','john','peter');

$LastName = array('gomez','mendy','mendy','mendy','tamba','balajo','sanyang','pratt','doe','mendy');

// CREATE TABLE `nusrat`. ( `FirstName` INT NOT NULL , `LastName` INT NOT NULL , `PhoneNumber` INT NOT NULL , `GRNumber` INT NOT NULL , `Gender` INT NOT NULL , `Class` INT NOT NULL , `Field` INT NOT NULL , `Shift` INT NOT NULL , `Grade` INT NOT NULL , `Why` INT NOT NULL , `Achieve` INT NOT NULL , `Dofor` INT NOT NULL , `Total` INT NOT NULL , `source` INT NOT NULL , `approve` INT NOT NULL , `status` INT NOT NULL , `id` INT NOT NULL AUTO_INCREMENT , PRIMARY KEY (`LastName`)) ENGINE = InnoDB;


  for ($i=0; $i < count($mem); $i++) { 
  	# code...
  	                                 // SQL To create tables
  	// $sql = "INSERT INTO `admins` (`user`, `password`, `SQ1`, `SA1`, `SQ2`, `SA2`, `tresury`, `club`) VALUES ('$user[$i]', '12345', '', '', '', '', '$tresury[$i]', '$mem[$i]');";
        
        // $sql  = "ALTER TABLE `$mem[$i]` DROP `id`;";      
// $fill = "INSERT INTO `$mem[$i]` (`FirstName`, `LastName`, `PhoneNumber`, `GRNumber`, `Gender`, `Grade`, `Class`, `Field`, `Shift`, `Why`, `Achieve`, `Dofor`, `Total`, `source`, `approve`, `status`, `id`) VALUES ('mario', 'gomez', '3247034', '6455', 'male', '12', 'technical', 'technical', 'morning', 'nothing', 'nothing', 'nothing', '', 'in', 'true', '0', NULL);";


                         // Sql To Add Id column
  	//$sql = "ALTER TABLE $mem[$i] ADD `id` INT NOT NULL AUTO_INCREMENT AFTER `status`, ADD PRIMARY KEY (`id`);";
  // $sql = "DROP TABLE `$tresury[$i]`;";
               // sql to create the tresury table
    // $sql = "CREATE TABLE $tresury[$i] ( `user` VARCHAR(20) NOT NULL , `date` VARCHAR(20) NOT NULL , `amount` INT(20) NOT NULL , `note` TEXT NOT NULL , `action` VARCHAR(10) NOT NULL ) ENGINE = InnoDB;";

    $sql = "ALTER TABLE `$mem[$i]` ADD `Address` VARCHAR(35) NOT NULL AFTER `status`;";
    // $sql = "ALTER TABLE `$mem[$i]` DROP `Profile`;";

  	if (mysqli_query($link,$sql)) {
  		# code...
  		echo $mem[$i]."passed<br>";
  	}
  	else {
  		echo $mem[$i]."failed<br>";
  	}
  }


//   for ($i=0; $i < count($array); $i++) { 
//   	# code...
//   	$name = $array[$i];

//   	$sql = "CREATE TABLE $name (
//   `FirstName` varchar(40) NOT NULL,
//   `LastName` varchar(40) NOT NULL,
//   `PhoneNumber` int(11) NOT NULL,
//   `GRNumber` varchar(6) NOT NULL,
//   `Gender` text NOT NULL,
//   `Grade` int(11) NOT NULL,
//   `Class` text NOT NULL,
//   `Field` text NOT NULL,
//   `Shift` text NOT NULL,
//   `Why` text NOT NULL,
//   `Achieve` text NOT NULL,
//   `Dofor` text NOT NULL,
//   `Id` int(11) NOT NULL,
//   `Total` int(11) NOT NULL,
//   `source` text NOT NULL,
//   `approve` text NOT NULL,
//   `status` int(2) NOT NULL
// )";

//   	if(mysqli_query($link,$sql)){
//   		echo $i." passed";
//   	} else {
//   		echo $i." failed";
//   	}
//   }

