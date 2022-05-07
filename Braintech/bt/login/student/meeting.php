<?php 
    require_once("../include/initialize.php");
    require_once ("../include/connection.php");
    require_once("inc/redirect2.php");

    date_default_timezone_set('Asia/Colombo');

    $CID = test_input($_SESSION['STCID']);
    $CID = mysqli_real_escape_string($mysqli,$CID); 

    $StudentID = test_input($_SESSION['StudentID']);
    $StudentID = mysqli_real_escape_string($mysqli,$StudentID); 

    $date = date('d');
    $month = date('m');
    $year = date('Y');
                                                
    $result = $mysqli->query("SELECT * FROM tblive WHERE CID=$CID") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
        $link = $row['LINK'];
    endwhile;

    if(isset($link)){
        $error = 0;
        $result = $mysqli->query("SELECT * FROM tbattendence  WHERE ST_ID=$StudentID AND CID=$CID AND ST_ATT_YEAR=$year AND ST_ATT_MONTH=$month AND ST_ATT_DATE=$date Limit 1") or die($mysqli->error);
        while ($row = $result->fetch_assoc()):
            $error = 1;
        endwhile;

        if($error == 0){

            $mysqli->query("INSERT into tbattendence (ST_ID,CID,ST_ATT_YEAR,ST_ATT_MONTH,ST_ATT_DATE) 
            VALUES('$StudentID','$CID','$year','$month','$date')") or die($mysqli->error);

            echo "<script>location='$link';</script>";

        }else{
            echo "<script>location='$link';</script>";
        }

    }else{
        echo "<script>location='STDashboard.php';</script>";
    }



 
?>

