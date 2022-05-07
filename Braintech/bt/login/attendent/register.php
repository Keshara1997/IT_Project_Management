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

    <style>
        select{
            width:100%;
            padding:10px 10px;
            border-radius:5px;
            border-color:#b5c5ff;
            margin-top:4px;
        }
    </style>

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
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Student Registration</a></li>
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
                                    <p class="mb-0 font-weight-normal pr-md"><span class="text-primary font-weight-semi ml-1">Student Registration</span></p>
                                </div>

                              
                                <div class="card-body">

                                <?php
                                    if(isset($_GET['status'])){
                                        $status = $_GET['status'];
                                        if($status == 'success'){
                                    
                                ?>

                              
                                        <div class="alert alert-success" role="alert"><strong class="text-capitalize">Success!</strong> Student has been successfuly added to the class room.
                                            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>

                                        <?php }else if($status == 'error'){?>

                                        <div class="alert alert-danger" role="alert"><strong class="text-capitalize">Error!</strong> Somthing went wrong! Try Again.
                                            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>

                                        <?php }else if($status == 'empty'){?>

                                        <div class="alert alert-danger" role="alert"><strong class="text-capitalize">Error!</strong> Some datum are missing! Try Again.
                                            <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>

                               <?php } } ?>



                                    <form name="myForm" action="attendent/registerNext.php" method="POST">

                                    <div class="row">
                                        <div class="col-lg-6 mb-md">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input class="form-control" type="text" name="F_NAME"  autofocus="autofocus" maxlength="50" required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-md">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input class="form-control" type="text" name="L_NAME"  maxlength="50" required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-md">
                                            <div class="form-group">
                                                <label>Birthday</label>
                                                <input class="form-control" type="date" name="BIRTHDAY"  maxlength="50" required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-md">
                                            <div class="form-group">
                                                <label>Contact Number</label>
                                                <input class="form-control" type="text" name="CONTACT"  maxlength="10" required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-md">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="text" name="EMAIL"  maxlength="150" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-md">
                                            <div class="form-group">
                                                <label>School</label>
                                                <input class="form-control" type="text" name="SCHOOL"  maxlength="200" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-md">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea class="form-control" name="ADDRESS"  rows="3" required></textarea>
                                            </div>
                                        </div>
  
                                        <div class="col-lg-6 mb-md" >
                                            <div class="form-group" >
                                                <label>Medium</label>
                                                <select  class="selectpickerr" data-style="border" name="MEDIUM" >
                                                    <option value="Sinhala">Sinhala</option>
                                                    <option value="English">English</option>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="col-lg-6 mb-md">
                                            <div class="form-group">
                                                <label>Select category</label>
                                                <select data-style="border" name="CATEGORY" id="category" oninput="checkName()" required>
                                                    <option value="" selected disabled hidden>Choose here</option>
                                                    <option>A/L</option>
                                                    <option>O/L</option>
                                                    <option>Course</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                        </div>

                                 
                                      
                                        <?php
                                            $Year = date('Y');
                                            $O1Year = $Year-1;
                                            $O2Year = $Year-2;
                                            $P1Year = $Year+1;
                                            $P2Year = $Year+2;
                                            $P3Year = $Year+3;
                                        ?>



                                        <!-- if A/L  O/L -->
                                        <div class="col-lg-6 mb-md">
                                            <div class="form-group" id="OLALOutput">
                                              
                                            </div>
                                        </div>

                                



                                        <!-- if A/L class-->
                                        <div class="col-lg-6 mb-md"  style="display:none;" id="ALOutput">
                                            <div class="form-group" >
                                                <label>Choose Class Room</label>
                                                <select  class="selectpickerr" data-style="border" name="CLASS_AL" >
                                                <option value="" selected disabled hidden>Choose here</option>
                                                <?php
                                                    $result = $mysqli->query("SELECT * FROM tbcourse WHERE  CATEGORY = 'A/L' ") or die($mysqli->error);
                                                    while ($row = $result->fetch_assoc()):
                                                        $COURSE_NAME = mysqli_real_escape_string($mysqli,test_input($row['COURSE_NAME']));
                                                        $CID = mysqli_real_escape_string($mysqli,test_input($row['CID']));
                                                        echo "<option value='".$CID."'>".$COURSE_NAME."</option>";  
                                                    endwhile;
                                                ?>
                                                </select>
                                            </div>
                                        </div>



                                         <!-- if O/L class-->
                                         <div class="col-lg-6 mb-md" style="display:none;"  id="OLOutput">
                                            <div class="form-group" >
                                                <label>Choose Class Room</label>
                                                <select  class="selectpickerr" data-style="border" name="CLASS_OL" >
                                                <option value="" selected disabled hidden>Choose here</option>
                                                <?php
                                                    $result = $mysqli->query("SELECT * FROM tbcourse WHERE  CATEGORY = 'O/L' ") or die($mysqli->error);
                                                    while ($row = $result->fetch_assoc()):
                                                        $COURSE_NAME = mysqli_real_escape_string($mysqli,test_input($row['COURSE_NAME']));
                                                        $CID = mysqli_real_escape_string($mysqli,test_input($row['CID']));
                                                        echo "<option value='".$CID."'>".$COURSE_NAME."</option>";  
                                                    endwhile;
                                                ?>
                                                </select>
                                            </div>
                                        </div>


                                        <!-- if Course class-->
                                        <div class="col-lg-6 mb-md" style="display:none;"  id="COutput">
                                            <div class="form-group" >
                                                <label>Choose Class Room</label>
                                                <select  class="selectpickerr" data-style="border" name="CLASS_COURSE" >
                                                <option value="" selected disabled hidden>Choose here</option>
                                                <?php
                                                    $result = $mysqli->query("SELECT * FROM tbcourse WHERE  CATEGORY = 'Course' ") or die($mysqli->error);
                                                    while ($row = $result->fetch_assoc()):
                                                        $COURSE_NAME = mysqli_real_escape_string($mysqli,test_input($row['COURSE_NAME']));
                                                        $CID = mysqli_real_escape_string($mysqli,test_input($row['CID']));
                                                        echo "<option value='".$CID."'>".$COURSE_NAME."</option>";  
                                                    endwhile;
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                        

                                        <!-- if Other class-->
                                        <div class="col-lg-6 mb-md" style="display:none;"  id="OOutput">
                                            <div class="form-group" >
                                                <label>Choose Class Room</label>
                                                <select  class="selectpickerr" data-style="border" name="CLASS_OTHER" >
                                                <option value="" selected disabled hidden>Choose here</option>
                                                <?php
                                                    $result = $mysqli->query("SELECT * FROM tbcourse WHERE  CATEGORY = 'Others' ") or die($mysqli->error);
                                                    while ($row = $result->fetch_assoc()):
                                                        $COURSE_NAME = mysqli_real_escape_string($mysqli,test_input($row['COURSE_NAME']));
                                                        $CID = mysqli_real_escape_string($mysqli,test_input($row['CID']));
                                                        echo "<option value='".$CID."'>".$COURSE_NAME."</option>";  
                                                    endwhile;
                                                ?>
                                                </select>
                                            </div>
                                        </div>




                                    </div>

                                        <button class="btn btn-raised-primary btn-block" type="submit" name="submit">Next</button>
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


    <script>
        var OLALOutput = document.getElementById('OLALOutput');
        var ALOutput = document.getElementById('ALOutput');
        var OLOutput = document.getElementById('OLOutput');
        var COutput = document.getElementById('COutput');
        var OOutput = document.getElementById('OOutput');

        var uName = document.getElementById('category');

        function checkName() {

            if (uName.value == "A/L" || uName.value == "O/L") {
                OLALOutput.innerHTML = "<label>Examination Year only for OL and AL</label><select  class='selectpickerr' data-style='border' name='EXAM_YEAR' ><option value='<?= $O2Year?>'><?= $O2Year?></option><option value='<?= $O1Year?>'><?= $O1Year?></option><option value='<?= $Year?>'><?= $Year?></option><option value='<?= $P1Year?>'><?= $P1Year?></option><option value='<?= $P2Year?>'><?= $P2Year?></option><option value='<?= $P3Year?>'><?= $P3Year?></option></select>";
            } else{
                OLALOutput.innerHTML = "";
            }

            if (uName.value == "A/L" ) {
                ALOutput.style.display = "inline";
                OLOutput.style.display = "none";
                COutput.style.display = "none";
                OOutput.style.display = "none";

            } else if (uName.value == "O/L" ){
                OLOutput.style.display = "inline";
                ALOutput.style.display = "none";
                COutput.style.display = "none";
                OOutput.style.display = "none";

            } else if (uName.value == "Course" ){
                COutput.style.display = "inline";
                OLOutput.style.display = "none";
                ALOutput.style.display = "none";
                OOutput.style.display = "none";

            } else if (uName.value == "Others" ){
                OOutput.style.display = "inline";
                COutput.style.display = "none";
                OLOutput.style.display = "none";
                ALOutput.style.display = "none";
            }else{
                ALOutput.innerHTML = "";
            }


        }
    </script>
   
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="assets/js/pages/dashboard/learningManagement.min.js"></script>

</body>

</html>