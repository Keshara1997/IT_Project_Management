<?php 
    require_once ("../include/initialize.php");
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
    <title>PRAGATHI | STUDENT</title>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="assets/css/vendors.bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/pages/dashboard/learning-management.min.css" />
    <link rel="stylesheet" href="assets/vendors/sweetalert2/dist/sweetalert2.min.css" />
    <link rel="stylesheet" href="assets/css/main.bundle.min.css" />
    <link rel="stylesheet" href="assets/vendors/filepond/dist/filepond.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/github.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/pages/dashboard/learning-management.min.css" />
    <link rel="stylesheet" href="assets/css/main.bundle.min.css" />
    <link rel="stylesheet" href="assets/vendors/gijgo/css/gijgo.min.css" />
    <style>
#drop-area {
  border: 2px dashed #ccc;
  border-radius: 20px;
  width: 100%;
  font-family: sans-serif;
  padding: 20px;
}
#drop-area.highlight {
  border-color: purple;
}
p {
  margin-top: 0;
}
.my-form {
  margin-bottom: 10px;
}
#gallery {
  margin-top: 10px;
}
#gallery img {
  width: 150px;
  margin-bottom: 10px;
  margin-right: 10px;
  vertical-align: middle;
}
.button {
  display: inline-block;
  padding: 10px;
  background: #ccc;
  cursor: pointer;
  border-radius: 5px;
  border: 1px solid #ccc;
}
.button:hover {
  background: #ddd;
}
#fileElem {
  display: none;
}

    </style>
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
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Upload Your Payment Details</a></li></li>
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


                <h2 class="doc-section-title" id="examples">Please enter only correct information.<a class="section-link" href="#examples"></a></h2>
                    <div class="doc-example">
                        <div class="row">
                            <div class="col-md-6">
                            <form  action="student/action/paymentController.php?action=add" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" class="form-control" id="LessonTitle" name="STUDENTID"   value="<?php echo $_SESSION['StudentID']; ?>">
                                    <input type="hidden" class="form-control" id="LessonTitle" name="CID"   value="<?php echo $_SESSION['STCID']; ?>">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Full Name</label>
                                        <input type="text" class="form-control" id="LessonChapter" name="full_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Postal Address</label>
                                        <textarea class="form-control" aria-label="With textarea"  name="address" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Month</label>
                                        <select  class="selectpicker" data-style="border" name="month" >
                                           <option value="January">January</option>
                                           <option value="February">February</option>
                                           <option value="March">March</option>
                                           <option value="April">April</option>
                                           <option value="May">May</option>
                                           <option value="June">June</option>
                                           <option value="July">July</option>
                                           <option value="August">August</option>
                                           <option value="September">September</option>
                                           <option value="October">October</option>
                                           <option value="November">November</option>
                                           <option value="December">December</option>
                                        </select>
                                    </div>
                                   
                                 
                                    <!--<label for="exampleInputPassword1">Select Your Bank Slip (please include as a image file (jpg,jpeg,png))</label>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Upload Your File (Only PDF Files)</label>
                                        <input type="file" name="bankslip" required/>
                                    </div>-->

                                    <div id="drop-area">
                                        <div class="form-group">
                                            
                                            <p>Upload Your Bank Slip as a Image (Only jpeg | png | jiff)</p>
                                            <input type="file" name="bankslip" id="fileElem" onchange="handleFiles(this.files)">
                                            <label class="button" for="fileElem">Select Image File</label>
                                        </div> 
                                    </div>

                                 <br>

                                    <button class="btn btn-raised-primary" name="save" type="submit" required>Upload</button>
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


    <?php include('inc/profile.php'); ?>


    <div class="ul-sidebar-panel-overlay"></div>
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="assets/vendors/echarts/dist/echarts.min.js"></script>
    <script src="assets/js/pages/dashboard/learningManagement.min.js"></script>
    <script src="assets/vendors/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="assets/js/pages/sweetAlert2.script.min.js"></script>
    <script src="assets/vendors/filepond/dist/filepond.min.js"></script>


    <script src="assets/vendors/echarts/dist/echarts.min.js"></script>
    <script src="assets/js/pages/dashboard/learningManagement.min.js"></script>
    <script src="assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="assets/js/pages/forms/forms.bootstrap-select.min.js"></script>
    <script src="assets/vendors/gijgo/js/gijgo.min.js"></script>
    <script src="assets/js/pages/forms/forms.datepicker.min.js"></script>
</body>

</html>