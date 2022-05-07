<?php 
    require_once ("../include/initialize.php");
    require_once ("../include/connection.php");
    require_once("inc/redirectA.php");
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
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Payments & Attendance Register</a></li>
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
                        <div class="col-lg-8 mb-md">
                            <div class="card">

                                <div class="card-header justify-content-between align-items-center flex-wrap">
                                    <p class="mb-0 font-weight-normal pr-md"><span class="text-primary font-weight-semi ml-1">Enter the Student ID</span></p>
                                </div>
                                <div class="card-body">
                                    <form action="attendent/registerDetails.php" method="GET">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="STID" aria-describedby="emailHelp" autofocus="autofocus" placeholder="Student ID Here" maxlength="9" required/>
                                        </div>
                                        <button class="btn btn-raised-primary btn-block" type="submit" name="submit">Process</button>
                                    </form>







                                    <a href="attendent/qrscanner.php"><button class="btn btn-raised-warning">QR SCANNER</button></a>
                                </div>



                                
                            </div>
                        </div>

                        <div class="col-lg-4 mb-md">
                            <?php 
                                if(isset($_GET['status'])){
                                    $status = $_GET['status'];
                                    if($status == 'PaymentSuccess'){
                            ?>
                                        <div class="alert alert-success" role="alert"><strong class="text-capitalize">Success!</strong> payment has been successfully located.
                                            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                            
                            <?php
                                    }else if($status == 'PaymentAttendSuccess'){
                            ?>
                                        <div class="alert alert-success" role="alert"><strong class="text-capitalize">Success!</strong> payment has been successfully located! & Marked Attendence.
                                            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                            <?php
                                    }else if($status == 'error'){

                            ?>
                                        <div class="alert alert-danger" role="alert"><strong class="text-capitalize">Error!</strong> Somthing went wrong! Try Again.
                                            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                            
                            <?php
                                    }
                                }
                            ?>

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