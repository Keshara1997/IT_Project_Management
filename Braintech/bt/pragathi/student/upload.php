<?php 
    require_once ("../include/initialize.php");
    require_once ("../include/connection.php");
    require_once("inc/redirect.php");

    $ExId = $_GET['ExId'];
    $STID = ($_SESSION['StudentID']);
    $do = 0;
    $result = $mysqli->query("SELECT * FROM submittedex  WHERE STID=$STID AND EXID=$ExId") or die($mysqli->error);
    while ($row = $result->fetch_assoc()): 
        $do = 1;
    endwhile;

   
        $CID = $_SESSION['STCID'];
                                                
    $result = $mysqli->query("SELECT * FROM tbcourse WHERE CID=$CID") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
        $CourseName = $row['COURSE_NAME'];
    endwhile;

?>



<!DOCTYPE html>
<html>

<head>
    <base href="../" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PRAGATHI | STUDENT</title>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="assets/css/vendors.bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/pages/dashboard/learning-management.min.css" />
    <link rel="stylesheet" href="assets/vendors/sweetalert2/dist/sweetalert2.min.css" />
    <link rel="stylesheet" href="assets/css/main.bundle.min.css" />
</head>

<body>
    <div class="app-admin-wrap-layout-1 sidebar-full sidebar-theme-slate subheader-fixed">
    <?php include('inc/header.php'); ?>




            <!-- Start::Main header  -->
            <header class="main-header bg-card d-flex flex-row justify-content-between align-items-center px-lg">
                <!-- Start::Header menu-->
                <div>
                    <div class="ul-header-menu-wrap"><i class="material-icons ul-header-menu-toggle">close</i>
                        <div class="ul-header-menu">
                            <ul class="ul-header-nav">
                            <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link"><?php echo $CourseName?></a></li></li>
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Upload Answer</a></li></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End::Header menu-->
                <div class="ul-header-topbar">
                    <div class="flex-grow-1"></div>
                    <div class="dropdown profile-dropdown ml-xs">
                        <div class="header-btn-group">
                            <button class="btn d-flex py-1 pl-2 pr-0 rounded" id="dropdownTopUserProfile" type="button" data-sidebar-panel="asideProfile">
                                <span class="m-0 mr-2 font-weight-normal">Hi, <?php echo $_SESSION['Fname']; ?></span>
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

                <?php
                    if($do == 0){
                ?>

                <h2 class="doc-section-title" id="examples">UPLOAD<a class="section-link" href="#examples"></a></h2>
                    <div class="doc-example">
                        <div class="row">
                            <div class="col-md-6">
                            <form  action="student/action/uploadControl.php?action=add" method="POST" enctype="multipart/form-data">
                            <input type="hidden" class="form-control" id="LessonTitle" name="STUDENTID"   value="<?php echo $_SESSION['StudentID']; ?>">
                            <input type="hidden" class="form-control" id="LessonTitle" name="CID"   value="<?php echo $_SESSION['STCID']; ?>">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Student Name</label>
                                        <input type="text" class="form-control" id="LessonChapter" name="name" value="<?php echo $_SESSION['Fname']; ?> <?php echo $_SESSION['Lname']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Student ID</label>
                                        <input type="text" class="form-control" id="LessonTitle" name="LessonTitle"   value="<?php echo $_SESSION['STID']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Upload Your File (Only PDF Files)</label>
                                        <input type="file" name="file"/>
                                        <input type="hidden" class="form-control" id="LessonTitle" name="ExId"   value="<?php echo $_GET['ExId']; ?>" readonly>
                                    </div>
                                    <button class="btn btn-raised-primary" name="save" type="submit" required>Upload</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <?php } else {?>

                    <h2 class="doc-section-title" id="examples">Submited<a class="section-link" href="#examples"></a></h2>
                    
                    <div class="doc-example">
                        <div class="alert alert-danger" role="alert">
                            <strong class="text-capitalize">WARNING!</strong>
                            <center><font color="white" size="6">
                                <p>You have already submitted this exercise.
                                <br> <font  size="3">You do not have the permission submit again.</font></p> 
                            </center></font>
                        </div>
                   
                    </div>

                    <?php } ?>
                    
                </div>
                <!-- Start:: content (Your custom content)-->
                <!-- Start:: Footer-->
                <?php include('../include/footer.php'); ?>
                <!-- End:: Footer-->
            </div>
            <!-- End:: content body-->


        </div>
    </div>


    <?php include('inc/profile.php'); ?>


    <div class="ul-sidebar-panel-overlay"></div>
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="assets/vendors/echarts/dist/echarts.min.js"></script>
    <script src="assets/js/pages/dashboard/learningManagement.min.js"></script>
    <script src="assets/vendors/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="assets/js/pages/sweetAlert2.script.min.js"></script>
    <script type="text/javascript"></script>
  
</body>

</html>