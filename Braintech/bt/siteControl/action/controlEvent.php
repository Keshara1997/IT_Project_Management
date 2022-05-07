<?php
	require_once ("../../inc/connection.php");
	$action = test_input($_GET['action']);
  $action = mysqli_real_escape_string($mysqli,$action);
    $errors = array();

	if($action == 'add'){
		if(isset($_POST['save'])){

            

                $EVENT_IMG = $_FILES['EVENT_IMG']['name'];
                $EVENT_IMG_TEMP = $_FILES['EVENT_IMG']['tmp_name'];

                $EVENT_IMG_02 = $_FILES['EVENT_IMG_02']['name'];
                $EVENT_IMG_02_TEMP = $_FILES['EVENT_IMG_02']['tmp_name'];

                $folder1 = '../../uploads/event';

                move_uploaded_file($EVENT_IMG_TEMP, $folder1.$EVENT_IMG);
                move_uploaded_file($EVENT_IMG_02_TEMP, $folder1.$EVENT_IMG_02);

                $EVENT_NAME         = test_input($_POST['EVENT_NAME']);
                $EVENT_DESCRIPTION  = test_input($_POST['EVENT_DESCRIPTION']);
                $LOCATION           = test_input($_POST['LOCATION']);
                $EVENT_DATE         = test_input($_POST['EVENT_DATE']);

                $EVENT_DESCRIPTION02         = test_input($_POST['EVENT_DESCRIPTION02']);
                $EVENT_DESCRIPTION03         = test_input($_POST['EVENT_DESCRIPTION03']);

                $EVENT_NAME = mysqli_real_escape_string($mysqli,$EVENT_NAME);
                $EVENT_DESCRIPTION = mysqli_real_escape_string($mysqli,$EVENT_DESCRIPTION);
                $LOCATION = mysqli_real_escape_string($mysqli,$LOCATION);
                $EVENT_DATE = mysqli_real_escape_string($mysqli,$EVENT_DATE);
                $EVENT_DESCRIPTION02 = mysqli_real_escape_string($mysqli,$EVENT_DESCRIPTION02);
                $EVENT_DESCRIPTION03 = mysqli_real_escape_string($mysqli,$EVENT_DESCRIPTION03);
                $EVENT_IMG_02 = mysqli_real_escape_string($mysqli,$EVENT_IMG_02);
                $EVENT_IMG = mysqli_real_escape_string($mysqli,$EVENT_IMG);

                $result = $mysqli->query(
                  "INSERT into dbevent (
                    EVENT_NAME,
                    EVENT_IMG,
                    DESCRIPTION,
                    LOCATION,
                    DATE,
                    IMAGE,
                    DESCRIPTION02,
                    DESCRIPTION03) 
                VALUES(
                  '$EVENT_NAME',
                  '$EVENT_IMG',
                  '$EVENT_DESCRIPTION',
                  '$LOCATION',
                  '$EVENT_DATE',
                  '$EVENT_IMG_02',
                  '$EVENT_DESCRIPTION02',
                  '$EVENT_DESCRIPTION03')"
                ) or die($mysqli->error);

                if ($result === TRUE) {
                  echo "<script>alert('New Event Added Successfully');location='../manageEvent.php';</script> ";
                } else {
                  echo "<script>alert('Error');location='../manageEvent.php';</script> ";
                }
                
                
            
          
	
		}
    }


    if($action == 'delete'){
   

        $id = test_input($_GET['id']);
        $id = mysqli_real_escape_string($mysqli,$id);

        $result = $mysqli->query("DELETE FROM dbevent WHERE EVENT_ID = $id") or die($mysqli->error);
               
        if ($result === TRUE) {
          echo "<script>alert('Deleted');location='../manageEvent.php';</script> ";
        } else {
          echo "<script>alert('Error');location='../manageEvent.php';</script> ";
        }     
	
    }


    if($action == 'edit'){
		if(isset($_POST['save'])){

            
                $id                 = test_input($_POST['EVENT_ID']);
                $EVENT_NAME         = test_input($_POST['EVENT_NAME']);
                $EVENT_DESCRIPTION  = test_input($_POST['EVENT_DESCRIPTION']);
                $EVENT_FROM_TIME    = test_input($_POST['EVENT_FROM_TIME']);
                $EVENT_TO_TIME      = test_input($_POST['EVENT_TO_TIME']);
                $LOCATION           = test_input($_POST['LOCATION']);
                $EVENT_DATE         = test_input($_POST['EVENT_DATE']);

                $id = mysqli_real_escape_string($mysqli,$id);
                $EVENT_NAME = mysqli_real_escape_string($mysqli,$EVENT_NAME);
                $EVENT_DESCRIPTION = mysqli_real_escape_string($mysqli,$EVENT_DESCRIPTION);
                $EVENT_FROM_TIME = mysqli_real_escape_string($mysqli,$EVENT_FROM_TIME);
                $EVENT_TO_TIME = mysqli_real_escape_string($mysqli,$EVENT_TO_TIME);
                $LOCATION = mysqli_real_escape_string($mysqli,$LOCATION);
                $EVENT_DATE = mysqli_real_escape_string($mysqli,$EVENT_DATE);

                $result = $mysqli->query("UPDATE dbevent SET EVENT_NAME='$EVENT_NAME', DESCRIPTION='$EVENT_DESCRIPTION', FROM_TIME='$EVENT_FROM_TIME', TO_TIME='$EVENT_TO_TIME',
                LOCATION='$LOCATION' , DATE='$EVENT_DATE' WHERE EVENT_ID = $id") or die($mysqli->error);
                
                if ($result === TRUE) {
                  echo "<script>alert('Updated');location='../manageEvent.php';</script> ";
                } else {
                  echo "<script>alert('Error');location='../manageEvent.php';</script> ";
                }
            
          
	
		}
    }
?>






