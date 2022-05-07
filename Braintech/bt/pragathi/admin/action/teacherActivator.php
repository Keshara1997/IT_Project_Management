<?php
 	require_once ("../../include/initialize.php");
     require_once ("../inc/redirect.php");
    require_once ("../../include/connection.php");

    $id = $_GET['id'];
    $status = $_GET['status'];

    if($status == 'ACTIVE'){
        $mysqli->query("UPDATE tbteacher SET ACTIVE='ACTIVE'WHERE TEACHER_ID = $id") or die($mysqli->error);
        echo "<script>alert('Teacher Activated Again. This teacher can signin to the System now!');</script>";
    }
    if($status == 'DISABLE'){
        $mysqli->query("UPDATE tbteacher SET ACTIVE='DISABLE'WHERE TEACHER_ID = $id") or die($mysqli->error);
        echo "<script>alert('Teacher Disabled. This teacher can not signin to the System now!');</script>";
    }

?>    

<script>
    location='../manageTeacher.php';
</script> 

