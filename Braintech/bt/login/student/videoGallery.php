<?php 
    require_once ("../include/connection.php");
    require_once ("../include/initialize.php"); 
    require_once("inc/redirect.php");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/github.min.css" />
    <link rel="stylesheet" href="assets/vendors/gijgo/css/gijgo.min.css" />
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
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Video Gallery</a></li></li>
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

                <div class="container mt-lg">
                <h2 class="doc-section-title" id="form-control">Video Gallery<a class="section-link" href="#form-control"></a></h2>
                    <div class="doc-example">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                        <?php 
                       
                                            $CID = test_input($_SESSION['STCID']);
                                            $CID = mysqli_real_escape_string($mysqli,$CID); 

                                            $mydb->setQuery("SELECT * FROM `tbllesson` WHERE CID=$CID");
                                            $cur = $mydb->loadResultList();

                                            foreach ($cur as $result) {  

                                                if ($result->Category=='Video') {


                                        ?>  
                                            <div class="col-md-4 p-0">                                    
                                            <video width="350" height="200" controls>
                                                <source src="admin/action/<?php echo $result->FileLocation ?>" type="video/mp4">
                                            </video>
                                            </div>

                                        <?php
                                                }
                                            } 
                                        ?>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
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


    <div class="ul-sidebar-panel-overlay"></div>
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="assets/vendors/echarts/dist/echarts.min.js"></script>
    <script src="assets/js/pages/dashboard/learningManagement.min.js"></script>
    <script src="assets/vendors/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="assets/js/pages/sweetAlert2.script.min.js"></script>
    <script src="assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/pages/datatables/datatableHTML.js"></script>
</body>

</html>