<?php
 	require_once ("../../include/initialize.php");
     require_once ("../inc/redirect.php");
    require_once ("../../include/connection.php");

    $id = test_input($_GET['id']);
    $status = test_input($_GET['status']);
    $id = mysqli_real_escape_string($mysqli,$id);
    $status = mysqli_real_escape_string($mysqli,$status);

    if($status == 'ACTIVE'){
        $result = $mysqli->query("UPDATE tbteacher SET ACTIVE='ACTIVE'WHERE TEACHER_ID = $id") or die($mysqli->error);
        if ($result === TRUE) {
            echo "<script>alert('Teacher Activated Again. This teacher can signin to the System now!');location='../manageTeacher.php';</script>";
        } else {
            echo "<script>alert('Error');location='../manageTeacher.php';</script>";
        }
    }

    if($status == 'DISABLE'){
        $result = $mysqli->query("UPDATE tbteacher SET ACTIVE='DISABLE'WHERE TEACHER_ID = $id") or die($mysqli->error);
        if ($result === TRUE) {
            echo "<script>alert('Teacher Disabled. This teacher can not signin to the System now!');location='../manageTeacher.php';</script>";
        } else {
            echo "<script>alert('Error');location='../manageTeacher.php';</script>";
        }
    }

?>    



