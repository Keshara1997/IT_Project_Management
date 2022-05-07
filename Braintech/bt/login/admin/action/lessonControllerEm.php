<?php
 	require_once ("../../include/initialize.php");
    require_once ("../inc/redirect.php");
	require_once ("../../include/connection.php");

	$action = $_GET['action'];

	if($action == 'add'){
		if(isset($_POST['save'])){

			$LessonChapter = test_input($_POST['LessonChapter']);
            $LessonTitle = test_input($_POST['LessonTitle']);
			$Category = test_input($_POST['Category']);
			$LINK = test_input($_POST['LINK']);
            $CID = test_input($_SESSION['CID']);

			$LessonChapter = mysqli_real_escape_string($mysqli,$LessonChapter);
			$LessonTitle = mysqli_real_escape_string($mysqli,$LessonTitle);
			$Category = mysqli_real_escape_string($mysqli,$Category);
			$LINK = mysqli_real_escape_string($mysqli,$LINK);
			$CID = mysqli_real_escape_string($mysqli,$CID);

			$result = $mysqli->query("INSERT into tbllessonnew (CID,LessonChapter,LessonTitle,FileLocation,Category) 
			VALUES('$CID','$LessonChapter','$LessonTitle','$LINK','Video')") or die($mysqli->error);

			if ($result === TRUE) {
				echo "<script>alert('The Video link was Successfully emberded');location='../manageLessonVideo.php';</script>";
			} else{
				echo "<script>alert('Error');location='../manageLessonVideo.php'</script>";
			}

		
		}
	}


	if($action == 'delete'){
        $id = $_GET['id'];
        $CID = $_SESSION['CID'];

		$id = mysqli_real_escape_string($mysqli,$id);
		$CID = mysqli_real_escape_string($mysqli,$CID);

		$result = $mysqli->query("DELETE FROM tbllessonnew WHERE CID =  $CID AND LessonID = $id") or die($mysqli->error);

		if ($result === TRUE) {
			echo "<script>alert('Video has been Deleted!');location='../manageLessonVideo.php'</script>";
		} else {
			echo "<script>alert('Error');location='../manageLessonVideo.php'</script>";
		}
	}


?>


