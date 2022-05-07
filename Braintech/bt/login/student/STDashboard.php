<?php 
    require_once("../include/initialize.php");
    require_once ("../include/connection.php");
    require_once("inc/redirect2.php");

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
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Student Dashboard</a></li></li>
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
                <!-- Start:: content (Your custom content)-->
                <div class="subheader px-lg">
                    <div class="subheader-container">
                        <div class="subheader-main d-none d-lg-flex">
                            <nav class="ul-breadcrumb" aria-label="breadcrumb">
                                <ol class="ul-breadcrumb-items">
                                    <li class="breadcrumb-home"><a href="student/STDashboard.php"> <i class="material-icons">home</i></a></li>
                                    <li class="breadcrumb-item"><a href="student/STDashboard.php">Dashboards</a></li>
                              
                                </ol>

                            </nav>
                        </div>
                    </div>
                </div>
                <div class="container mt-lg">

              

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 mb-lg">
                                    <div class="card">
                                        <div class="px-xl pt-xl pb-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="card-title mb-sm">Welcome Back! <?php echo $_SESSION['Fname']; ?></h4>
                                                    <h6><?php echo $CourseName; ?></h6>
                                                </div>
                                                <div class="col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col 1 -->
                            
                        
                                <div class="col-lg-6 mb-lg">
                                    <div class="card bg-danger">
                                        <div class="card-body">
                                            <div class="ul-grid-item d-flex justify-content-between align-items-center p-2">
                                            <?php
                                                    $CID = test_input($_SESSION['STCID']);
                                                    $CID = mysqli_real_escape_string($mysqli,$CID); 
                                                    $count = 0;
                                                    $select = 0;
                                                    $result = $mysqli->query("SELECT * FROM tblive WHERE CID=$CID") or die($mysqli->error);
                                                    while ($row = $result->fetch_assoc()):
                                                        $select = 1;
                                                        $LiveID = $row['LID'];
                                                        $Title = $row['TITLE'];
                                                        $Link = $row['LINK'];
                                                    endwhile;
                                                ?>
                                              
                                                <?php
                                                    if($select == 1){
                                                ?>
                                                    <span class="badge badge-opacity rounded-circle badge-light mr-sm">
                                                        <h5 class="font-weight-semi text-white m-0"><img src="assets/images/live.gif"></h5>
                                                    </span>
                                                    <div class="ml-2 flex-grow-1">
                                                        <p class="m-0 text-white font-weight-normal">Zoom Live Meeting  <i class="material-icons nav-icon text-16">online_prediction</i></p>
                                                        <p class="text-white text-small m-0"><?php echo $Title; ?></p>
                                                    </div>
                                                    <a href="student/meeting.php">
                                                        <button type="button" class="btn btn-raised btn-raised-default">Join Now</button>
                                                    </a>

                                                <?php } else{ ?>
                                                    <div class="ml-2 flex-grow-1">
                                                        <p class="m-0 text-white font-weight-normal">Zoom Live Meeting</p>
                                                        <p class="text-white text-small m-0"></p>
                                                    </div>
                                                    <a>
                                                        <button type="button" class="btn btn-raised btn-raised-default">Not Available</button>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-lg-6 mb-lg">
                                    <div class="card bg-primary">
                                        <div class="card-body">
                                            <div class="ul-grid-item d-flex justify-content-between align-items-center p-2">
                                            <?php
                                                    $CID = test_input($_SESSION['STCID']);
                                                    $CID = mysqli_real_escape_string($mysqli,$CID); 
                                                    $count = 0;
                                                    $select = 0;
                                                    $result = $mysqli->query("SELECT * FROM tbquiz WHERE CID=$CID") or die($mysqli->error);
                                                    while ($row = $result->fetch_assoc()):
                                                        $select = 1;
                                                        $LiveID = $row['QID'];
                                                        $Title = $row['TITLE'];
                                                        $Link = $row['LINK'];
                                                    endwhile;
                                                ?>
                                              
                                                <?php
                                                    if($select == 1){
                                                ?>
                                                    <span class="badge badge-opacity rounded-circle badge-light mr-sm">
                                                        <h5 class="font-weight-semi text-white m-0"><img src="assets/images/live.gif"></h5>
                                                    </span>
                                                    <div class="ml-2 flex-grow-1">
                                                        <p class="m-0 text-white font-weight-normal">Online Quiz  <i class="material-icons nav-icon text-16">online_prediction</i></p>
                                                        <p class="text-white text-small m-0"><?php echo $Title; ?></p>
                                                    </div>
                                                    <a href="<?php echo $Link; ?>">
                                                        <button type="button" class="btn btn-raised btn-raised-default">Get Now</button>
                                                    </a>

                                                <?php } else{ ?>
                                                    <div class="ml-2 flex-grow-1">
                                                        <p class="m-0 text-white font-weight-normal">Online Quiz</p>
                                                        <p class="text-white text-small m-0"></p>
                                                    </div>
                                                    <a>
                                                        <button type="button" class="btn btn-raised btn-raised-default">Not Available</button>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 mb-lg">
                                    <div class="card table-responsive">
                                        <table class="table borderless table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-muted">Date</th>
                                                    <th scope="col" class="text-muted">Chapter (Lesson)</th>
                                                    <th scope="col" class="text-muted">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php 
                                                        $Counter = 0; 
                                                        $CID = test_input($_SESSION['STCID']);
                                                        $CID = mysqli_real_escape_string($mysqli,$CID);  
                                                        $mydb->setQuery("SELECT * FROM tbllesson WHERE CID = $CID ORDER BY tbllesson.LessonID DESC");
                                                        $cur = $mydb->loadResultList();
                                                        foreach ($cur as $result) {
                                                            $Counter++;
                                                            if($Counter <= 5){
                                                    ?>
                                                <tr>
                                                    <td class="align-middle text-muted"><?php echo $result->Date ?></td>
                                                    <th scope="row" class="align-middle">
                                                        <span class="font-weight-semi"><?php echo $result->LessonChapter ?> (<?php echo $result->LessonTitle ?>)</span>
                                                    </th>
                                                    
                                                    <td class="align-middle">
                                                    <?php
                                                        if($result->Category == 'Video' ){
                                                            echo "<a href='student/lessonVideo.php'>";
                                                        }else{
                                                            echo "<a href='student/lessonDocs.php'>";
                                                        }
                                                    ?>
                                                       <button type="button" class="btn btn-primary">View</button>
                                                    </a>
                                                    </td>
                                                </tr>
                                                <?php } } ?>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center mb-lg rounded gray-200">
                                        <div class="card-body">
                                            <img class="" src="assets/images/logo1.png" width="200"/>
                                
                                            <h3 class="m-0 pt-xl pb-xl font-weight-normal"><b><?php echo $CourseName; ?></b>  </h3>
                                        </div>
                                    </div>
                                    <div class="ul-list-group-1 mb-xxl">
                                        <h6 class="heading-label">Announcement</h6>
                                 
                                        <?php
                                                    $CID = test_input($_SESSION['STCID']);
                                                    $CID = mysqli_real_escape_string($mysqli,$CID); 
                                                    $count = 0;
                                                    $result = $mysqli->query("SELECT * FROM announcement WHERE CID=$CID ORDER BY announcement.AID DESC") or die($mysqli->error);
                                                    while ($row = $result->fetch_assoc()):
                                                        $count++;
                                                    
                                                ?>

                                        <div class="ul-list-item mb-md">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-opacity rounded-circle badge-light mr-md"><?php echo $count ?></span>
                                                <div class="flex-grow-1">
                                                    <h6 class="text-small font-weight-semi m-0"><?php echo $row['TITLE'];?></h6>
                                                    <small class="text-muted text-small"><?php echo $row['ANNOUNCEMENT']; ?></small>
                                                </div>
                                            </div>
                                        </div>
                                            <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                
                <!-- Start:: content (Your custom content)-->
                <!-- Start:: Footer-->
                <?php include('../include/footer.php'); ?>
                <!-- End:: Footer-->
            </div>
            <!-- End:: content body-->


        </div>
    </div>



    <?php include('inc/profile.php'); ?>

    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>

</body>

</html>