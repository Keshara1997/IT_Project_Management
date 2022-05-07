<?php
    require_once ("../../include/initialize.php");
    require_once ("../../include/connection.php");
    require_once ("../inc/redirect.php");

    $action = test_input($_GET['action']);
    $action = mysqli_real_escape_string($mysqli,$action);

	if($action == 'all'){
        $Todaydate = date("d");
        $CID = test_input($_SESSION['CID']);
        $status = test_input($_GET['status']);
        $CID = mysqli_real_escape_string($mysqli,$CID);
        $status = mysqli_real_escape_string($mysqli,$status);

        if($status == 'ACTIVE'){
            $result = $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='ACTIVE', ACTIVE_DATE = $Todaydate WHERE CID = $CID") or die($mysqli->error);
            if ($result === TRUE) {
                echo "<script>alert('All Student Activated Again. This students can signin to the System now!'); location='../manage_Student_course.php';</script>";
            } else {
                echo "<script>alert('Error'); location='../manage_Student_course.php';</script>";
            }
        }
        if($status == 'DISABLE'){
            $result = $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='DISABLE' WHERE CID = $CID") or die($mysqli->error);
            if ($result === TRUE) {
                echo "<script>alert('All Student Disabled. This students can not signin to the System now!'); location='../manage_Student_course.php';</script>";
            } else {
                echo "<script>alert('Error'); location='../manage_Student_course.php';</script>";
            }
        }

    }



    if($action == 'one'){
        $Todaydate = date("d");
        $id = test_input($_GET['id']);
        $CID = test_input($_SESSION['CID']);
        $status = test_input($_GET['status']);

        $id = mysqli_real_escape_string($mysqli,$id);
        $CID = mysqli_real_escape_string($mysqli,$CID);
        $status = mysqli_real_escape_string($mysqli,$status);

        if($status == 'ACTIVE'){
            $result = $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='ACTIVE', ACTIVE_DATE = $Todaydate WHERE STID = $id AND CID = $CID") or die($mysqli->error);
            if ($result === TRUE) {
                echo "<script>alert('Student Activated Again. This student can signin to the System now!'); location='../manage_Student_course.php';</script>";
            } else {
                echo "<script>alert('Error'); location='../manage_Student_course.php';</script>";
            }
        }
        if($status == 'DISABLE'){
            $result = $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='DISABLE' WHERE STID = $id AND CID = $CID") or die($mysqli->error);
            if ($result === TRUE) {
                echo "<script>alert('Student Disabled. This student can not signin to the System now!'); location='../manage_Student_course.php';</script>";
            } else {
                echo "<script>alert('Error'); location='../manage_Student_course.php';</script>";
            }
        }
    }



    if($action == 'paid'){
        $CID = test_input($_SESSION['CID']);
        $Todayyear = date("y");
        $Todaymonth = date("m");
        $Todaydate = date("d");

        $Todayyear = stripcslashes($Todayyear);
        $Todaymonth = stripcslashes($Todaymonth);
        $Todaydate = stripcslashes($Todaydate);
        $CID = mysqli_real_escape_string($mysqli,$CID);
        $Todayyear = mysqli_real_escape_string($mysqli,$Todayyear);
        $Todaymonth = mysqli_real_escape_string($mysqli,$Todaymonth);
        $Todaydate = mysqli_real_escape_string($mysqli,$Todaydate);

        $result = $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='DISABLE' WHERE CID = $CID") or die($mysqli->error);

        if ($result === TRUE) {
            $result = $mysqli->query("SELECT * FROM tbpayments WHERE CID = $CID AND P_MONTH = $Todaymonth AND P_YEAR = $Todayyear") or die($mysqli->error);
            while ($row = $result->fetch_assoc()):
                $STID = test_input($row['ST_ID']);
                $STID = mysqli_real_escape_string($mysqli,$STID);
                $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='ACTIVE' WHERE STID = $STID AND CID = $CID") or die($mysqli->error);
            endwhile;
            echo "<script>alert('Activated Paid Students'); location='../manage_Student_course.php';</script>";
        } else {
            echo "<script>alert('Error'); location='../manage_Student_course.php';</script>";
        }
    }


?>    



