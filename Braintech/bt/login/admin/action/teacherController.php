<?php
 	require_once ("../../include/initialize.php");
	require_once ("../inc/redirect.php");
	require_once ("../../include/connection.php");

	$action = $_GET['action'];
	$action = stripcslashes($action);
    $action = mysqli_real_escape_string($mysqli,$action);

	if($action == 'add'){
		if(isset($_POST['save'])){

            $NAME = test_input($_POST['name']);
            $SUBJECT = test_input($_POST['subject']);
            $NIC = test_input($_POST['NIC']);
            $AGE = test_input($_POST['age']);
            $USER_NAME = test_input($_POST['user_email']);
			$USER_PASS = test_input($_POST['user_pass']);

			$NAME = mysqli_real_escape_string($mysqli,$NAME);
			$SUBJECT = mysqli_real_escape_string($mysqli,$SUBJECT);
			$NIC = mysqli_real_escape_string($mysqli,$NIC);
			$AGE = mysqli_real_escape_string($mysqli,$AGE);
			$USER_NAME = mysqli_real_escape_string($mysqli,$USER_NAME);
			$USER_PASS = mysqli_real_escape_string($mysqli,$USER_PASS);

			$USER_PASS = sha1($USER_PASS);
			
            $ACTIVE = 'ACTIVE';
			

			$result = $mysqli->query("INSERT into tbteacher (TEACHER_NAME,SUBJECT,NIC_NO,AGE,TEACHER_USER_NAME,TEACHER_PASSWORD,ACTIVE) 
			VALUES('$NAME','$SUBJECT','$NIC','$AGE','$USER_NAME','$USER_PASS','$ACTIVE')") or die($mysqli->error);

			if ($result === TRUE) {
				echo "<script>alert('New Teacher Created');location='../manageTeacher.php';</script>";
			} else {
				echo "<script>alert('Error);location='../manageTeacher.php';</script>";
			}
		}
	}


	if($action == 'delete'){
		$id = test_input($_GET['id']);
		$id = mysqli_real_escape_string($mysqli,$id);

        $result = $mysqli->query("DELETE FROM tbteacher WHERE TEACHER_ID =  $id") or die($mysqli->error);
        
		if ($result === TRUE) {
        	echo "<script>alert('This Teacher has been Deleted');location='../manageTeacher.php';</script>";
		} else {
			echo "<script>alert('Error);location='../manageTeacher.php';</script>";
		}
	}
?>


