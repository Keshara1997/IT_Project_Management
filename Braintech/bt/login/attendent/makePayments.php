<?php 
    require_once ("../include/initialize.php");
    require_once ("../include/connection.php");
    require_once("inc/redirectA.php");

                        $error = 1;
                        $CourseID = test_input($_GET['CID']);
                        $studentID = test_input($_GET['STID']);

                        $Year = date('Y');
                        $PastYear = $Year-1;
                        $PR1Year = $Year+1;
                        $PR2Year = $Year+2;
                        $PR3Year = $Year+3;
                        $PR4Year = $Year+4;
                        
                        $CourseID = mysqli_real_escape_string($mysqli,$CourseID);
                        $studentID = mysqli_real_escape_string($mysqli,$studentID);

                        $result = $mysqli->query("SELECT * FROM tblstudent WHERE STID = '$studentID' LIMIT 1") or die($mysqli->error);
                        while ($row = $result->fetch_assoc()):

                            $error      = 0;
                            $STID       = $row['StudentID'];
                            $STID2      = $row['STID'];
                            $STFname    = $row['Fname'];
                            $STLname    = $row['Lname'];
                            $STbd       = $row['BIRTHDAY'];
                            $STAddress  = $row['Address'];
                            $STMobileNo = $row['MobileNo'];
                            $STEmail    = $row['EMAIL'];
                            $STSchool   = $row['SCHOOL'];
                            
                        endwhile;

                        if($error == 1){
                            echo "<script>alert('Invalid Student ID');</script>";
                            echo "<script>location='Aregister.php';</script>";
                        }
                            
                    
?>


<!DOCTYPE html>
<html>

<head>
    <base href="../" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>BRAINTECH</title>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="assets/css/vendors.bundle.min.css" />
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="assets/css/main.bundle.min.css" />
    <link rel="stylesheet" href="assets/vendors/filepond/dist/filepond.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" />
</head>

