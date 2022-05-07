<?php
 	require_once ("../../include/initialize.php");
	 require_once ("../inc/redirectT.php");
	require_once ("../../include/connection.php");
	$action = test_input($_GET['action']);
	$action = mysqli_real_escape_string($mysqli,$action);

	if($action == 'add'){
		if(isset($_POST['save'])){

			$COURSENAME = test_input($_POST['COURSENAME']);
			$COURSENAME = mysqli_real_escape_string($mysqli,$COURSENAME);

			$result = $mysqli->query("INSERT into tbcourse (COURSE_NAME) 
			VALUES('$COURSENAME')") or die($mysqli->error);

			if($result === TRUE){
				echo "<script>alert('The Classroom was set up Correctly');location='../courseSelectorT.php';</script>";
			} else {
				echo "<script>alert('Error');location='../courseSelectorT.php';</script>";
			}

		}
	}


	if($action == 'delete'){
		$id = test_input($_GET['id']);
		$id = mysqli_real_escape_string($mysqli,$id);

		$result = $mysqli->query("DELETE FROM tbcourse WHERE CID =  $id") or die($mysqli->error);

		if($result === TRUE){
			echo "<script>alert('The Classroom has been Deleted');location='../courseSelectorT.php';</script>";
		} else {
			echo "<script>alert('Error');location='../courseSelectorT.php';</script>";
		}

	}
?>


