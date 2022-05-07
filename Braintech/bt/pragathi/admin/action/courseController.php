<?php
	require_once ("../../include/connection.php");
	require_once ("../../include/initialize.php");
    require_once ("../inc/redirect.php");
	$action = $_GET['action'];

	if($action == 'add'){
		if(isset($_POST['save'])){

			$COURSENAME = ($_POST['COURSENAME']);
			$CATEGORY = ($_POST['CATEGORY']);
			

			$mysqli->query("INSERT into tbcourse (COURSE_NAME,CATEGORY) 
			VALUES('$COURSENAME','$CATEGORY')") or die($mysqli->error);
			echo "<script>alert('The Classroom was set up Correctly');location='../courseSelector.php';</script>";
	 
		}
	}


	if($action == 'delete'){
				
				$id = $_GET['id'];
				$result = $mysqli->query("DELETE FROM tbcourse WHERE CID =  $id") or die($mysqli->error);
				echo "<script>alert('The Classroom has been Deleted');location='../courseSelector.php';</script>";

	}
?>

    
    
    
    


