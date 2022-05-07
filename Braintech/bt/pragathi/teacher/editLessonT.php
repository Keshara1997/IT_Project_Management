<?php  
    require_once ("../include/initialize.php");
    require_once("inc/redirectT.php");

  @$id = $_GET['id'];
    if($id==''){
  redirect("dashboard.php");
}
    $lesson = New Lesson();
    $res = $lesson->single_lesson($id);

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
    <link rel="stylesheet" type="text/css" href="assets/css/pages/dashboard/learning-management.min.css" />
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
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link" >Edit Lesson</a></li>
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
                                    <li class="breadcrumb-item"><a href="teacher/editLessonT.php">Edit lesson</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="container mt-lg">

                    <h2 class="doc-section-title" id="examples">Edit Lesson<a class="section-link" href="#examples"></a></h2>
                    <div class="doc-example">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="teacher/action/lessonControllerT.php?action=edit" method="POST" enctype="multipart/form-data">
              
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Chapter Name</label>
                                        <input name="LessonID" type="hidden" value="<?php echo $res->LessonID; ?>">
                                        <input type="text" class="form-control"  name="LessonChapter" value="<?php echo $res->LessonChapter; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Title</label>
                                        <input type="text" class="form-control"  name="LessonTitle" value="<?php echo $res->LessonTitle; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Select File Type</label>
                                        <input name="deptid" type="hidden" value="">
                                        <select class="form-control input-sm" id="Category" name="Category" >
                                            <option <?php echo ($res->Category == "Docs") ? "Selected" : ""?>>Docs</option>
                                            <option <?php echo ($res->Category == "Video") ? "Selected" : ""?>>Video</option>
                                        </select>
                                    </div>
                                          <!--              <div class="form-group">
                                                                <div class="col-md-11">
                                                                <label class="col-md-2" align = "right"for=
                                                                "file">Upload File:</label>

                                                                <div class="col-md-10">
                                                                <input type="file" name="file" value="<?php echo $res->FileLocation; ?>" />
                                                                </div>
                                                                </div>
                                                            </div> -->
                                    <button class="btn btn-raised-primary" name="save" type="submit" >Save</button> 
                                </form>
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





    <div class="ul-sidebar-panel-overlay"></div>
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="assets/vendors/echarts/dist/echarts.min.js"></script>
    <script src="assets/js/pages/dashboard/learningManagement.min.js"></script>
</body>

</html>