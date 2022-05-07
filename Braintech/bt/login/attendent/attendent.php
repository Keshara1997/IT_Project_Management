<?php 
    require_once ("../include/initialize.php");
    require_once ("../include/connection.php");
    require_once ("inc/redirectA.php");
    require_once ("charts/paymentchart.php");

    $ATTyear = date("y");
    $ATTmonth = date("m");
    $ATTdate = date("d");
    $DateTotal = 0;
    $MonthTotal = 0;

    $result = $mysqli->query("SELECT * FROM tbpayments WHERE  P_MONTH = $ATTmonth AND P_YEAR = $ATTyear AND P_DATE = $ATTdate") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
        $Amount = $row['AMOUNT'];
        $DateTotal = $DateTotal + $Amount;
    endwhile;

    $result = $mysqli->query("SELECT * FROM tbpayments WHERE  P_MONTH = $ATTmonth AND P_YEAR = $ATTyear") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
        $Amount = $row['AMOUNT'];
        $MonthTotal = $MonthTotal + $Amount;
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
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Dashboard</a></li>
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
                <div class="container mt-lg">   
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 mb-md">
                                    <div class="row">

                                        <div class="col-lg-12 mb-md">
                                            <div class="card bg-danger h-100">
                                                <div class="card-body d-flex align-items-center">
                                                    <div class="ul-cryptocurrency-card d-flex flex-grow-1 justify-content-between align-items-center">
                                                        <div>
                                                            <p class="m-0 text-white">Today Total</p>
                                                            <div class="card-title text-white m-0">LKR <?php echo ($DateTotal);?></div>
                                                        </div><i class="material-icons">monetization_on</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 mb-md">
                                    <div class="row">
                                        <div class="col-lg-12 mb-md">
                                       
                                            <div id="columnchart_values" style="width: 100%; height: 50%;"></div>
                                   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 mb-md">
                            <div class="ul-cryptocurrency-tab">
                                <div class="nav-pills-primary">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item mb-2"><a class="nav-link active" id="pills-home-tab" data-toggle="pill"  aria-controls="pills-home" aria-selected="true">Latest Payments</a></li>
                                    </ul>
                                    <div class="tab-content ul-cryptocurrency-tab-scroll" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Student ID</th>
                                                            <th scope="col">Ammount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php
                                                        $counter = 0; 
                                                        $result = $mysqli->query("SELECT * FROM tbpayments tp, tblstudent ts WHERE tp.ST_ID = ts.StudentID ORDER BY tp.PAYMENT_ID DESC") or die($mysqli->error);
                                                        while ($row = $result->fetch_assoc()):
                                                            $counter++;
                                                            if($counter<=10){
                                                    ?>

                                                        <tr>
                                                            <td><?php echo  $row['P_MONTH'];?>/<?php echo  $row['P_DATE'];?>/<?php echo  $row['P_YEAR'];?></td>
                                                            <td class="text-success"><?php echo  $row['STID'];?></td>
                                                            <td class="font-weight-semi"><?php echo  $row['AMOUNT'];?></td>
                                                        </tr>
                                                       
                                                    <?php } endwhile; ?>
                                                      
                                                    </tbody>
                                                </table>
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