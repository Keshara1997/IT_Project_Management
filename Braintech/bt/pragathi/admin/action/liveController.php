<?php
 	require_once ("../../include/initialize.php");
	 require_once ("../inc/redirect.php");
	require_once ("../../include/connection.php");
	$action = $_GET['action'];

	if($action == 'add'){
		if(isset($_POST['save'])){

			$Title = ($_POST['Title']);
            $Link = ($_POST['Link']);
            $CID = $_SESSION['CID'];

			$mysqli->query("INSERT into tblive (CID,TITLE,LINK) 
			VALUES('$CID','$Title','$Link')") or die($mysqli->error);

			   
				
			echo "<script>alert('Your invite link has been Placed. You can now join HOSTED ZOOM MEETING through web site.');location='../dashboard.php';</script>";

		
		}
	}


	if($action == 'delete'){
        $id = $_GET['id'];
        $CID = $_SESSION['CID'];
		$result = $mysqli->query("DELETE FROM tblive WHERE CID =  $CID AND LID = $id") or die($mysqli->error);
	}
?>
<script>
    
    alert("Meeting End");
    location='../dashboard.php';
    
</script>

