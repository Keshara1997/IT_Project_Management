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
            $MobileNo =  mysqli_real_escape_string($mysqli,test_input($row['MobileNo']));
            $STID  =  mysqli_real_escape_string($mysqli,test_input($row['STID']));
        endwhile;

        if(isset($valid)){

           

        }else{
            echo "<script>location='../manageStudent.php?status=success';</script>";
        }

    }else{
        echo "<script>location='../manageStudent.php?status=success';</script>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <base href="../../" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATING CARD....</title>
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

  
         
              
                <div class="row">
                <div class="col-md-6">
                <div class="card" >
                    <div class="idNumber"><?=$STID?></div>
                    <?= "<div class='barcode'>".bar128($STID)."</div>";?>
                    <img src="admin/ID_CARD/id_cards/ID_CARD_TEMPLATE.jpg" alt="" >
                </div>
            </div>
            </div>
     
    

</body>
</html>







      

