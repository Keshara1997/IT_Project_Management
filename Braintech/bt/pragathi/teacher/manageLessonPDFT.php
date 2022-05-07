<?php 
    require_once ("../include/initialize.php"); 
    require_once("inc/redirectT.php");
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
    <link rel="stylesheet" type="text/css" href="assets/css/pages/dashboard/learning-management.min.css" />
    <link rel="stylesheet" href="assets/vendors/sweetalert2/dist/sweetalert2.min.css" />
    <link rel="stylesheet" href="assets/css/main.bundle.min.css" />
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
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Manage Lesson PDF</a></li>
                            </ul>
                        </div>
     
                </div>
                <!-- End::Header menu-->
                <div class="ul-header-topbar">
                    <div class="flex-grow-1">
                        <div class="header-btn-group">
                            <button class="btn d-flex py-1 pl-2 pr-0 rounded"  type="button" ><span class="m-0 mr-2 font-weight-normal">Hi, <?php echo $_SESSION['TEACHER_NAME']; ?></span>
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
                                    <li class="breadcrumb-item"><a >Lesson</a></li>
                                    <li class="breadcrumb-item"><a href="teacher/manageLessonT.php">Manage PDF Lesson</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>







                <div class="container mt-lg">

                    <div class="row">

                    <?php  
                    	$CID = $_SESSION['CID'];  
				  		$mydb->setQuery("SELECT * FROM tbllesson WHERE Category='Docs' AND CID=$CID ORDER BY `LessonID` DESC");
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
                                            <a href="teacher/editLessonT.php?&id=<?php echo $result->LessonID ?>"><button type="button" class="btn btn-opacity btn-primary btn-sm">Edit</button></a>
                                            <a href="teacher/editFileLessonT.php?&id=<?php echo $result->LessonID ?>"><button type="button" class="btn btn-opacity btn-primary btn-sm">Change File</button></a>
                                            <a href="teacher/action/<?php echo $result->FileLocation ?>"><button type="button" class="btn btn-opacity btn-primary btn-sm">View</button></a>
                                            <a href="teacher/action/lessonControllerT.php?action=delete&id=<?php echo $result->LessonID ?>"><button type="button" class="btn btn-opacity-danger btn-primary btn-sm">Delete</button></a>
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





    <div class="ul-sidebar-panel-overlay"></div>
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="assets/vendors/echarts/dist/echarts.min.js"></script>
    <script src="assets/js/pages/dashboard/learningManagement.min.js"></script>
    <script src="assets/vendors/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="assets/js/pages/sweetAlert2.script.min.js"></script>
</body>

</html>