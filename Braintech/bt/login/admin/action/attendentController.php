<?php
 	require_once ("../../include/initialize.php");
	 require_once ("../inc/redirect.php");
	require_once ("../../include/connection.php");

	$action = test_input($_GET['action']);
    $action = mysqli_real_escape_string($mysqli,$action);

	if($action == 'add'){
		if(isset($_POST['save'])){

            $NAME = test_input($_POST['name']);
            $USER_NAME = test_input($_POST['user_email']);
			$USER_PASS = sha1($_POST['user_pass']);

			$USER_PASS = stripcslashes($USER_PASS);
			$NAME = mysqli_real_escape_string($mysqli,$NAME);
			$USER_NAME = mysqli_real_escape_string($mysqli,$USER_NAME);
			$USER_PASS = mysqli_real_escape_string($mysqli,$USER_PASS);
			
            $ACTIVE = 'ACTIVE';
		
			$result = $mysqli->query("INSERT into tbattendent (ATTENDENT_NAME,ATTENDENT_USER_NAME,ATTENDENT_PASSWORD,ACTIVE) 
			VALUES('$NAME','$USER_NAME','$USER_PASS','$ACTIVE')") or die($mysqli->error);

			if ($result === TRUE) {
				echo "<script>alert('New Attendent Created');location='../manageAttendent.php';</script>";
			} else {
				echo "<script>alert('Error');location='../manageAttendent.php';</script>";
			}
	
		}
	}


	if($action == 'delete'){

		$id = test_input($_GET['id']);
		$id = mysqli_real_escape_string($mysqli,$id);

        $result = $mysqli->query("DELETE FROM tbattendent WHERE ATT_ID =  $id") or die($mysqli->error);

		if ($result === TRUE) {
			echo "<script>alert('This Attendent has been Deleted');location='../manageAttendent.php';</script>";
		} else {
			echo "<script>alert('Error');location='../manageAttendent.php';</script>";
		}

   	}
?>


