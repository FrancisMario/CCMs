<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    # code...
    header("Location: ../../");
}
include 'empty - Copy.html';
?>



<div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h3 class="page-header">
                            Quick Search Table <small>Search any member by Name OR Gr Number</small>
                        </h3>
                    </div>
                </div> 
                 <!-- /. ROW  -->

<div class='row'>
                <div class='col-md-12'>
                <?php
                

              
               $data = $_POST['search'];
               include 'upload.php';

                $sql = "SELECT * FROM `clubmember` WHERE FirstName = '$data'";
            

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
            <th> Field</th>
            <th> Shift </th>
            <th> Reg. No.</th>
            </tr>";


               while ($row = mysqli_fetch_array($r)){
                $id  = $row['Id']; 
     echo "<tr>
     <td>".$row['FirstName']."</td>
     <td>".$row['LastName']."</td>
     <td>".$row['PhoneNumber']."</td>
     <td>".$row['GRNumber']."</td>
     <td>".$row['Gender']."</td>
     <td>".$row['Grade']."</td>
     <td>".$row['Class']."</td>
     <td>".$row['Field']."</td>
     <td>".$row['Shift']."</td>
     <td>".$row['Id']."</td>";
 }

 echo "</table>
 </div>
 </div>
 </div>
 </div>";
?>
</div>
</div>
</div>

