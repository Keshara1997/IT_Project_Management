<?php
    require_once ("../../include/initialize.php");
    require_once ("../../include/connection.php");
    require_once ("../inc/redirect.php");


    $action = $_GET['action'];

	if($action == 'all'){
        $CID = $_SESSION['CID'];
        $status = $_GET['status'];

        if($status == 'ACTIVE'){
            $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='ACTIVE' WHERE CID = $CID") or die($mysqli->error);
            echo "<script>alert('All Student Activated Again. This students can signin to the System now!'); location='../manage_Student_course.php';</script>";
        }
        if($status == 'DISABLE'){
            $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='DISABLE' WHERE CID = $CID") or die($mysqli->error);
            echo "<script>alert('All Student Disabled. This students can not signin to the System now!'); location='../manage_Student_course.php';</script>";
        }
    }

    if($action == 'one'){
        $id = $_GET['id'];
        $CID = $_SESSION['CID'];
        $status = $_GET['status'];

        if($status == 'ACTIVE'){
            $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='ACTIVE' WHERE STID = $id AND CID = $CID") or die($mysqli->error);
            echo "<script>alert('Student Activated Again. This student can signin to the System now!'); location='../manage_Student_course.php';</script>";
        }
        if($status == 'DISABLE'){
            $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='DISABLE' WHERE STID = $id AND CID = $CID") or die($mysqli->error);
            echo "<script>alert('Student Disabled. This student can not signin to the System now!'); location='../manage_Student_course.php';</script>";
        }
    }

    if($action == 'paid'){
        $CID = $_SESSION['CID'];

        $Todayyear = date("y");
        $Todaymonth = date("m");
        $Todaydate = date("d");

        $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='DISABLE' WHERE CID = $CID") or die($mysqli->error);

        $result = $mysqli->query("SELECT * FROM tbpayments WHERE CID = $CID AND P_MONTH = $Todaymonth AND P_YEAR = $Todayyear") or die($mysqli->error);
        while ($row = $result->fetch_assoc()):
            $STID = $row['ST_ID'];
            $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='ACTIVE' WHERE STID = $STID AND CID = $CID") or die($mysqli->error);
        endwhile;
        echo "<script>alert('Activated Paid Students'); location='../manage_Student_course.php';</script>";
        
    }


?>    



