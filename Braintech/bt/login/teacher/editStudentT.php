<?php  
    require_once ("../include/initialize.php");
    require_once("inc/redirectT.php");
    require_once ("../include/connection.php");


    @$IDNO = test_input($_GET['id']);
    $IDNO = mysqli_real_escape_string($mysqli,$IDNO);

    if($IDNO==''){
        redirect("indexT.php");
    }

    $student = New Student();
    $singlestudent = $student->single_students($IDNO);

?> 

<?php 
		if(isset($_POST['save'])){
			$id = test_input($_POST['id']);
			$FNAME = test_input($_POST['FNAME']);
			$LNAME = test_input($_POST['LNAME']);
			$ADDRESS = test_input($_POST['ADDRESS']);
			$PHONE = test_input($_POST['PHONE']);
			$STID = test_input($_POST['STID']);

            $id = mysqli_real_escape_string($mysqli,$id);
            $FNAME = mysqli_real_escape_string($mysqli,$FNAME);
            $LNAME = mysqli_real_escape_string($mysqli,$LNAME);
            $ADDRESS = mysqli_real_escape_string($mysqli,$ADDRESS);
            $PHONE = mysqli_real_escape_string($mysqli,$PHONE);
            $STID = mysqli_real_escape_string($mysqli,$STID);

			$sql = "UPDATE tblstudent SET Fname='$FNAME', Lname='$LNAME', Address='$ADDRESS', MobileNo='$PHONE', STID='$STID' WHERE StudentID = $id";
			$mydb->setQuery($sql);
			$mydb->executeQuery();
            
			message("Student has been updated!", "success");
			redirect("manageStudentT.php");
		}
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
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Edit Student</a></li>
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
                                    <li class="breadcrumb-item"><a >Edit Student</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="container mt-lg">

                    <h2 class="doc-section-title" id="examples">Edit Student<a class="section-link" href="#examples"></a></h2>
                    <div class="doc-example">
                        <div class="row">
                            <div class="col-md-6">
                            <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input name="id" type="hidden" value="<?php echo $res->StudentID; ?>">
                                        <input type="text" class="form-control"  name="FNAME" value="<?php echo $singlestudent->Fname; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Last Name</label>
                                        <input type="text" class="form-control"  name="LNAME" value="<?php echo $singlestudent->Lname; ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <textarea class="form-control" aria-label="With textarea"  name="ADDRESS" required><?php echo $singlestudent->Address; ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile Phone Number</label>
                                        <input type="text" class="form-control"  name="PHONE" value="<?php echo $singlestudent->MobileNo; ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Student ID Number</label>
                                        <input type="text" class="form-control"  name="STID" value="<?php echo $singlestudent->STID; ?>" required>
                                    </div>

                      
                                    <button class="btn btn-raised-primary" name="save" type="submit" >Save</button> 
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>

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