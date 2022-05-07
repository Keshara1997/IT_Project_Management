<?php
  	require_once ("../../include/initialize.php");
    require_once ("../inc/redirect.php");
    require_once ("../../include/connection.php");

    $action = test_input($_GET['action']);
    $action = mysqli_real_escape_string($mysqli,$action);
  
    $CID = test_input($_SESSION['CID']);
    $Month = test_input($_GET['Month']);
    $Year = test_input($_GET['Year']);

    $CID = mysqli_real_escape_string($mysqli,$CID);
    $Month = mysqli_real_escape_string($mysqli,$Month);
    $Year = mysqli_real_escape_string($mysqli,$Year);

    if($action == 'delete'){
        $id = test_input($_GET['id']);
        $id = mysqli_real_escape_string($mysqli,$id);

        $result = $mysqli->query("DELETE FROM tbpayments WHERE  PAYMENT_ID= $id AND CID = $CID") or die($mysqli->error);

        if ($result === TRUE) {
            echo "<script>alert('Removed');location='../managePaymentsDetails.php?Year=".$Year."&Month=".$Month."&save=payment';</script>";
        } else {
            echo "<script>alert('Error');location='../managePaymentsDetails.php?Year=".$Year."&Month=".$Month."&save=payment';</script>";
        }
	}


    if($action == 'edit'){
        $id = test_input($_POST['id']);
        $amount = test_input($_POST['amount']);

        $id = mysqli_real_escape_string($mysqli,$id);
        $amount = mysqli_real_escape_string($mysqli,$amount);

        if(is_numeric($amount)){

            $result = $mysqli->query("UPDATE tbpayments SET AMOUNT=$amount WHERE PAYMENT_ID=$id") or die($mysqli->error);

            if ($result === TRUE) {
                echo "<script>alert('Updated');location='../managePaymentsDetails.php?Year=".$Year."&Month=".$Month."&save=payment';</script>";
            } else {
                echo "<script>alert('Error');location='../managePaymentsDetails.php?Year=".$Year."&Month=".$Month."&save=payment';</script>";
            }
        } else {
            echo "<script>alert('Error');location='../managePaymentsDetails.php?Year=".$Year."&Month=".$Month."&save=payment';</script>";
        }
	}
		
?>