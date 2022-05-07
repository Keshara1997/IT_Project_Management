<?php 
    require_once ("../include/connection.php");
    require_once ("../include/initialize.php"); 
    require_once("inc/redirect.php");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/github.min.css" />
    <link rel="stylesheet" href="assets/vendors/gijgo/css/gijgo.min.css" />
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
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">PDF Lessons</a></li></li>
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
                <div class="row">

<?php    
    $CID = $_SESSION['STCID'];  
      $mydb->setQuery("SELECT * FROM tbllesson WHERE Category='Docs' AND CID = $CID ORDER BY tbllesson.LessonID DESC");
      $cur = $mydb->loadResultList();

    foreach ($cur as $result) {
?>

    <div class="col-xl-4 col-lg-6 mb-md">
        <div class="card">
            <div class="card-body">
                <div class="ul-card-list d-flex justify-content-between align-items-center flex-wrap ">
                    <div class="ul-card-list--left d-flex align-items-center">
                        <div>
                            <p class="m-0"><b> <?php echo $result->LessonChapter ?> </b></p>
                            <p class="text-muted text-small m-0"><?php echo $result->LessonTitle ?> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video">
                <embed src="admin/action/<?php echo $result->FileLocation ?>" type="application/pdf" width="100%" height="200px" />
            </div>
            <div class="card-footer text-muted">
                <div class="ul-card-list--footer d-flex justify-content-between align-items-center flex-wrap">
                    <div class=" my-sm">
                        <a href="admin/action/<?php echo $result->FileLocation ?>"><button type="button" class="btn btn-opacity btn-primary btn-sm">View</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>
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


    <?php include('inc/profile.php'); ?>


    <div class="ul-sidebar-panel-overlay"></div>
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="assets/vendors/echarts/dist/echarts.min.js"></script>
    <script src="assets/js/pages/dashboard/learningManagement.min.js"></script>
    <script src="assets/vendors/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="assets/js/pages/sweetAlert2.script.min.js"></script>
    <script src="assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/pages/datatables/datatableHTML.js"></script>
</body>

</html>