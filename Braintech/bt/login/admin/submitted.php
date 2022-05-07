<?php 
    require_once ("../include/connection.php");
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
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Submitted Exercises</a></li>
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
                                    <li class="breadcrumb-item"><a >Exercises</a></li>
                                    <li class="breadcrumb-item"><a href="admin/manageExercises.php">Select Exercises</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>


            

           
                <div class="container my-lg">
                    
                    
                <div class="row">
                        <div class="col-lg-12">
                            <div class="card-header">
                                <h2 class="p-1 m-0 text-16 font-weight-semi">Exercises</h2>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <table id="basicDatatable" class="table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>IN NO</th>
                                                <th>Chapter</th>
                                                <th>Title</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                            $count = 0; 
                                            $CID = test_input($_SESSION['CID']);  
                                            $CID = mysqli_real_escape_string($mysqli,$CID); 
                                            $result = $mysqli->query("SELECT * FROM `exercise` WHERE CID=$CID ORDER BY `ExId` DESC") or die($mysqli->error);
                                            while ($row = $result->fetch_assoc()): 
                                                $count++;
                                        ?>
                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <td><?php echo $row['Lesson']; ?></td>
                                                <td><?php echo $row['Title']; ?></td>
                                                <td>
                                                <a href="admin/submittedEx.php?ExId=<?php echo $row['ExId']; ?>&action=no"><button type="button" class="btn btn-raised btn-raised-success">Answers</button></a>
                                                </td>
                                            </tr>
                                            <?php  endwhile; ?>    
                                    
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
    <script src="assets/js/pages/datatables/basicDatatable.min.js"></script>
</body>

</html>