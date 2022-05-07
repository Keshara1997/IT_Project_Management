<?php

	require_once ("../../include/initialize.php");
	require_once ("../inc/redirect.php");
	require_once ("../../include/connection.php");

	$action = test_input($_GET['action']);
    $action = mysqli_real_escape_string($mysqli,$action); 

	if($action == 'add'){
		if(isset($_POST['save'])){

					$CHAPTER_NAME       =    test_input($_POST['CHAPTER_NAME']);
                    $CHAPTER_LESSON     =    test_input($_POST['CHAPTER_LESSON']);
                    $DATE               =    test_input($_POST['DATE']);
					$CID                =    test_input($_SESSION['CID']);

					$CHAPTER_NAME = mysqli_real_escape_string($mysqli,$CHAPTER_NAME);
					$CHAPTER_LESSON = mysqli_real_escape_string($mysqli,$CHAPTER_LESSON);
					$DATE = mysqli_real_escape_string($mysqli,$DATE);
					$CID = mysqli_real_escape_string($mysqli,$CID);
			
					
					$result = $mysqli->query("INSERT into tbtimetable (CID,CHAPTERNAME,CHAPTERLESSON,DATE) 
					VALUES('$CID','$CHAPTER_NAME','$CHAPTER_LESSON','$DATE')") or die($mysqli->error);

					if ($result === TRUE) {
						echo "<script>alert('Set the Time');location='../manageTimetable.php';</script>";
					} else {
						echo "<script>alert('Error);location='../manageTimetable.php';</script>";
					}

			
		}
	}


	if($action == 'delete'){
		$id = test_input($_GET['id']);
		$CID = test_input($_SESSION['CID']);
		$id = mysqli_real_escape_string($mysqli,$id);
		$CID = mysqli_real_escape_string($mysqli,$CID);

		$result = $mysqli->query("DELETE FROM tbtimetable WHERE TTID =  $id AND CID = $CID") or die($mysqli->error);

		if ($result === TRUE) {
			echo "<script>alert('Time Removed');location='../manageTimetable.php';</script>";
		} else {
			echo "<script>alert('Error);location='../manageTimetable.php';</script>";
		}
	} 



	if($action == 'edit'){
		if(isset($_POST['save'])){

			$TTID				=	 test_input($_POST['ID']);
			$CHAPTER_NAME       =    test_input($_POST['CHAPTER_NAME']);
			$CHAPTER_LESSON     =    test_input($_POST['CHAPTER_LESSON']);
			$DATE               =    test_input($_POST['DATE']);
			$CID                =    test_input($_SESSION['CID']);

			$TTID = mysqli_real_escape_string($mysqli,$TTID);
			$CHAPTER_NAME = mysqli_real_escape_string($mysqli,$CHAPTER_NAME);
			$CHAPTER_LESSON = mysqli_real_escape_string($mysqli,$CHAPTER_LESSON);
			$DATE = mysqli_real_escape_string($mysqli,$DATE);
			$CID = mysqli_real_escape_string($mysqli,$CID);
							
			$result = $mysqli->query("UPDATE tbtimetable SET CHAPTERNAME='$CHAPTER_NAME', CHAPTERLESSON='$CHAPTER_LESSON', DATE='$DATE' WHERE TTID = $TTID AND CID = $CID") 
			or die($mysqli->error);

			if ($result === TRUE) {
				echo "<script>alert('Update Time');location='../manageTimetable.php';</script>";
			} else {
				echo "<script>alert('Error);location='../manageTimetable.php';</script>";
			}		
		}
	}


?>

