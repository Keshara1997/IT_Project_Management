<?php 
    require_once("../include/initialize.php");
    require_once ("../include/connection.php");
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
    <link rel="stylesheet" type="text/css" href="assets/css/pages/dashboard/learning-management.min.css" />
    <link rel="stylesheet" href="assets/css/main.bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/github.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/pages/dashboard/learning-management.min.css" />
    <link rel="stylesheet" href="assets/css/main.bundle.min.css" />
    <link rel="stylesheet" href="assets/vendors/gijgo/css/gijgo.min.css" />
</head>

<body>
    <div class="app-admin-wrap-layout-1 sidebar-full sidebar-theme-slate subheader-fixed">
    <?php include('inc/headerOne.php'); ?>




            <!-- Start::Main header  -->
            <header class="main-header bg-card d-flex flex-row justify-content-between align-items-center px-lg">
                <!-- Start::Header menu-->
                <div>
                        <div class="ul-header-menu">
                            <ul class="ul-header-nav">
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link" href="admin/addStudent.php">Edit Student</a></li>
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
              
                <div class="container mt-lg">

                    <h2 class="doc-section-title" id="examples">Edit Student<a class="section-link" href="#examples"></a></h2>
                    <div class="doc-example">
                        <div class="row">
                            <div class="col-md-6">
                            <form action="admin/action/studentController.php?action=edit" method="POST"> 
                            <?php
                                $id = test_input($_GET['id']);
                                $id = mysqli_real_escape_string($mysqli,$id);
                                $result = $mysqli->query("SELECT * FROM tblstudent WHERE StudentID = $id") or die($mysqli->error);
                                while ($row = $result->fetch_assoc()):
                            
                            ?>
                                    <input type="hidden" class="form-control"  name="id" value="<?php echo $row['StudentID']; ?>"required>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control"  name="FNAME" value="<?php echo $row['Fname']; ?>"required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Last Name</label>
                                        <input type="text" class="form-control"  name="LNAME" value="<?php echo $row['Lname']; ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date of Birth</label>
                                        <input type="" id="datepicker" width="276" name="DOB" value="<?php echo $row['BIRTHDAY']; ?>"/>
                                        <script>$("#datepicker").datepicker({ showOtherMonths: true });</script>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <textarea class="form-control" aria-label="With textarea"  name="ADDRESS"  required><?php echo $row['Address']; ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile Phone Number</label>
                                        <input type="text" class="form-control"  name="PHONE" value="<?php echo $row['MobileNo']; ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control"  name="EMAIL"value="<?php echo $row['EMAIL']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">School</label>
                                        <input type="text" class="form-control"  name="SCHOOL"value="<?php echo $row['SCHOOL']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Student ID</label>
                                        <input type="text" class="form-control"  name="STID" value="<?php echo $row['STID']; ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Select File Type</label>
                                        <select  class="selectpicker" data-style="border" name="CATEGORY" value="<?php echo $row['CATEGORY']; ?>" required>
                                           <option>A/L</option>
                                           <option>O/L</option>
                                           <option>Course</option>
                                           <option>Others</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">UserName</label>
                                        <input type="text" class="form-control"  name="USERNAME" value="<?php echo $row['STUDUSERNAME']; ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="password" class="form-control"  name="PASS" placeholder="password" required>
                                    </div>
                                    <?php endwhile; ?>
                                    <button class="btn btn-raised-primary" type="submit" name="save">Save</button>
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
    <script src="assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="assets/js/pages/forms/forms.bootstrap-select.min.js"></script>
    <script src="assets/vendors/gijgo/js/gijgo.min.js"></script>
    <script src="assets/js/pages/forms/forms.datepicker.min.js"></script>
</body>

</html>