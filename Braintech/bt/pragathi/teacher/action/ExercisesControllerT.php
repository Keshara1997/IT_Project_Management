<?php

require_once ("../../include/initialize.php");
require_once ("../inc/redirectT.php");
	require_once ("../../include/connection.php");
	$action = $_GET['action']; 

	if($action == 'add'){
		if(isset($_POST['save'])){

			$fileType = $_FILES['file']['type'];
				if($fileType != "application/pdf"){
					echo "<script>alert('Your File Format does not match. You can upload PDF Only.');</script>";
					redirect("../addExercisesT.php");
				}else{

					$filename = $_FILES['file']['name'];
					$filetmpname = $_FILES['file']['tmp_name'];
		
					$folder = '../../admin/action/exercises/';

					move_uploaded_file($filetmpname, $folder.$filename);

					$lesson = ($_POST['Lesson']);
					$title = ($_POST['title']);
					$CID = $_SESSION['CID'];
			
					

					$mysqli->query("INSERT into exercise (CID,Lesson,Title,FilePath) 
					VALUES('$CID','$lesson','$title','$filename')") or die($mysqli->error);

					echo "<script>alert('A new Exercise was Placed');location='../manageExercisesT.php';</script> ";

				}
		}
	}


	if($action == 'delete'){
		$id = $_GET['id'];
		$result = $mysqli->query("DELETE FROM exercise WHERE ExId =  $id") or die($mysqli->error);

		echo "<script>alert('Exercise was Deleted');location='../manageExercisesT.php';</script> ";
	}
?>

