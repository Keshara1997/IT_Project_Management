<?php
    	require_once ("../../include/initialize.php");
		require_once ("../inc/redirectT.php");
	require_once ("../../include/connection.php");
	$action = $_GET['action'];

	if($action == 'add'){
		if(isset($_POST['save'])){

			$Title = ($_POST['Title']);
            $Ann = ($_POST['Ann']);
            $CID = $_SESSION['CID'];

			$mysqli->query("INSERT into announcement (CID,TITLE,ANNOUNCEMENT) 
			VALUES('$CID','$Title','$Ann')") or die($mysqli->error);

			   
				
			echo "<script>alert('The Announcement was Successfully Sent');location='../dashboardT.php';</script>";

		
		}
	}


	if($action == 'delete'){
        $id = $_GET['id'];
        $CID = $_SESSION['CID'];
		$result = $mysqli->query("DELETE FROM announcement WHERE CID =  $CID AND AID = $id") or die($mysqli->error);

		echo "<script>alert('Announcement has been Deleted!');location='../dashboardT.php';</script>";
	}
?>


