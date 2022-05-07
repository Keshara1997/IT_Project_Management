<?php
  	require_once ("../../include/initialize.php");
    require_once ("../inc/redirect.php");
    require_once ("../../include/connection.php");

    $action = $_GET['action'];
  
    $CID = $_SESSION['CID'];
    $Month = $_GET['Month'];
    $Year = $_GET['Year'];
    $Date = $_GET['Date'];

    if($action == 'delete'){
        $id = $_GET['id'];
        $result = $mysqli->query("DELETE FROM tbattendence WHERE  ST_ATT_ID= $id AND CID = $CID") or die($mysqli->error);

        if ($result === TRUE) {
          echo "<script>alert('Removed');location='../manageAttendenceDetails.php?Year=".$Year."&Month=".$Month."&Date=".$Date."&save=payment';</script>";
        } else {
          echo "<script>alert('Error');location='../manageAttendenceDetails.php?Year=".$Year."&Month=".$Month."&Date=".$Date."&save=payment';</script>";
        }

        
	}
		
?>