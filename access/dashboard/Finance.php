<?php

include 'empty - Copy.html';
if (!isset($_SESSION['club'])) {
  # code...

    header("Location: login-dashboard.html?login to continue");
  
}
$club = $_SESSION['club'];


?>




	<?php include 'upload.php';?>

<div id="page-wrapper" >
            <div id="page-inner">
       <div class="row">
                    <div class="col-md-12">
                        <h3 class="page-header">
                            Subscriptions <small></small>
                        </h3>
                    </div>
                </div> 
                 <!-- /. ROW  -->

<div class='row'>
                <div class='col-md-12'>
<?php
$sql = "SELECT * FROM `$club` WHERE 1";


$r = mysqli_query($link, $sql);

//table
echo "<div class='panel panel-default'>
        <div class='panel-heading'> </div>
        <div class='panel-body'>
        <div class='table-responsive'>
        <table class='table table-striped table-bordered table-hover' >
            <tr>
            <th> Name </th>
            <th> Last Name</th>
            <th> Grade </th>
            <th> Class </th>
            <th> Amount</th>
            <th> </th>
            <th>  Total  </th>
            </tr>";


 while ($row = mysqli_fetch_array($r)){
     $id = $row['id'];
     $total = $row['Total'];
     echo "<tr>
     <td>".$row['FirstName']."</td>
     <td>".$row['LastName']."</td>
     <td>".$row['Grade']."</td>
     <td>".$row['Class']."</td>
     <td>D<form action='savecash.php' method='post'><input style='color:#000'   class'input-exp' type='number' name='cash' placeholder='Enter Amount' required='required'>
     <input type='text' name='id' value='$id' style='display:none;'>
     <input type='text' name='old' value='$total' style='display:none;'></td>
     <td><input style='background-color:#ffffff;' type='submit' value='Save'> </form></td>
     <td>D $total.00</td>";
 }

 echo "</table>
 </div>
 </div>
 </div>
 </div>";

?>
</div>
</div>

