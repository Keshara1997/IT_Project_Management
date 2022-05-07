<?php
  	require_once ("../../include/initialize.php");
    require_once ("../inc/redirect.php");
    require_once ("../../include/connection.php");

    $action =  test_input($_GET['action']);
    $CID =  test_input($_SESSION['CID']);
    $Month =  test_input($_GET['Month']);
    $Year =  test_input($_GET['Year']);
    $Date =  test_input($_GET['Date']);

		$action = mysqli_real_escape_string($mysqli,$action);
    $CID = mysqli_real_escape_string($mysqli,$CID);
    $Month = mysqli_real_escape_string($mysqli,$Month);
    $Year = mysqli_real_escape_string($mysqli,$Year);
    $Date = mysqli_real_escape_string($mysqli,$Date);

    if($action == 'delete'){
        $id = test_input($_GET['id']);
        $id = mysqli_real_escape_string($mysqli,$id);

        $result = $mysqli->query("DELETE FROM tbattendence WHERE  ST_ATT_ID= $id AND CID = $CID") or die($mysqli->error);

        if ($result === TRUE) {
          echo "<script>alert('Removed');location='../manageAttendenceDetails.php?Year=".$Year."&Month=".$Month."&Date=".$Date."&save=payment';</script>";
        } else {
          echo "<script>alert('Error');location='../manageAttendenceDetails.php?Year=".$Year."&Month=".$Month."&Date=".$Date."&save=payment';</script>";
        }
	  }
		
?>