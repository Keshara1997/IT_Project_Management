<?php 
    require_once ("../include/initialize.php");
    require_once ("../include/connection.php");
    require_once("inc/redirectA.php");

    if(
        !isset($_GET['CLASS']) ||
        !isset($_GET['STID']) ||
        empty($_GET['CLASS']) ||
        empty($_GET['STID']) 
    ){
        echo "<script>location='addStudent.php?status=error';</script>";
    }else{

        $CLASS = mysqli_real_escape_string($mysqli,test_input($_GET['CLASS']));
        $STID = mysqli_real_escape_string($mysqli,test_input($_GET['STID'])); 

        $result = $mysqli->query("SELECT * FROM tbcourse WHERE CID = $CLASS LIMIT 1") or die($mysqli->error);
        while ($row = $result->fetch_assoc()):
            $COURSE_NAME = mysqli_real_escape_string($mysqli,test_input($row['COURSE_NAME']));;
        endwhile;


                                            
        $result = $mysqli->query("SELECT * FROM tblstudent WHERE STID = '$STID' LIMIT 1") or die($mysqli->error);
        while ($row = $result->fetch_assoc()):
            $abc = 1;
        endwhile;

        if(!isset($abc)){
            echo "<script>location='register.php?status=error';</script>";
        }

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
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Registration Status</a></li>
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
                        <div class="col-lg-7 mb-md">
                            <div class="card">
                                <div class="card-header justify-content-between align-items-center flex-wrap">
                                    <p class="mb-0 font-weight-normal pr-md"><span class="text-primary font-weight-semi ml-1">Regisration Status</span></p>
                                </div>
                                <div class="card-body">

                                
                                <?php
                                    if(isset($_GET['status'])){
                                        $status = $_GET['status'];
                                        if($status == 'success'){
                                    
                                ?>

                                <div class="alert alert-success" role="alert"><strong class="text-capitalize">Success!</strong> Student has been successfuly added.
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>

                                <?php } } ?>



                                    <?php
                                        $STID = mysqli_real_escape_string($mysqli,test_input($_GET['STID']));
                                        
                                        $result = $mysqli->query("SELECT * FROM tblstudent WHERE STID = '$STID' LIMIT 1") or die($mysqli->error);
                                        while ($row = $result->fetch_assoc()):
                                            echo "<b>Name - </b>".$row['Fname']." ".$row['Lname']."<br>";
                                            echo "<b>Birthday - </b>".$row['BIRTHDAY']."<br>";
                                            echo "<b>Address - </b>".$row['Address']."<br>";
                                            echo "<b>Contact - </b>".$row['MobileNo']."<br>";
                                            echo "<b>Email - </b>".$row['EMAIL']."<br>";
                                            echo "<b>School - </b>".$row['SCHOOL']."<br><hr>";
                                            echo "<b>Student Number - </b>".$row['STID']."<br><hr>";
                                            $ST_ID = mysqli_real_escape_string($mysqli,test_input( $row['StudentID']));;
                                        endwhile;
                                    ?>

                                    <form action="attendent/action/AddtoCourse.php?action=Add" method="POST">
                                        <input type="text" name="STID" value="<?= $ST_ID ?>" hidden required>
                                        <input type="text" name="CLASS" value="<?= $CLASS ?>" hidden required>
                                        <input class="btn btn-raised-primary" type="submit" value="Add this student to <?= $COURSE_NAME ?> Class Room">
                                    </form>

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


   
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="assets/js/pages/dashboard/learningManagement.min.js"></script>

</body>

</html>