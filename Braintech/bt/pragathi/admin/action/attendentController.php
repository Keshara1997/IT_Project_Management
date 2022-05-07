<?php
 	require_once ("../../include/initialize.php");
	 require_once ("../inc/redirect.php");
	require_once ("../../include/connection.php");
	$action = $_GET['action'];

	if($action == 'add'){
		if(isset($_POST['save'])){

            $NAME = ($_POST['name']);
            $USER_NAME = ($_POST['user_email']);
			$USER_PASS = sha1($_POST['user_pass']);
			
            $ACTIVE = 'ACTIVE';
		
			$mysqli->query("INSERT into tbattendent (ATTENDENT_NAME,ATTENDENT_USER_NAME,ATTENDENT_PASSWORD,ACTIVE) 
			VALUES('$NAME','$USER_NAME','$USER_PASS','$ACTIVE')") or die($mysqli->error);
			echo "<script>alert('New Attendent Created');location='../manageAttendent.php';</script>";
		 
		}
	}


	if($action == 'delete'){
		$id = $_GET['id'];
        $result = $mysqli->query("DELETE FROM tbattendent WHERE ATT_ID =  $id") or die($mysqli->error);

		if ($result === TRUE) {
			echo "<script>alert('This Attendent has been Deleted');location='../manageAttendent.php';</script>";
		} else {
			echo "<script>alert('Error');location='../manageAttendent.php';</script>";
		}
   }
?>


