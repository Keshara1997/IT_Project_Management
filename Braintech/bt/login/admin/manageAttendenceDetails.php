<?php 
    require_once ("../include/connection.php");
    require_once ("../include/initialize.php");
    require_once("inc/redirect.php");



    if(!isset($_GET['Year'])){
        echo "<script>alert('Error');</script>";
        echo "<script>location='manageAttendence.php';</script>";
    }
    if(!isset($_GET['Month'])){
        echo "<script>alert('Error');</script>";
        echo "<script>location='manageAttendence.php';</script>";
    }
    if(!isset($_GET['Date'])){
        echo "<script>alert('Error');</script>";
        echo "<script>location='manageAttendence.php';</script>";
    }
    if(!isset($_GET['save'])){
        echo "<script>alert('Error');</script>";
        echo "<script>location='manageAttendence.php';</script>";
    }

    $Year = test_input($_GET['Year']);
    $Month = test_input($_GET['Month']);
    $Date = test_input($_GET['Date']);
    $Button = $_GET['save'];

    $Year = mysqli_real_escape_string($mysqli,$Year);
    $Month = mysqli_real_escape_string($mysqli,$Month);
    $Date = mysqli_real_escape_string($mysqli,$Date);

    $Todayyear = date("y");
    $Todaymonth = date("m");
    $Todaydate = date("d");

    $CID = $_SESSION['CID']; 
    $CID = stripcslashes($CID);
    $CID = mysqli_real_escape_string($mysqli,$CID);

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
    <?php include('inc/header.php'); ?>
       
         
            <!-- Start::Main header  -->
            <header class="main-header bg-card d-flex flex-row justify-content-between align-items-center px-lg">
                <!-- Start::Header menu-->
                <div>
                        <div class="ul-header-menu">
                            <ul class="ul-header-nav">
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link"><?php echo $_SESSION['COURSE_NAME']; ?></a></li>
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Manage Attendence</a></li>
                            </ul>
                        </div>
     
                </div>
                <!-- End::Header menu-->
                <div class="ul-header-topbar">
                    <div class="flex-grow-1">
                        <div class="header-btn-group">
                            <button class="btn d-flex py-1 pl-2 pr-0 rounded"  type="button" ><span class="m-0 mr-2 font-weight-normal">Hi, <?php echo $_SESSION['NAME']; ?></span>
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
                                    <li class="breadcrumb-home"><a href="admin/dashboard.php"><?php echo $_SESSION['COURSE_NAME']; ?></a></li>
                            
                                    <li class="breadcrumb-item"><a >Manage Attendence</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
           
                <div class="container my-lg">
                 
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-header">
                                <h2 class="p-1 m-0 text-16 font-weight-semi"><?php echo $Date; ?>/<?php echo $Month; ?>/<?php echo $Year; ?> Student Attendence</h2>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <table id="datatableScrollY" class="table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Student ID</th>
                                                <th>Student Name</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php 

                                            $CID = test_input($_SESSION['CID']);  
                                            $CID = mysqli_real_escape_string($mysqli,$CID);
                                            $result = $mysqli->query("SELECT * FROM tbattendence ta,tblstudent ts  WHERE ta.ST_ID=ts.StudentID AND ta.CID=$CID AND ta.ST_ATT_YEAR=$Year AND ta.ST_ATT_MONTH=$Month AND ta.ST_ATT_DATE=$Date ORDER BY ta.ST_ID DESC") or die($mysqli->error);
                                            while ($row = $result->fetch_assoc()): 
                                        ?>
                                  
                                            <tr>
                                                <td><?php echo $row['ST_ATT_DATE']; ?>/<?php echo $row['ST_ATT_MONTH']; ?>/<?php echo $row['ST_ATT_YEAR']; ?></td>
                                                <td><?php echo $row['STID']; ?></td>
                                            
                                                <td><?php echo $row['Fname']; ?> <?php echo $row['Lname']; ?></td>
                                                <td>
                                                    <a href="admin/action/attendenceController.php?action=delete&id=<?php echo $row['ST_ATT_ID']; ?>&Year=<?php echo $Year?>&Month=<?php echo $Month; ?>&Date=<?php echo $Date; ?>" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn text-danger rounded-circle m-0 btn-sm btn-icon"><i class="material-icons">delete</i></button></a>
                                                </td>
                                            </tr>

                                        <?php endwhile; ?>        
                                            
                                          
                                    </table>
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
    <script src="assets/js/pages/datatables/scrollDatatable.min.js"></script>
</body>

</html>