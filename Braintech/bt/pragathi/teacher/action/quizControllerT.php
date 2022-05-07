<?php
 	require_once ("../../include/initialize.php");
	 require_once ("../inc/redirectT.php");
	require_once ("../../include/connection.php");
	$action = $_GET['action'];

	if($action == 'add'){
		if(isset($_POST['save'])){

			$Title = ($_POST['Title']);
            $Link = ($_POST['Link']);
            $CID = $_SESSION['CID'];

			$mysqli->query("INSERT into tbquiz (CID,TITLE,LINK) 
			VALUES('$CID','$Title','$Link')") or die($mysqli->error);

			   
				
			echo "<script>alert('Your Quiz link has been Placed. You can now get quiz through web site.');location='../dashboardT.php';</script>";

		
		}
	}


	if($action == 'delete'){
        $id = $_GET['id'];
        $CID = $_SESSION['CID'];
		$result = $mysqli->query("DELETE FROM tbquiz WHERE CID =  $CID AND QID = $id") or die($mysqli->error);
	}
?>
<script>
    
    alert("Quiz End");
    location='../dashboardT.php';
    
</script>

