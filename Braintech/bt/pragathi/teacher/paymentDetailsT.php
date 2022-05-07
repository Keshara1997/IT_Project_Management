<?php 
    require_once ("../include/connection.php");
    require_once ("../include/initialize.php");
    require_once("inc/redirectT.php");

    if(!isset($_GET['Year'])){
        echo "<script>alert('Error');</script>";
        echo "<script>location='managePayment.php';</script>";
    }
    if(!isset($_GET['Month'])){
        echo "<script>alert('Error');</script>";
        echo "<script>location='managePayment.php';</script>";
    }
    if(!isset($_GET['save'])){
        echo "<script>alert('Error');</script>";
        echo "<script>location='managePayment.php';</script>";
    }

    $Year = $_GET['Year'];
    $Month = $_GET['Month'];
    $Button = $_GET['save'];

    $Todayyear = date("y");
    $Todaymonth = date("m");
    $Todaydate = date("d");

    $FullTotal = 0;
    $MonthTotal = 0;
    $TodayTotal = 0;

    $CID = $_SESSION['CID']; 

    $result = $mysqli->query("SELECT * FROM tbpayments WHERE  P_MONTH = $Month AND P_YEAR = $Year AND CID = $CID") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
        $Amount = $row['AMOUNT'];
        $MonthTotal = $MonthTotal + $Amount;
    endwhile;

    $result = $mysqli->query("SELECT * FROM tbpayments WHERE CID = $CID") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
        $Amount = $row['AMOUNT'];
        $FullTotal = $FullTotal + $Amount;
    endwhile;

    $result = $mysqli->query("SELECT * FROM tbpayments WHERE CID = $CID AND P_YEAR = $Todayyear AND P_MONTH = $Todaymonth AND P_DATE = $Todaydate") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
        $Amount = $row['AMOUNT'];
        $TodayTotal = $TodayTotal + $Amount;
    endwhile;
?> 






<!DOCTYPE html>
<html>

<head>
    <base href="../" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PRAGATHI </title>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="assets/css/vendors.bundle.min.css" />
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="assets/css/main.bundle.min.css" />
</head>
</head>

<body>
    <div class="app-admin-wrap-layout-1 sidebar-full sidebar-theme-slate subheader-fixed">
    <?php include('inc/headerT.php'); ?>




            <!-- Start::Main header  -->
            <header class="main-header bg-card d-flex flex-row justify-content-between align-items-center px-lg">
                <!-- Start::Header menu-->
                <div>
                        <div class="ul-header-menu">
                            <ul class="ul-header-nav">
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link"><?php echo $_SESSION['COURSE_NAME']; ?></a></li>
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link" >Payment Details</a></li>
                            </ul>
                        </div>
     
                </div>
                <!-- End::Header menu-->
                <div class="ul-header-topbar">
                    <div class="flex-grow-1">
                        <div class="header-btn-group">
                            <button class="btn d-flex py-1 pl-2 pr-0 rounded"  type="button" ><span class="m-0 mr-2 font-weight-normal">Hi, <?php echo $_SESSION['TEACHER_NAME'];  ?></span>
                                <img class="avatar-sm rounded-circle mr-1" src="assets/images/faces/1.png" />
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End::Main header-->



            <!-- Start:: content body-->
            <div class="main-content-body">
                <!-- Start:: content (Your custom content)-->
                <div class="subheader px-lg">
                    <div class="subheader-container">
                        <div class="subheader-main d-none d-lg-flex">
                            <nav class="ul-breadcrumb" aria-label="breadcrumb">
                                <ol class="ul-breadcrumb-items">
                                      <li class="breadcrumb-home"><a href="teacher/dashboardT.php"><?php echo $_SESSION['COURSE_NAME']; ?></a></li>
                                    <li class="breadcrumb-item"><a>Payment Details</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="container mt-lg">

                <div class="row">
                                <div class="col-lg-12 mb-md">
                                    <div class="row">

                                        <div class="col-lg-3 mb-md">
                                            <div class="card bg-success h-100">
                                                <div class="card-body d-flex align-items-center">
                                                    <div class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center">
                                                        <div>
                                                            <p class="m-0 text-white">Today</p>
                                                            <div class="card-title text-white m-0">LKR <?php echo ($TodayTotal);?></div>
                                                        </div><i class="material-icons">monetization_on</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-3 mb-md">
                                            <div class="card bg-primary h-100">
                                                <div class="card-body d-flex align-items-center">
                                                    <div class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center">
                                                        <div>
                                                            <p class="m-0 text-white">This Month</p>
                                                            <div class="card-title text-white m-0">LKR <?php echo ($MonthTotal);?></div>
                                                        </div><i class="material-icons">monetization_on</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-md">
                                            <div class="card bg-info h-100">
                                                <div class="card-body d-flex align-items-center">
                                                    <div class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center">
                                                        <div>
                                                            <p class="m-0 text-white">Full Total</p>
                                                            <div class="card-title text-white m-0">LKR <?php echo ($FullTotal);?></div>
                                                        </div><i class="material-icons">monetization_on</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                        <div class="col-lg-12">
                            <div class="card-header">
                                <h2 class="p-1 m-0 text-16 font-weight-semi">Student Payments</h2>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <table id="datatableScrollY" class="table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Student ID</th>
                                                <th>Student Name</th>
                                                <th>Amount</th>
                                                <th>Things Given</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php 

                                            $CID = $_SESSION['CID'];  
                                            $result = $mysqli->query("SELECT * FROM tbpayments tp,tblstudent ts  WHERE tp.ST_ID=ts.StudentID AND tp.CID=$CID AND tp.P_YEAR=$Year AND tp.P_Month=$Month ORDER BY tp.ST_ID DESC") or die($mysqli->error);
                                            while ($row = $result->fetch_assoc()): 
                                        ?>
                                  
                                            <tr>
                                                <td><?php echo $row['P_YEAR']; ?>/<?php echo $row['P_MONTH']; ?>/<?php echo $row['P_DATE']; ?></td>
                                                <td><?php echo $row['STID']; ?></td>
                                                <td><?php echo $row['Fname']; ?> <?php echo $row['Lname']; ?></td>
                                                <td><?php echo $row['AMOUNT']; ?></td>
                                                <td>T - <?php echo $row['TUTE']; ?> | P - <?php echo $row['Q_PAPER']; ?> | O - <?php echo $row['OTHERS']; ?></td>
                                           
                                            </tr>

                                        <?php endwhile; ?>        
                                            
                                          
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    

   
                <br>
                <!-- Start:: content (Your custom content)-->
                <!-- Start:: Footer-->
                <?php include('../include/footer.php'); ?>
                <!-- End:: Footer-->
            </div>
            <!-- End:: content body-->


        </div>
    </div>





   
    <div class="ul-sidebar-panel-overlay"></div>
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/pages/datatables/scrollDatatable.min.js"></script>
</body>

</html>