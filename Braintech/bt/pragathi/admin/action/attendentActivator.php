<?php
 	require_once ("../../include/initialize.php");
     require_once ("../inc/redirect.php");
    require_once ("../../include/connection.php");

    $id = $_GET['id'];
    $status = $_GET['status'];

    if($status == 'ACTIVE'){
        $mysqli->query("UPDATE tbattendent SET ACTIVE='ACTIVE'WHERE ATT_ID = $id") or die($mysqli->error);
        echo "<script>alert('Attendent Activated Again. This Attendent can signin to the System now!');</script>";
    }
    if($status == 'DISABLE'){
        $mysqli->query("UPDATE tbattendent SET ACTIVE='DISABLE'WHERE ATT_ID = $id") or die($mysqli->error);
        echo "<script>alert('Attendent Disabled. This Attendent can not signin to the System now!');</script>";
    }

?>    

<script>
    location='../manageAttendent.php';
</script> 

