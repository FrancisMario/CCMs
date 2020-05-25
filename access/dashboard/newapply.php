<?php
include 'empty - Copy.html';
?>
<div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h3 class="page-header">
                            Members Application <small>the tabel below shows new applicants</small>
                        </h3>
                    </div>
                </div> 
                 <!-- /. ROW  -->

<div class='row'>
                <div class='col-md-12'>
<?php
if (isset($_SESSION['user'])) {
    # code...
$club = $_SESSION['club'];
	include 'upload.php';
	$data = 'true';
                $sql = "SELECT * FROM `$club` WHERE approve!='$data'";
                $r = mysqli_query($link, $sql);

                    //<!--Advanced Tables -->
                    echo"<div class='panel panel-default'>
                        <div class='panel-heading'>
                             Advanced Tables
                        </div>";
                        echo"<div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' >
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Phone Number</th>
                                            <th>GR Number</th>
                                            <th>Gender</th>
                                            <th>Grade</th>
                                            <th>Class</th>
                                            <th>Field</th>
                                            <th>Shift</th>
                                            <th>Id</th>
                                            <th></th>
                                            <th></th>
                                        </tr>";

                                    while ($row = mysqli_fetch_array($r)) {
                                    
                                    $id  = $row['id']; 
                                    echo"<form method='POST' action='approve.php'><tr>
                                    <input type='text' name='id' value='$id' style='display:none;'>
                                    
                                        <tr class='odd gradeX'>
                                        <td>".$row['FirstName']."</td>
                                        <td>".$row['LastName']."</td>
                                        <td>".$row['PhoneNumber']."</td>
                                        <td>".$row['GRNumber']."</td>
                                        <td>".$row['Gender']."</td>
                                        <td>".$row['Grade']."</td>
                                        <td>".$row['Class']."</td>
                                        <td>".$row['Field']."</td>
                                        <td>".$row['Shift']."</td>
                                        <td>".$row['id']."</td>;
                                        <td><button type='submit'>Approve</button></td>
                                        </form>
                                        <form method='POST' action='disapprove.php'>
                                        <input value=$id name='id' style='display:none;'>
                                        <td><button type='submit'>Disapprove</button></td></form>";
                                        echo"</tr>

                    
                                    </form>";
                                }
                                    echo "
                                </table>
                            </div>
                            
                        </div>
                    </div></div>";
                } else {
                    header("Location: login-dashboard.html");
                }