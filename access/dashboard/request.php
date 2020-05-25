/<?php
include 'empty - Copy.html';

if (!isset($_SESSION['club'])) {
    # code...
    header("Location: login-dashboard.html");
}




$club = $_SESSION['club'];
$user = $_SESSION['user'];

?>
   


<div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h3 class="page-header">
                            Members Table <small>all members of the club excluding executives: <h2> Loged in as: <?php echo $user ." ".$club; ?></h2></small>
                        </h3>
                    </div>
                </div> 
                 <!-- /. ROW  -->

<div class='row'>
                <div class='col-md-12'>
                <?php
                include 'upload.php';?>

               <?php
$sql = "SELECT * FROM `$club` WHERE approve='true';";

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
            <th> Gender</th>
            <th> Grade</th>
            <th> Class</th>
            <th> Shift </th>
            <th> View </th>
            </tr>";


 while ($row = mysqli_fetch_array($r)){
     $id = $row['id'];
     $total = $row['Total'];
     echo "<tr>
     <td>".$row['FirstName']."</td>
     <td>".$row['LastName']."</td>
     <td>".$row['PhoneNumber']."</td>
     <td>".$row['GRNumber']."</td>
     <td>".$row['Gender']."</td>
     <td>".$row['Grade']."</td>
     <td>".$row['Class']."</td>
     <td>".$row['Shift']."</td>
     <td><form method='post' action='profile.php'> 
     <input type='text' name='id' value='$id' style='display:none'>
     <button type=submit>Profile</button>
     </td>";
 }

 echo "</table>
 </div>
 </div>
 </div>
 </div>";
?>
</div>
</div>

