<?php
  	require_once ("../../include/initialize.php");
      require_once ("../inc/redirect.php");
    require_once ("../../include/connection.php");
    $action = $_GET['action'];

    if($action == 'add'){

			$TEACHER_ID = ($_GET['id']);
            $CID = $_SESSION['CID'];

			$mysqli->query("INSERT into courseaccess (CID,TEACHER_ID) 
			VALUES('$CID','$TEACHER_ID')") or die($mysqli->error);

			echo "<script>alert('Added this Teacher');location='../manageUser.php';</script>";
    }


    if($action == 'delete'){
        $id = $_GET['id'];
        $CID = $_SESSION['CID'];
        $result = $mysqli->query("DELETE FROM courseaccess WHERE CID =  $CID AND TEACHER_ID = $id") or die($mysqli->error);
        echo "<script>alert('Removed');location='../manageUser.php';</script>";
	}
		
?>



