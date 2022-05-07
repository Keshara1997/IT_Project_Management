<?php

require_once ("../../include/initialize.php");
require_once ("../inc/redirectT.php");
require_once ("../../include/connection.php");

	$action =  test_input($_GET['action']); 
	$action = mysqli_real_escape_string($mysqli,$action);

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

				$lesson = test_input($_POST['Lesson']);
				$title = test_input($_POST['title']);
				$CID = test_input($_SESSION['CID']);
				$filename = test_input($filename);
				$lesson = mysqli_real_escape_string($mysqli,$lesson);
				$title = mysqli_real_escape_string($mysqli,$title);
				$CID = mysqli_real_escape_string($mysqli,$CID);
				$filename = mysqli_real_escape_string($mysqli,$filename);

				$result = $mysqli->query("INSERT into exercise (CID,Lesson,Title,FilePath) 
				VALUES('$CID','$lesson','$title','$filename')") or die($mysqli->error);

				if($result === TRUE){
					echo "<script>alert('A new Exercise was Placed');location='../manageExercisesT.php';</script> ";
				} else {
					echo "<script>alert('Error');location='../manageExercisesT.php';</script>";
				}

			}
		}
	}


	if($action == 'delete'){
		$id = test_input($_GET['id']);
		$id = mysqli_real_escape_string($mysqli,$id);

		$result = $mysqli->query("DELETE FROM exercise WHERE ExId =  $id") or die($mysqli->error);

		if($result === TRUE){
			echo "<script>alert('Exercise was Deleted');location='../manageExercisesT.php';</script> ";
		} else {
			echo "<script>alert('Error');location='../manageExercisesT.php';</script>";
		}
	
	}
?>

