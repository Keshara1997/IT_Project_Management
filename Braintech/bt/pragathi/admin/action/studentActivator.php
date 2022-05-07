<?php
 	require_once ("../../include/initialize.php");
     require_once ("../inc/redirect.php");
    require_once ("../../include/connection.php");

    $id = $_GET['id'];
    $status = $_GET['status'];

    if($status == 'ACTIVE'){
        $mysqli->query("UPDATE tblstudent SET ACTIVE='ACTIVE'WHERE StudentID = $id") or die($mysqli->error);
        echo "<script>alert('Student Activated Again. This student can signin to the System now!');</script>";
    }
    if($status == 'DISABLE'){
        $mysqli->query("UPDATE tblstudent SET ACTIVE='DISABLE'WHERE StudentID = $id") or die($mysqli->error);
        echo "<script>alert('Student Disabled. This student can not signin to the System now!');</script>";
    }

?>    

<script>
    location='../manageStudent.php';
</script> 

