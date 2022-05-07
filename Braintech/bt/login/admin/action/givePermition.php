<?php
  	require_once ("../../include/initialize.php");
    require_once ("../inc/redirect.php");
    require_once ("../../include/connection.php");

    $action = test_input($_GET['action']);
    $action = mysqli_real_escape_string($mysqli,$action);

    if($action == 'add'){

			$TEACHER_ID = test_input($_GET['id']);
            $CID = test_input($_SESSION['CID']);

            $TEACHER_ID = mysqli_real_escape_string($mysqli,$TEACHER_ID);
            $CID = mysqli_real_escape_string($mysqli,$CID);

			$result = $mysqli->query("INSERT into courseaccess (CID,TEACHER_ID) 
			VALUES('$CID','$TEACHER_ID')") or die($mysqli->error);

            if ($result === TRUE) {
			    echo "<script>alert('Added this Teacher');location='../manageUser.php';</script>";
            } else {
                echo "<script>alert('Error');location='../manageUser.php';</script>";
            }
    }


    if($action == 'delete'){
        $id = test_input($_GET['id']);
        $CID = test_input($_SESSION['CID']);

        $CID = mysqli_real_escape_string($mysqli,$CID);

        $result = $mysqli->query("DELETE FROM courseaccess WHERE CID =  $CID AND TEACHER_ID = $id") or die($mysqli->error);

        if ($result === TRUE) {
            echo "<script>alert('Removed');location='../manageUser.php';</script>";
        } else {
            echo "<script>alert('Error');location='../manageUser.php';</script>";
        }
	}
		
?>



