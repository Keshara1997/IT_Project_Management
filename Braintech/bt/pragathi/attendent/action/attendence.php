<?php
 	require_once ("../../include/initialize.php");
    require_once ("../inc/redirectA.php");
    require_once ("../../include/connection.php");

    if(isset($GET['STID'])){
        echo "<script>alert('Error');</script>";
        echo "<script>location='../Aregister.php';</script>";
    }

    if(isset($GET['CID'])){
        echo "<script>alert('Error');</script>";
        echo "<script>location='../Aregister.php';</script>";
    }

    $STID = $_GET['STID'];
    $error = 1;
    $result = $mysqli->query("SELECT * FROM tblstudent  WHERE STID='$STID'") or die($mysqli->error);
    while ($row = $result->fetch_assoc()): 
        $error = 0;
        $Student_ID = $row['StudentID'];
    endwhile;

    if($error==1){
        echo "<script>alert('Invalid Student ID');</script>";
        echo "<script>location='Aregister.php';</script>";
    }else{

        $courseID = $_GET['CID'];
        $ATTyear = date("y");
        $ATTmonth = date("m");
        $ATTdate = date("d");
        $error = 0;

        $result = $mysqli->query("SELECT * FROM tbattendence  WHERE ST_ID=$Student_ID AND CID=$courseID AND ST_ATT_YEAR=$ATTyear AND ST_ATT_MONTH=$ATTmonth AND ST_ATT_DATE=$ATTdate Limit 1") or die($mysqli->error);
        while ($row = $result->fetch_assoc()):
            $error = 1;
        endwhile;

        if($error == 0){

            $mysqli->query("INSERT into tbattendence (ST_ID,CID,ST_ATT_YEAR,ST_ATT_MONTH,ST_ATT_DATE) 
            VALUES('$Student_ID','$courseID','$ATTyear','$ATTmonth','$ATTdate')") or die($mysqli->error);

            echo "<script>alert('Attended');</script>";
            echo "<script>location='../Aregister.php';</script>";

        }else{
            echo "<script>alert('Allready Attend');</script>";
            echo "<script>location='../Aregister.php';</script>";
        }


    }
?>