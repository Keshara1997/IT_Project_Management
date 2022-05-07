<?php
  	require_once ("../../include/initialize.php");
    require_once ("../inc/redirect.php");
    require_once ("../../include/connection.php");

    $action = $_GET['action'];
  
    $CID = $_SESSION['CID'];
    $Month = $_GET['Month'];
    $Year = $_GET['Year'];

    if($action == 'delete'){
        $id = $_GET['id'];
        $result = $mysqli->query("DELETE FROM tbpayments WHERE  PAYMENT_ID= $id AND CID = $CID") or die($mysqli->error);
        echo "<script>alert('Removed');location='../managePaymentsDetails.php?Year=".$Year."&Month=".$Month."&save=payment';</script>";
	}


    if($action == 'edit'){
        $id = $_POST['id'];
        $amount = $_POST['amount'];
        $mysqli->query("UPDATE tbpayments SET AMOUNT=$amount WHERE PAYMENT_ID=$id") or die($mysqli->error);
        echo "<script>alert('Updated');location='../managePaymentsDetails.php?Year=".$Year."&Month=".$Month."&save=payment';</script>";
	}
		
?>