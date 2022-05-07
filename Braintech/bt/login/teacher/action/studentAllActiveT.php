<?php
    require_once ("../../include/initialize.php");
    require_once ("../inc/redirectT.php");
    require_once ("../../include/connection.php");

    $CID = test_input($_SESSION['CID']);
    $status = test_input($_GET['status']); 
    $CID = mysqli_real_escape_string($mysqli,$CID);
    $status = mysqli_real_escape_string($mysqli,$status);

    if($status == 'ACTIVE'){
        $result = $mysqli->query("UPDATE tblstudent SET ACTIVE='ACTIVE' WHERE CID = $CID") or die($mysqli->error);
        if ($result === TRUE) {
            echo "<script>alert('All Student Activated Again. This students can signin to the System now!');location='../manageStudentT.php';</script>";
        } else {
            echo "<script>alert('Error');location='../manageStudentT.php';</script>";
        }
    }
    if($status == 'DISABLE'){
        $result = $mysqli->query("UPDATE tblstudent SET ACTIVE='DISABLE' WHERE CID = $CID") or die($mysqli->error);
        if ($result === TRUE) {
            echo "<script>alert('All Student Disabled. This students can not signin to the System now!');location='../manageStudentT.php';</script>";
        } else {
            echo "<script>alert('Error');location='../manageStudentT.php';</script>";
        }
    }

?>    


