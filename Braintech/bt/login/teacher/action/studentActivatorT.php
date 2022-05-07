<?php
 	require_once ("../../include/initialize.php");
    require_once ("../inc/redirectT.php");
    require_once ("../../include/connection.php");

    $id = test_input($_GET['id']);
    $status = test_input($_GET['status']);
    
    $id = mysqli_real_escape_string($mysqli,$id);
    $status = mysqli_real_escape_string($mysqli,$status);

    if($status == 'ACTIVE'){
        $result = $mysqli->query("UPDATE tblstudent SET ACTIVE='ACTIVE'WHERE StudentID = $id") or die($mysqli->error);
        if ($result === TRUE) {
            echo "<script>alert('Student Activated Again. This student can signin to the System now!');location='../manageStudentT.php';</script>";
        } else {
            echo "<script>alert('Error');location='../manageStudentT.php';</script>";
        }
    }
    if($status == 'DISABLE'){
        $result = $mysqli->query("UPDATE tblstudent SET ACTIVE='DISABLE'WHERE StudentID = $id") or die($mysqli->error);
        if ($result === TRUE) {
            echo "<script>alert('Student Disabled. This student can not signin to the System now!');location='../manageStudentT.php';</script>";
        } else {
            echo "<script>alert('Error');location='../manageStudentT.php';</script>";
        }
    }

?>    
 

