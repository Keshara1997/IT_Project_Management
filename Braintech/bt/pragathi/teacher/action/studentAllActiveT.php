<?php
    	require_once ("../../include/initialize.php");
        require_once ("../inc/redirectT.php");
    require_once ("../../include/connection.php");

    $CID = $_SESSION['CID'];
    $status = $_GET['status'];

    if($status == 'ACTIVE'){
        $mysqli->query("UPDATE tblstudent SET ACTIVE='ACTIVE' WHERE CID = $CID") or die($mysqli->error);
        echo "<script>alert('All Student Activated Again. This students can signin to the System now!');</script>";
    }
    if($status == 'DISABLE'){
        $mysqli->query("UPDATE tblstudent SET ACTIVE='DISABLE' WHERE CID = $CID") or die($mysqli->error);
        echo "<script>alert('All Student Disabled. This students can not signin to the System now!');</script>";
    }

?>    

<script>
    location='../manageStudentT.php';
</script> 

