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
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="assets/css/main.bundle.min.css" />
</head>

<body>
    <div class="app-admin-wrap-layout-1 sidebar-full sidebar-theme-slate">
    <?php include('inc/headerOne.php'); ?>









       
         
            <!-- Start::Main header  -->
            <header class="main-header bg-card d-flex flex-row justify-content-between align-items-center px-lg">
                <!-- Start::Header menu-->
                <div>
                        <div class="ul-header-menu">
                            <ul class="ul-header-nav">
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Classroom Selector</a></li>
                            </ul>
                        </div>
     
                </div>
                <!-- End::Header menu-->
                <div class="ul-header-topbar">
                    <div class="flex-grow-1">
                        <div class="header-btn-group">
                            <button class="btn d-flex py-1 pl-2 pr-0 rounded"  type="button" ><span class="m-0 mr-2 font-weight-normal">Hi, <?php echo $_SESSION['Fname']; ?></span>
                                <img class="avatar-sm rounded-circle mr-1" src="assets/images/faces/1.png" />
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End::Main header-->
            <!-- Start:: content body-->
            <div class="main-content-body">    
            
            <div class="container my-lg">
                    <div class="row">


                    <?php
                        $STID = $_SESSION['StudentID'] ;
                        $result = $mysqli->query("SELECT * FROM `studentcourses` c, `tbcourse` t WHERE c.CID = t.CID AND c.STID=$STID") or die($mysqli->error);
                        while ($row = $result->fetch_assoc()): 
                    ?>


                        <div class="col-xl-4 col-sm-12 col-lg-6 mb-md">
                            <div class="card">
                                <div class="card-body">
                                    <div class="ul-list-2 d-flex justify-content-between align-items-center">
                                        <div class="ul-list-2-image"></div>
                                        <div class="d-flex flex-wrap align-items-center flex-grow-1">
                                            <div class="ul-list-2-label d-flex flex-column flex-grow-1">
                                                <a class="font-weight-semi link-alt m-0"><?php echo $row['COURSE_NAME']; ?></a>
                                                <span class="text-muted ">Created Date - <?php echo $row['Date']; ?></span>
                                            </div>
                                            <div class="ul-list-2-toolbar my-sm">
                                            <a href="student/action/selector.php?id=<?php echo $row['CID']; ?>">
                                                <button type="button" class="btn btn-raised btn-raised-primary btn-rounded">Dashboard</button>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php  endwhile; ?>    

                  
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
   
    <div class="ul-sidebar-panel-overlay"></div>
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/pages/datatables/basicDatatable.min.js"></script>


    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="100775911928221">
      </div>
</body>

</html>