<?php
include 'design.html';

// if(isset($_GET)){
// $code = $_GET['msg'];
// if ($code === 'succedd') {
//   # code...
//   echo "the strings match";
// } else{

//  echo "the strings don't match";

// }

// }

?>
<title>Login</title>
<body>



  <div class="container-fluid" style="padding-top:64px;padding-left: 250px;background-color: #212121;">
  <div class="row">
  <div class="w3-row-padding">
  <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6" >
   <h5 style="color:#ffffff;text-align:center;">Add Member</h5>
    <form action="insert.php" method="POST" class="w3-form">
    <span style="color: #ffffff"><span class="ti-user" style="font-size: 20px;"></span>First Name:</span><br/><input class="input w3-animate-input" type="text" placeholder="Enter first name" name="name" required="required">
    <br><br>
    <span style="color: #ffffff"><span class="ti-mobile" style="font-size: 20px;"></span>Last Name:</span><br> <input class="input" type="text" placeholder="Enter last name" name="lname" required="required">
    <br><br>
    <span style="color: #ffffff"><span class="ti-mobile" style="font-size: 20px;"></span>GR Number:</span><br> <input class="input" type="text" placeholder="Enter last name" name="GR Number" required="required">
    <br><br>
    <span style="color: #ffffff"><span class="ti-email" style="font-size: 20px;"></span>Grade:</span><br><select class="w3-select w3-input" name="Grades" required="required">
     <option value="">--grade--</option>
    <option value="7">G7</option>
    <option value="8">G8</option>
    <option value="9">G9</option>
    <option value="10">G10</option>
    <option value="11">G11</option>
    <option value="12">G12</option>
  </select>
    <br>
    <span style="color: #ffffff"><span class="ti-email" style="font-size: 20px;"></span>field:</span><br><select class="w3-select w3-input" name="class" required="required">
     <option value="">--field--</option>
    <option value="Science">Science</option>
    <option value="Commerce">Commerce</option>
    <option value="Arts">Arts</option>
  </select>
    <br>
    <span style="color: #ffffff"><span class="ti-email" style="font-size: 20px;"></span>Gender:</span><br><select class="w3-select w3-input" name="gender" required="required">
     <option value="">--gender--</option>
    <option value="male">male</option>
    <option value="female">female</option>
  </select>
    <br>
    <span style="color: #ffffff"><span class="ti-email" style="font-size: 20px;"></span>Major Department:</span><br><select class="w3-select w3-input" name="Department" required="required">
     <option value="">--department--</option>
    <option value="Graphics Design">Graphics Design</option>
    <option value="Networking">Networking</option>
    <option value="PC Repairs">PC Repairs</option>
    <option value="Web Design">Web Design</option>
    <option value="Server Admin">Server Admin</option>
  </select>
  <br>
  <span style="color: #ffffff"><span class="ti-email" style="font-size: 20px;"></span>Minor Department:</span><br><select class="w3-select w3-input" name="Department2" required="required">
     <option value="">--department--</option>
    <option value="Graphics Design">Graphics Design</option>
    <option value="Networking">Networking</option>
    <option value="PC Repairs">PC Repairs</option>
    <option value="Web Design">Web Design</option>
    <option value="Server Admin">Server Admin</option>
  </select>
    
     <center><button class="btn btn-info" style="color: #ffffff;background-color: #80d900;width: 35%; " type="submit">Add</button></center>
     <?php if(isset($_GET)){
$code = $_GET['msg'];
if ($code === 'succeed') {
  # code...
  echo "the strings match"; //something to show on the screen to unable the user to know that the query succeeded
} else{

 echo "the strings don't match";//something to show on the screen to unable the user to know that the query didn't succeeded

}

} ?>
     <br>
    </form>
    </div>
    
  </div>
  </div>
  </div>






  <!--<p>      
    <label class="w3-label w3-text-brown"><b>Class</b></label>
    <input class="w3-input w3-border w3-sand" name="class" type="text"></p>
    <p>-->
    
  
  

</body>
</html> 

