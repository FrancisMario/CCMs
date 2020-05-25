<?php
include 'empty - Copy.html';
if (!isset($_SESSION['user'])) {
    # code...
   header("Location: login-dashboard.html");
}


?>



<div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h3 class="page-header">
                            Add Member <small></small>
                        </h3>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="POST" action="insert.php">
                                    <!--Full name-->
                                    <label>First Name</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i>
                                            </span>
                                            <input class="form-control" required="required" placeholder="Enter First Name" name="firstname">
                                            <input type="text" style="display: none;" name="source" value="in" />
                                            <input type="text" style="display: none;" name="approve" value="in" />
                                        </div>

                                        <!--Last name-->
                                    <label>Last Name</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i>
                                            </span>
                                            <input class="form-control" required="required" placeholder="Enter Last Name" name="lastname">
                                        </div>

                                        <!--Phone Number-->
                                    <label>Phone Number</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-mobile"></i>
                                            </span>
                                            <input class="form-control" required="required" placeholder="Enter Phone Number" name="phone">
                                        </div>
                                        <!--Phone Number-->
                                    <label>GR Number</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-unique"></i>
                                            </span>
                                            <input class="form-control" required="required" placeholder="Enter GR Number" name="grnumber">
                                        </div>
                                        <!--Gender-->
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control" required="required" name="gender">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <!--Grade-->
                                        <div class="form-group">
                                            <label>Grade</label>
                                            <select class="form-control" required="required" name="grade">
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                        <!--Class-->
                                        <div class="form-group">
                                            <label>Class</label>
                                            <input class="form-control" required="required" placeholder="Example: C3" name="class">
                                        </div>
                                        <!--Field-->
                                        <div class="form-group">
                                            <label>Field</label>
                                            <select class="form-control" required="required" name="field">
                                                <option value="Arts">Arts</option>
                                                <option value="Science">Science</option>
                                                <option value="Commerce">Commerce</option>
                                            </select>
                                        </div>
                                        <!--Shift-->
                                        <div class="form-group">
                                            <label>Shift</label>
                                            <select class="form-control" required="required" name="shift">
                                                <option value="Morning">Morning</option>
                                                <option value="Afternoon">Afternoon</option>
                                            </select>
                                        </div>
                                
                                
                                <!-- /.col-lg-6 (nested) -->
                                
                                        <!--Why does thw person want to join the club?-->
                                        <div class="form-group">
                                            <label>Why does the person want to join the club?</label>
                                            <textarea class="form-control" required="required" rows="3" name="whyjoin"></textarea>
                                        </div>
                                        <!--What does the person hope to achieve from the club?-->
                                        <div class="form-group">
                                            <label>What does the person hope to achieve from the club?</label>
                                            <textarea class="form-control" required="required" rows="3" name="achieve"></textarea>
                                        </div>
                                        <!--What can the person dofor the club?-->
                                        <div class="form-group">
                                            <label>What can the person dofor the club?</label>
                                            <textarea class="form-control" required="required" rows="3" name="dofor"></textarea>
                                        </div>
                                        <!--<div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>-->

                                        <button type="submit" class="btn btn-default">Add Member</button>
                                        <button type="reset" class="btn btn-default">Erase Input</button>
                                    </form>
                                </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
             <!-- /. PAGE INNER  -->
            </div>
        