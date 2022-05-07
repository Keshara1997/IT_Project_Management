<?php 
    require_once("../../include/initialize.php");
    require_once ("../../include/connection.php");
    require_once("../inc/redirect.php");
    include 'barcode128.php';

    
    if(isset($_GET['id'])){
        $ST_ID = mysqli_real_escape_string($mysqli,test_input($_GET['id']));

        $result = $mysqli->query("SELECT * FROM tblstudent WHERE StudentID = $ST_ID LIMIT 1") or die($mysqli->error);
        while ($row = $result->fetch_assoc()):
            $valid = 0;
            $Fname =  mysqli_real_escape_string($mysqli,test_input($row['Fname']));
            $Lname =  mysqli_real_escape_string($mysqli,test_input($row['Lname']));
            $MobileNo =  mysqli_real_escape_string($mysqli,test_input($row['MobileNo']));
            $STID  =  mysqli_real_escape_string($mysqli,test_input($row['STID']));
        endwhile;



        if(isset($valid)) {
     
        }else{
            echo "<script>location='../manageStudent.php?status=success';</script>";
        }

    }else{
        echo "<script>location='../manageStudent.php?status=success';</script>";
    }
?>



<!DOCTYPE html>
<html>

<head>
    <base href="../../" />
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
    <style>
        .card{
            width:711px;
            height:482px;
        } 
        .barcode{
            
            position: absolute;
            left: 500px;
            top: 380px;
        }
        .idNumber{
            color:white;
            font-size: 30px;
            position: absolute;
            left: 465px;
            top: 225px;
        }
    </style>
</head>

<body>
    <div class="app-admin-wrap-layout-1 sidebar-full sidebar-theme-slate subheader-fixed">
    <?php include('../inc/headerOne.php'); ?>




            <!-- Start::Main header  -->
            <header class="main-header bg-card d-flex flex-row justify-content-between align-items-center px-lg">
                <!-- Start::Header menu-->
                <div>
                        <div class="ul-header-menu">
                            <ul class="ul-header-nav">
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link" href="admin/addCourse.php">Create Classroom</a></li>
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
                
                <div class="container">

                    <h2 class="doc-section-title" >ID CARD<a class="section-link"></a></h2> <hr>
                    <div class="doc-example">
                        <div class="row">
                    

                            <div class="col-md-6">
                                <div class="card"  id="capture" >
                                    <div class="idNumber"><?=$STID?></div>
                                    <?= "<div class='barcode'>".bar128($STID)."</div>";?>
                                    <img src="admin/ID_CARD/id_cards/ID_CARD_TEMPLATE.jpg" alt="" >
                                </div>
                            </div>

                            <div class="col-md-12">
                               <hr> <b>Name -</b> <?=$Fname ?> <?=$Lname ?> <br>
                                <b>Student ID -</b> <?=$STID?>   <br>
                                <b>Contact -</b> <?=$MobileNo?> <hr>
                                <button class="btn btn-raised-primary" onclick="screenshot()"><strong>Download</strong></button>
                                <hr>
                            </div>

                            <div id="preview"></div>


                        </div>
                    </div>


                  
                    <script>
                        function screenshot(){
                            html2canvas(document.getElementById("capture")).then(function(canvas) {
                                var anchorTag = document.createElement("a");
                                document.body.appendChild(anchorTag);
                         
                                anchorTag.download = "<?=$STID?>.jpg";
                                anchorTag.href = canvas.toDataURL();
                                anchorTag.target = '_blank';
                                anchorTag.click();
                            });
                        }
                    </script>


                </div>
                <br>    
                <!-- Start:: content (Your custom content)-->
                <!-- Start:: Footer-->
                <?php include('../../include/footer.php'); ?>
                <!-- End:: Footer-->
            </div>
            <!-- End:: content body-->


        </div>
    </div>





    <div class="ul-sidebar-panel-overlay"></div>
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
   
</body>

</html>