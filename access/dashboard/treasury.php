

<?php
include 'empty - Copy.html';
?>

<div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h3 class="page-header">
                            Money Not Associated With Subscriptions <small></small>
                        </h3>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class='panel-heading'><h4>Make payment into the account</h4></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="POST" action="save.php">
                                    <!--Full name-->
                                    <label>Entered By</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i>
                                            </span>
                                            <input class="form-control" required="required" placeholder="Entered Your Name" name="user">
                                        </div>

                                        <!--Last name-->
                                    <label>Date Debited</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class=""></i>
                                            </span>
                                            <input class="form-control" required="required" type="date" placeholder="Enter Date" name="date">
                                        </div>

                                        <!--Phone Number-->
                                    <label>Amount</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i>
                                            </span>
                                            <input class="form-control" type="number" required="required" placeholder="Enter Amount" name="amount">
                                        </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                        <!--Why does thw person want to join the club?-->
                                        <div class="form-group">
                                            <label>Discription</label>
                                            <textarea class="form-control" required="required" rows="3" name="note"></textarea>
                                        </div>
                                        <!--<div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>-->

                                        <button type="submit" class="btn btn-default">Debit</button>
                                        <button type="reset" class="btn btn-default">Cancel</button>
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

                <!--Row-->
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class='panel-heading'><h4>Withdraw from the account</h4></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="POST" action="save.php">
                                    <!--Full name-->
                                    <label>Withdrawn By</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i>
                                            </span>
                                            <input class="form-control" required="required" placeholder="Enter Your Name" name="user">
                                        </div>

                                        <!--Last name-->
                                    <label>Date Withdrawn</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class=""></i>
                                            </span>
                                            <input class="form-control" required="required" type="date" placeholder="Enter Date" name="date">
                                        </div>

                                        <!--Phone Number-->
                                    <label>Amount</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i>
                                            </span>
                                            <input class="form-control" type="number" required="required" placeholder="Enter Amount to withdraw" name="amount">
                                        </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                        <!--Why does thw person want to join the club?-->
                                        <div class="form-group">
                                            <label>Purpose</label>
                                            <textarea class="form-control" required="required" rows="3" name="note"></textarea>
                                        </div>
                                        <!--<div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>-->

                                        <button type="submit" class="btn btn-default">Withdraw</button>
                                        <button type="reset" class="btn btn-default">Cancel</button>
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

             <!-- /. PAGE INNER  -->
            </div>
        