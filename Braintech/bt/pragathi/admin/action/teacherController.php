<?php
 	require_once ("../../include/initialize.php");
	 require_once ("../inc/redirect.php");
	require_once ("../../include/connection.php");
	$action = $_GET['action'];

	if($action == 'add'){
		if(isset($_POST['save'])){

            $NAME = ($_POST['name']);
            $SUBJECT = ($_POST['subject']);
            $NIC = ($_POST['NIC']);
            $AGE = ($_POST['age']);
            $USER_NAME = ($_POST['user_email']);
			$USER_PASS = sha1($_POST['user_pass']);
			
            $ACTIVE = 'ACTIVE';
			

			$mysqli->query("INSERT into tbteacher (TEACHER_NAME,SUBJECT,NIC_NO,AGE,TEACHER_USER_NAME,TEACHER_PASSWORD,ACTIVE) 
			VALUES('$NAME','$SUBJECT','$NIC','$AGE','$USER_NAME','$USER_PASS','$ACTIVE')") or die($mysqli->error);

			?>    
				
			<script>
				alert("New Teacher Created");
				location='../manageTeacher.php';
			</script> 

			<?php 
		}
	}


	if($action == 'delete'){
		$id = $_GET['id'];
        $result = $mysqli->query("DELETE FROM tbteacher WHERE TEACHER_ID =  $id") or die($mysqli->error);
        
        echo "<script>alert('This Teacher has been Deleted');location='../manageTeacher.php';</script>";
	}
?>


