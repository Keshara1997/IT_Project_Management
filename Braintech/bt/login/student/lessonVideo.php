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
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Video Lessons</a></li></li>
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
     

                <div class="container mt-lg">

            <!--___________________________________New____________________-->
            <h2>Emberded Videos</h2><hr>

<div class="row">

    <?php    
        $CID = test_input($_SESSION['STCID']); 
        $CID = mysqli_real_escape_string($mysqli,$CID);
        $mydb->setQuery("SELECT * FROM tbllessonnew WHERE Category='Video' AND CID=$CID ORDER BY LessonChapter DESC, LessonID DESC ");
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

                <iframe src="<?php echo $result->FileLocation ?>" width="100%" height="240" allow="autoplay" ></iframe>
                    
                </div>
            </div>
        </div>

        <?php } ?>

    </div>


<!--_________________________________________________________-->

                <h2>Normal Videos</h2><hr>
                <div class="row">

                        <?php 
                            $StudentID = test_input($_SESSION['StudentID']);    
                            $CID = test_input($_SESSION['STCID']); 
                            $StudentID = mysqli_real_escape_string($mysqli,$StudentID); 
                            $CID = mysqli_real_escape_string($mysqli,$CID); 
                            $mydb->setQuery("SELECT * FROM tbllesson tbl, tblessonpermission tblp WHERE tblp.LPLID =tbl.LessonID AND tblp.LPSTID = $StudentID AND tbl.Category='Video' AND tbl.CID = $CID ORDER BY tbl.LessonID DESC");
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
                                        <video width="100%" height="250" controls controlslist="nodownload">
                                            <source src="admin/action/<?php echo $result->FileLocation ?>" type="video/mp4">
                                        </video>
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
           
            <!-- End:: content body-->


        </div>
    </div>


    <?php include('inc/profile.php'); ?>


    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>

</body>

</html>