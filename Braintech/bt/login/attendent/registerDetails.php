<?php 
    require_once ("../include/initialize.php");
    require_once ("../include/connection.php");
    require_once("inc/redirectA.php");




    if(!isset($_GET['submit'])){
        echo "<script>location='Aregister.php';</script>";
    }else{
        $submit = $_GET['submit'];
    }

                        $error = 1;
                        $studentID = test_input($_GET['STID']);
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
                            if($submit == 'QR'){
                                echo "<script>alert('Invalid Student ID');</script>";
                                echo "<script>location='qrscanner.php';</script>";
                            }else{
                                echo "<script>alert('Invalid Student ID');</script>";
                                echo "<script>location='Aregister.php';</script>";
                            }
              
                        }


                        $ATTyear = date("y");
                        $ATTmonth = date("m");
                        $ATTdate = date("d");

                        $result = $mysqli->query("SELECT * FROM tbcourse ct, studentcourses sc WHERE ct.CID=sc.CID AND sc.STID=$STID") or die($mysqli->error);
                        while ($row = $result->fetch_assoc()):
                            $CourseID = $row['CID'];
                        endwhile;

                        $paymentStatus = 0;
                        
                        $result = $mysqli->query("SELECT * FROM tbpayments WHERE ST_ID = $STID AND CID = $CourseID AND P_MONTH = $ATTmonth AND P_YEAR = $ATTyear LIMIT 1") or die($mysqli->error);
                        while ($row = $result->fetch_assoc()):

                            $paymentStatus      = 1;
                            
                        endwhile;



                                                  
                            
                    
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
                            <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Payments & Attendance Register Details <?php echo ($STID); ?></a></li>
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

                           <div class="w-full">
                            <?php
                                if($paymentStatus == 1){
                            ?>
                                <div class="alert alert-success" role="alert"><strong class="text-capitalize"><font size="6">Welcome!</font></strong><br> Payments are completed this month.
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php
                                }else{
                            ?>
                                <div class="alert alert-danger" role="alert"><strong class="text-capitalize"><font size="6">Warnning!</font></strong><br> Payments are due this month.
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php } ?>
                           </div>


                        </div>
                    </div>
                </div>




                <div class="mt--xxl mb-xxxl px-lg position-relative z-index-default">
                    <div class="container">
                        <div class="nav-tabs-primary">
                            <ul class="nav nav-tabs mb-xl" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tabs-1">Details</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="tabs-1" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="card mb-md">
                                                <div class="card-header justify-content-between align-items-center p-md">
                                                    <div class="font-weight-semi m-0">Registered Courses</div>
                                                </div>
                                                <div class="card-body px-md">

                                                    <table id="basicDatatable" class="table" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Course Name</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                            $result = $mysqli->query("SELECT * FROM tbcourse ct, studentcourses sc WHERE ct.CID=sc.CID AND sc.STID=$STID") or die($mysqli->error);
                                                            while ($row = $result->fetch_assoc()):
                                                                $CourseID = $row['CID'];
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $row['COURSE_NAME']; ?></td>
                                                                <td>
                                                                    <a href="attendent/makePayments.php?STID=<?php echo ($STID2) ?>&CID=<?php echo $row['CID']; ?>"><button type="button" class="btn btn-raised btn-raised-success" accesskey="p">Make Payment</button></a>&nbsp;&nbsp;
                                                                    <a href="attendent/action/attendence.php?STID=<?php echo ($STID2) ?>&CID=<?php echo $row['CID']; ?>&method=<?= $submit?>"><button type="button" class="btn btn-raised btn-raised-primary" accesskey="a">Attend</button></a>
                                                                </td>
                                                            </tr>
                                                        <?php endwhile; ?>

                                                    </table>

                                               
                                    
                                                </div>
                                            </div>
                                        </div>





                                        <div class="col-lg-6 col-md-12">
                                            <div class="card mb-md">
                                                <div class="card-header justify-content-between align-items-center p-md">
                                                    <div class="font-weight-semi m-0">Last Payment Hostory</div>
                                                </div>
                                                <div class="card-body px-md">
                                                    

                                                <ul class="list-group">

                                                <?php
                                                    $counter = 0; 
                                                    $result = $mysqli->query("SELECT * FROM tbpayments tp, tbcourse tc WHERE tp.CID = tc.CID AND tp.ST_ID = $STID ORDER BY tp.PAYMENT_ID DESC") or die($mysqli->error);
                                                    while ($row = $result->fetch_assoc()):
                                                        $counter++;
                                                        if($counter<5){
                                                ?>

                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <?php echo $row['P_YEAR']; ?>/<?php echo $row['P_MONTH']; ?>/<?php echo $row['P_DATE']; ?>&nbsp;&nbsp;<b><?php echo $row['COURSE_NAME']; ?></b>
                                                    LKR <?php echo $row['AMOUNT']; ?>
                                                </li>
                                                
                                                <?php } endwhile; ?>

                                                </ul>
                                              
                                    
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
</body>

</html>