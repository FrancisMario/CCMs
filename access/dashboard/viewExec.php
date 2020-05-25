<?php
// if ($_SERVER['REQUEST_METHOD'] != 'POST') {
//     # code...
//     header("Location: ../../");
// }
include 'empty - Copy.html';
?>



<div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h3 class="page-header">
                            Members Table <small>all members of the club excluding executives</small>
                        </h3>
                    </div>
                </div> 
                 <!-- /. ROW  -->

<div class='row'>
                <div class='col-md-12'>
                <?php
                include 'upload.php';?>

               <?php

if (!isset($_SESSION['club'])) {
    # code...
    header("Location: login-dashboard.html");
}




$club = $_SESSION['club'];
$user = stripcslashes($_SESSION['user']);
$user = trim($user);
echo $club;

$sql = "SELECT * FROM $club WHERE status > 0";

$r = mysqli_query($link, $sql);

//table
echo "<div class='panel panel-default'>
        <div class='panel-heading'> Advanced Table</div>
        <div class='panel-body'>
        <div class='table-responsive'>
        <table class='table table-striped table-bordered table-hover' >
            <tr>
            <th> First Name </th>
            <th> Last Name</th>
            <th> Phone Number</th>
            <th> GR Number</th>
            <th> Position</th>
            
            </tr>";


 while ($row = mysqli_fetch_array($r)){
     $id = $row['Id'];
     $data = $row['status'];
      
      switch ($data) {
      	case 1:
      	$position = 'General Member';
      		break;
      		case 2:
      		# code...
      	$position = 'President';
      		break;
      		case 3:
      		# code...
      	$position = 'Vice President';
      		break;
      		case 4:
      		# code...
      	$position = 'Presidents Adviser';
      		break;
      		case 5:
      		# code...
      	$position = 'Secretary';
      		break;
      		case 6:
      		# code...
      	$position = 'Assistant Secretary';
      		break;
      		case 7:
      		# code...
      	$position = 'Financial Secretary';
      		break;
      		case 8:
      		# code...
      	$position = 'Assistant Financial Secretary';
      		break;
      		case 9:
      		# code...
      	$position = 'Social Secretary';
      		break;
      		case 10:
      		# code...
      	$position = 'Assistant Social Secretary';
      		break;
      		case 11:
      		# code...
      	$position = 'Auditor';
      		break;
      		case 12:
      		# code...
      	$position = 'Training Consultant';
      		break;
      		case 13:
      		# code...
      	$position = 'PRO';
      		break;
      		case 14:
      		# code...
      	$position = 'Assistant PRO';
      		break;
      		case 15:
      		# code...
      	$position = 'Lab Monitor';
      		break;
      		case 16:
      		# code...
      	$position = 'Assistant Lab Monitor';
      		break;

      	default:
      		# code...
      	$position = 'General Member';
      		break;
      }
       
       if ($position > 1) {
         # code...
       
     $total = $row['Total'];
     echo "<tr>
     <td>".$row['FirstName']."</td>
     <td>".$row['LastName']."</td>
     <td>".$row['PhoneNumber']."</td>
     <td>".$row['GRNumber']."</td>
     <td>$position</td>
     ";
 }

 echo "</table>
 </div>
 </div>
 </div>
 </div>";
}
?>
</div>
</div>