<body>
    <div class="app-admin-wrap-layout-1 sidebar-full sidebar-theme-slate">
    <?php include('inc/headerA.php'); ?>



         
            <!-- Start::Main header  -->
            <header class="main-header bg-card d-flex flex-row justify-content-between align-items-center px-lg">
                <!-- Start::Header menu-->
                <div>
                        <div class="ul-header-menu">
                            <ul class="ul-header-nav">
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Payments</a></li>
                            </ul>
                        </div>
     
                </div>
                <!-- End::Header menu-->
                <div class="ul-header-topbar">
                    <div class="flex-grow-1">
                        <div class="header-btn-group">
                            <button class="btn d-flex py-1 pl-2 pr-0 rounded"  type="button" ><span class="m-0 mr-2 font-weight-normal">Hi, <?php echo $_SESSION['ATT_NAME']; ?></span>
                                <img class="avatar-sm rounded-circle mr-1" src="assets/images/faces/1.png" />
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End::Main header-->
            <!-- Start:: content body-->
            <div class="main-content-body">    
                
                <div class="px-lg py-xxxl bg-card">
                    <div class="container">
                        <div class="d-flex mb-xl"><img class="avatar-xl mr-lg" src="assets/images/faces/1.png" alt="" />
                            <div class="w-full">
                                <div class="d-flex flex-column flex-wrap flex-sm-row align-items-sm-center mb-sm">
                                    <div class="mr-xl">
                                        <h4 class="m-0 d-flex align-items-center"><?php echo ($STFname); ?> <?php echo ($STLname); ?><i class="material-icons text-18 text-primary mx-xs" data-toggle="tooltip" title="Verified">verified</i></h4>
                                        <p class="m-0 text-small text-muted"><?php echo ($STID2); ?></p>
                                    </div>
                                </div>
                                <div class="d-flex mb-sm">
                                    <p class="m-0 mr-xl"><span class="text-small text-muted">Birthday - </span><span class="font-weight-semi"><?php echo ($STbd); ?></span></p>
                                    <p class="m-0 mr-xl"><span class="text-small text-muted">Contact - </span><span class="font-weight-semi"><?php echo ($STMobileNo); ?></span></p>
                                </div>
                                <p class="m-0 mr-xl"><span class="text-small text-muted">School - </span><span class="font-weight-semi"><?php echo ($STSchool); ?></span></p>
                                <p class="m-0 mr-xl"><span class="text-small text-muted">Email - </span><span class="font-weight-semi"><?php echo ($STEmail); ?></span></p>
                           </div>
                        </div>
                    </div>
                </div>




                <div class="mt--xxl mb-xxxl px-lg position-relative z-index-default">
                    <div class="container">
                        <div class="nav-tabs-primary">
                            <ul class="nav nav-tabs mb-xl" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tabs-1">Payment Details</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="tabs-1" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-12">
                                            <div class="card mb-md">
                                                <div class="card-header justify-content-between align-items-center p-md">
                                                    <div class="font-weight-semi m-0">Last Payment Date</div>
                                                </div>
                                                <div class="card-body px-md">

                                                <?php
                                                    $result = $mysqli->query("SELECT * FROM tbpayments WHERE CID = $CourseID  AND ST_ID = $STID ORDER BY PAYMENT_ID DESC LIMIT 1") or die($mysqli->error);
                                                    while ($row = $result->fetch_assoc()):
                                                ?>
                                                    <button type="button" class="btn btn-default text-30"><?php echo $row['P_MONTH']; ?>/<?php echo $row['P_DATE']; ?>/<?php echo $row['P_YEAR']; ?></button>
                                                <?php endwhile; ?>

                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-lg-9 col-md-12">
                                            <div class="card mb-md">
                                                <div class="card-header justify-content-between align-items-center p-md">
                                                    <div class="font-weight-semi m-0">Payments</div>
                                                </div>
                                                <div class="card-body px-md">

                                                        <div class="col-lg-12 mb-md">
                                                            <form action="attendent/action/paymentControl.php" method="POST">

                                                                <input  type="hidden" name="STID" value="<?php echo ($STID); ?>"/>
                                                                <input  type="hidden" name="CID" value="<?php echo ($CourseID); ?>"/>

                                                                <label for="exampleInputEmail1">Things to Give</label><br><br>
                                                                <div class="row">
                                                                    <div class="col-md-4 mb-md">
                                                                        <div class="mb-md custom-control custom-checkbox checkbox-success">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="tute" value="Yes" checked>
                                                                            <label class="custom-control-label" for="customCheck1">Tutes</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-md">
                                                                        <div class="mb-md custom-control custom-checkbox checkbox-success">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck2" name="paper" value="Yes">
                                                                            <label class="custom-control-label" for="customCheck2">Question Papers</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-md">
                                                                        <div class="mb-md custom-control custom-checkbox checkbox-success">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck3" name="Other" value="Yes">
                                                                            <label class="custom-control-label" for="customCheck3">Others</label>
                                                                        </div> 
                                                                    </div>
                                                                </div>
                                                                <label for="exampleInputPassword1">Payment Date</label>

                                                                <div class="row">
                                                              
                                                                <div class="col-md-4 mb-md">
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Select Year</label>
                                                                    <select id="ddlYears"  name="Year">
                                                                        <option value="<?= date('Y') ?>"><?= date('Y') ?></option>
                                                                        <option value="<?= $PastYear ?>"><?= $PastYear ?></option>
                                                                        <option value="<?= $PR1Year ?>"><?= $PR1Year ?></option>
                                                                        <option value="<?= $PR2Year ?>"><?= $PR2Year ?></option>
                                                                        <option value="<?= $PR3Year ?>"><?= $PR3Year ?></option>
                                                                        <option value="<?= $PR4Year ?>"><?= $PR4Year ?></option>
                                                                    </select>
                                                                </div>
                                                                </div>
                                                                <div class="col-md-4 mb-md">                                    
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Select Month</label>
                                                                    <select class="selectpicker"  id="ddlYears"  name="Month">
                                                                        <option value="<?= date('m') ?>"><?= date('M') ?></option>
                                                                        <option value="1">January</option>
                                                                        <option value="2">February</option>
                                                                        <option value="3">March</option>
                                                                        <option value="4">April</option>
                                                                        <option value="5">May</option>
                                                                        <option value="6">June</option>
                                                                        <option value="7">July</option>
                                                                        <option value="8">August</option>
                                                                        <option value="9">September</option>
                                                                        <option value="10">Octomber</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">December</option>
                                                                    </select>
                                                                </div>
                                                                </div>
                                                                <div class="col-md-4 mb-md">
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Select Date</label>
                                                                    <select class="selectpicker"  id="ddlYears"  name="Date">
                                                                        <option value="<?= date('d') ?>"><?= date('d') ?></option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                        <option value="13">13</option>
                                                                        <option value="14">14</option>
                                                                        <option value="15">15</option>
                                                                        <option value="16">16</option>
                                                                        <option value="17">17</option>
                                                                        <option value="18">18</option>
                                                                        <option value="19">19</option>
                                                                        <option value="20">20</option>
                                                                        <option value="21">21</option>
                                                                        <option value="22">22</option>
                                                                        <option value="23">23</option>
                                                                        <option value="24">24</option>
                                                                        <option value="25">25</option>
                                                                        <option value="26">26</option>
                                                                        <option value="27">27</option>
                                                                        <option value="28">28</option>
                                                                        <option value="29">29</option>
                                                                        <option value="30">30</option>
                                                                        <option value="31">31</option>
                                                                    </select>
                                                                </div>
                                                                </div>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Amount (LKR)</label>
                                                                    <input class="form-control" type="text" aria-describedby="emailHelp" name="Amount" placeholder="1500.00" autofocus="autofocus" required />
                                                                </div>

                                                                <button class="btn btn-raised-primary btn-block" type="submit" name="submit" value="PayAttend">Pay & Attend</button>
                                                                <button class="btn btn-raised-success btn-block" type="submit" name="submit" value="payOnly">Pay Only</button>
                           

                                                            </form>     
                                                        </div>
                                                 
                                                </div>
                                            </div>
                                        </div>




                                                    
                                  



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
           


            </div>



            
                <!-- Start:: content (Your custom content)-->
                <!-- Start:: Footer-->
                <?php include('../include/footer.php'); ?>
                <!-- End:: Footer-->
            </div>
            <!-- End:: content body-->
        </div>
    
    </div>

    <!--Sidebar panel Profile-->
   
    <div class="ul-sidebar-panel-overlay"></div>
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/pages/datatables/basicDatatable.min.js"></script>
    <script src="assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="assets/js/pages/forms/forms.bootstrap-select.min.js"></script>
</body>

</html>