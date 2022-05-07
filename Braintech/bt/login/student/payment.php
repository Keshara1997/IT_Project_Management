<?php 
    require_once ("../include/initialize.php");
    require_once ("../include/connection.php");
    require_once("inc/redirect.php");

    
    $ATTyear = date("y");
    $ATTmonth = date("m");
    $ATTdate = date("d");
    $STID = $_SESSION['StudentID'];
    $paid = 'no';

    $result = $mysqli->query("SELECT * FROM tbpayments WHERE  P_MONTH = $ATTmonth AND P_YEAR = $ATTyear AND ST_ID = $STID") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
        $paid = 'yes';
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
                <div class="col-lg-12 col-md-12">

                <?php 
                if($paid == 'yes'){
            ?>
            <div class="alert alert-success" role="alert"><strong class="text-capitalize">Payment Status!</strong> We have received your payment this month.
                <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>

            <?php } else { ?>

            <div class="alert alert-danger" role="alert"><strong class="text-capitalize">Payment Status!</strong> Your payment has not been made this month.
                <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            
            <?php } ?>


                                            <div class="card mb-md">
                                                <div class="card-header justify-content-between align-items-center p-md">
                                                    <div class="font-weight-semi m-0">Last Payment Hostory</div>
                                                </div>
                                                <div class="card-body px-md">
                                                    

                                                <ul class="list-group">

                                                <?php
                                                    $counter = 0; 
                                                    $result = $mysqli->query("SELECT * FROM tbpayments tp, tbcourse tc WHERE tp.CID = tc.CID AND tp.ST_ID = $STID ORDER BY tp.PAYMENT_ID DESC") or die($mysqli->error);
                                                    while ($row = $result->fetch_assoc()):
                                                        $counter++;
                                                        if($counter<5){
                                                ?>

                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <?php echo $row['P_YEAR']; ?>/<?php echo $row['P_MONTH']; ?>/<?php echo $row['P_DATE']; ?>&nbsp;&nbsp;<b><?php echo $row['COURSE_NAME']; ?></b>
                                                    LKR <?php echo $row['AMOUNT']; ?>
                                                </li>
                                                
                                                <?php } endwhile; ?>

                                                </ul>
                                              
                                    
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
</body>

</html>