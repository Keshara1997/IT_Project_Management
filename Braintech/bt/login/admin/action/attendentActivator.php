<?php
 	require_once ("../../include/initialize.php");
     require_once ("../inc/redirect.php");
    require_once ("../../include/connection.php");

    $id = test_input($_GET['id']);
    $status = test_input($_GET['status']);

    $id = mysqli_real_escape_string($mysqli,$id);
    $status = mysqli_real_escape_string($mysqli,$status);
    

    if($status == 'ACTIVE'){

        $result = $mysqli->query("UPDATE tbattendent SET ACTIVE='ACTIVE'WHERE ATT_ID = $id") or die($mysqli->error);

        if ($result === TRUE){
            echo "<script>alert('Attendent Activated Again. This Attendent can signin to the System now!');location='../manageAttendent.php';</script>";
        } else {
            echo "<script>alert('Error');location='../manageAttendent.php';</script>";
        }

    }


    if($status == 'DISABLE'){

        $result = $mysqli->query("UPDATE tbattendent SET ACTIVE='DISABLE'WHERE ATT_ID = $id") or die($mysqli->error);

        if ($result === TRUE){
            echo "<script>alert('Attendent Disabled. This Attendent can not signin to the System now!');location='../manageAttendent.php';</script>";
        } else {
            echo "<script>alert('Error');location='../manageAttendent.php';</script>"; 
        }

    }

?>    


