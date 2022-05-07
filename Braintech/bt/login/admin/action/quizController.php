<?php
 	require_once ("../../include/initialize.php");
	require_once ("../inc/redirect.php");
	require_once ("../../include/connection.php");

	$action = test_input($_GET['action']);
    $action = mysqli_real_escape_string($mysqli,$action);

	if($action == 'add'){
		if(isset($_POST['save'])){

			$Title = test_input($_POST['Title']);
            $Link = test_input($_POST['Link']);
            $CID = test_input($_SESSION['CID']);

			$Title = mysqli_real_escape_string($mysqli,$Title);
			$Link = mysqli_real_escape_string($mysqli,$Link);
			$CID = mysqli_real_escape_string($mysqli,$CID);

			$result = $mysqli->query("INSERT into tbquiz (CID,TITLE,LINK) 
			VALUES('$CID','$Title','$Link')") or die($mysqli->error);

			if ($result === TRUE) {
				echo "<script>alert('Your Quiz link has been Placed. You can now get quiz through web site.');location='../dashboard.php';</script>";
			} else {
				echo "<script>alert('Error);location='../dashboard.php';</script>";
			}
		
		}
	}


	if($action == 'delete'){
        $id = test_input($_GET['id']);
        $CID = test_input($_SESSION['CID']);

		$id = mysqli_real_escape_string($mysqli,$id);
		$CID = mysqli_real_escape_string($mysqli,$CID);

		$result = $mysqli->query("DELETE FROM tbquiz WHERE CID =  $CID AND QID = $id") or die($mysqli->error);
		
		if ($result === TRUE) {
			echo "<script>alert('Quiz End');location='../dashboard.php';</script>";
		} else {
			echo "<script>alert('Error);location='../dashboard.php';</script>";
		}
	}
?>


