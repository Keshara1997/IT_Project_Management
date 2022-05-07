<?php
 	require_once ("../../include/initialize.php");
    require_once ("../inc/redirect.php");
	require_once ("../../include/connection.php");

	$action = $_GET['action'];

	if($action == 'add'){
		if(isset($_POST['save'])){

			$Title = test_input($_POST['Title']);
            $Ann = test_input($_POST['Ann']);
            $CID = test_input($_SESSION['CID']);

			$Title = mysqli_real_escape_string($mysqli,$Title);
			$Ann = mysqli_real_escape_string($mysqli,$Ann);
			$CID = mysqli_real_escape_string($mysqli,$CID);

			$result = $mysqli->query("INSERT into announcement (CID,TITLE,ANNOUNCEMENT) 
			VALUES('$CID','$Title','$Ann')") or die($mysqli->error);

			if ($result === TRUE) {
				echo "<script>alert('The Announcement was Successfully Sent');location='../dashboard.php';</script>";
			} else{
				echo "<script>alert('Error');location='../dashboard.php'</script>";
			}

		
		}
	}


	if($action == 'delete'){
        $id = $_GET['id'];
        $CID = $_SESSION['CID'];

		$id = mysqli_real_escape_string($mysqli,$id);
		$CID = mysqli_real_escape_string($mysqli,$CID);

		$result = $mysqli->query("DELETE FROM announcement WHERE CID =  $CID AND AID = $id") or die($mysqli->error);

		if ($result === TRUE) {
			echo "<script>alert('Announcement has been Deleted!');location='../dashboard.php'</script>";
		} else {
			echo "<script>alert('Error');location='../dashboard.php'</script>";
		}
	}


?>


