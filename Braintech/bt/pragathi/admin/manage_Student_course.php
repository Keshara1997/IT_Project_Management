<?php 
    require_once ("../include/initialize.php");
    require_once("inc/redirect.php");
?>


<!DOCTYPE html>
<html>

<head>
    <base href="../" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PRAGATHI</title>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="assets/css/vendors.bundle.min.css" />
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="assets/css/main.bundle.min.css" />
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="assets/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" />
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
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Manage Students</a></li>
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
                                    <li class="breadcrumb-item"><a >Students</a></li>
                                    <li class="breadcrumb-item"><a >Manage Students</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
           
                <div class="container my-lg">
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-header">
                                <h2 class="p-1 m-0 text-16 font-weight-semi">Students</h2>
                            </div>
                            <div class="card">
                                <div class="card-body">

                                    <a href='admin/action/blockCourse.php?action=all&status=ACTIVE'><button class='btn btn-opacity-success btn-sm' type='button'>Activate All</button></a>
                                    <a href='admin/action/blockCourse.php?action=all&status=DISABLE'><button class='btn btn-opacity-danger btn-sm' type='button'>Block All</button></a>&emsp;
                                    <!--<a href='admin/action/blockCourse.php?action=all&status=DISABLE'><button class='btn btn-opacity-primary btn-sm' type='button'>Print Report</button></a>-->

                                    <a href='admin/action/blockCourse.php?action=paid'><button class='btn btn-opacity-success btn-sm' type='button'>Active Payid Students</button></a>

                                    <table id="datatableScrollY" class="table" style="width:100%">
                                       
                                        <thead>
                                            <tr>
                                                <th>ST_ID</th>
                                                <th>Name</th>
                                                <th>Date of Birth</th>
                                                <th>Address</th>
                                                <th>School</th>
                                                <th>Contact</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $CID = $_SESSION['CID'];
                                            $query = "SELECT * FROM `studentcourses` c, `tblstudent` t  WHERE t.`StudentID`=c.`STID` AND c.CID = $CID";
                                            $mydb->setQuery($query);
                                            $cur = $mydb->loadResultList();

                                            foreach ($cur as $result) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $result->STID ?> 
                                                    <?php 
                                                        if ($result->ACTIVE_ST == 'DISABLE'){
                                                            echo "<span class='badge badge-rounded badge-sm badge-danger'>Blocked</span>";
                                                        }else {
                                                            echo "<span class='badge badge-rounded badge-sm badge-success'>Active</span>";
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php echo $result->Fname ?> <?php echo $result->Lname ?></td>
                                                <td><?php echo $result->BIRTHDAY ?></td>
                                                <td><?php echo $result->Address ?></td>
                                                <td><?php echo $result->MobileNo ?></td>
                                                <td><?php echo $result->SCHOOL ?></td>
                                                <td><?php 
                                                        if ($result->ACTIVE_ST == 'DISABLE'){
                                                            echo "<a href='admin/action/blockCourse.php?action=one&status=ACTIVE&id=$result->StudentID'><button class='btn btn-opacity-success btn-sm' type='button'>Activate</button></a>";
                                                        }else {
                                                            echo "<a href='admin/action/blockCourse.php?action=one&status=DISABLE&id=$result->StudentID'><button class='btn btn-opacity-danger btn-sm' type='button'>Block</button></a>";
                                                        }
                                                    ?>
                                                    <a href="admin/action/StudentCourseController.php?action=delete&id=<?php echo $result->StudentID ?>"><button class="btn btn-opacity-danger btn-sm" type="button">Remove</button></a>
                                                </td>
                                            </tr>
                                        <?php } ?>   
                                     
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
    <div class="ul-sidebar-panel-overlay"></div>
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/pages/datatables/scrollDatatable.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/js/pages/datatables/buttonDatatable.js"></script>
</body>
</body>

</html>