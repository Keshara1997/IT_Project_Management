<?php 
   require_once ("../include/connection.php");
    require_once ("../include/initialize.php");
    require_once("inc/redirect.php");

    $CID = test_input($_SESSION['STCID']);
    $CID = mysqli_real_escape_string($mysqli,$CID); 

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
    <title>BRAINTECH | STUDENT</title>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="assets/css/vendors.bundle.min.css" />
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="assets/css/main.bundle.min.css" />
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="assets/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" />
    <link rel="stylesheet" href="assets/css/main.bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>


<script>
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var x = this.responseText;
        if(x == 0){
            alert("This account was logout of this device because it was logged in from another device!");
            location='student/action/logout.php';
        }
    }
  };
  xhttp.open("GET", "student/inc/ipAddress.php", true);
  xhttp.send();
}
setInterval(function(){
	loadXMLDoc();
	// 1sec
},4000);

window.onload = loadXMLDoc;
</script>
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
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Exercises</a></li></li>
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
                        <div class="col-lg-12">
                            <div class="card-header">
                                <h2 class="p-1 m-0 text-16 font-weight-semi">Exercises</h2>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <table id="datatableScrollY" class="table" style="width:100%">
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
                                            $CID = test_input($_SESSION['STCID']); 
                                            $count = mysqli_real_escape_string($mysqli,$count);
                                            $CID = mysqli_real_escape_string($mysqli,$CID); 
                                            $result = $mysqli->query("SELECT * FROM exercise WHERE CID=$CID ORDER BY `exercise`.`ExId` DESC") or die($mysqli->error);
                                            while ($row = $result->fetch_assoc()): 
                                                $count++;
                                        ?>
                                            <tr>
                                                <td><?php echo $count; ?></td>
                                                <td><?php echo $row['Lesson']; ?></td>
                                                <td><?php echo $row['Title']; ?></td>
                                                <td>
                                                <a href="admin/action/exercises/<?php echo $row['FilePath']; ?>" download><button type="button" class="btn btn-raised btn-raised-success btn-sm">Download</button></a>
                                                <a href="student/upload.php?ExId=<?php echo $row['ExId']; ?>"><button type="button" class="btn btn-raised btn-raised-primary btn-sm">UPLOAD</button></a>   
                                                </td>
                                            </tr>
                                            <?php  endwhile; ?>    
                                    
                                    </table>
                                </div>
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
    <div class="ul-sidebar-panel-overlay"></div>
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/pages/datatables/scrollDatatable.min.js"></script>
</body>

</html>