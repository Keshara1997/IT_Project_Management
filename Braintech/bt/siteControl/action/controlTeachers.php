<?php
	require_once ("../../inc/connection.php");
	$action = test_input($_GET['action']);
  $action = mysqli_real_escape_string($mysqli,$action);
    $errors = array();

	if($action == 'add'){
		if(isset($_POST['save'])){

            

                $TEACHER_IMG = $_FILES['TEACHER_IMG']['name'];
                $TEACHER_IMG_TEMP = $_FILES['TEACHER_IMG']['tmp_name'];

                $folder1 = '../../uploads/teacher';

                move_uploaded_file($TEACHER_IMG_TEMP, $folder1.$TEACHER_IMG);

                $FULL_NAME          = test_input($_POST['FULL_NAME']);
                $SUBJECT            = test_input($_POST['SUBJECT']);
                $FACEBOOK_LINK      = test_input($_POST['FACEBOOK_LINK']);
                $TWITTER_LINK       = test_input($_POST['TWITTER_LINK']);

                $TEACHER_IMG = mysqli_real_escape_string($mysqli,$TEACHER_IMG);
                $FULL_NAME = mysqli_real_escape_string($mysqli,$FULL_NAME);
                $SUBJECT = mysqli_real_escape_string($mysqli,$SUBJECT);
                $FACEBOOK_LINK = mysqli_real_escape_string($mysqli,$FACEBOOK_LINK);
                $TWITTER_LINK = mysqli_real_escape_string($mysqli,$TWITTER_LINK);

                $result = $mysqli->query("INSERT into dbteacher (TEACHER_NAME,SUBJECT,TEACHER_IMG,FACEBOOK_LINK,TWITTER_LINK) 
                VALUES('$FULL_NAME','$SUBJECT','$TEACHER_IMG','$FACEBOOK_LINK','$TWITTER_LINK')") or die($mysqli->error);
                
                if ($result === TRUE) {
                 echo "<script>alert('New Teacher Added Successfully');location='../manageTeacher.php';</script> ";
                } else  {
                  echo "<script>alert('Error');location='../manageTeacher.php';</script> ";
                }
            
          
	
		}
    }


        
    if($action == 'delete'){
   

        $id = test_input($_GET['id']);
        $id = mysqli_real_escape_string($mysqli,$id);

        $result = $mysqli->query("DELETE FROM dbteacher WHERE TEACHER_ID = $id") or die($mysqli->error);

        if ($result === TRUE) {
          echo "<script>alert('Deleted');location='../manageTeacher.php';</script> ";
         } else  {
           echo "<script>alert('Error');location='../manageTeacher.php';</script> ";
         }   
	
    }


    if($action == 'edit'){
		if(isset($_POST['save'])){

            
                $id                 = test_input($_POST['TEACHER_ID']);
                $FULL_NAME          = test_input($_POST['FULL_NAME']);
                $SUBJECT            = test_input($_POST['SUBJECT']);
                $FACEBOOK_LINK      = test_input($_POST['FACEBOOK_LINK']);
                $TWITTER_LINK       = test_input($_POST['TWITTER_LINK']);

                $id = mysqli_real_escape_string($mysqli,$id);
                $FULL_NAME = mysqli_real_escape_string($mysqli,$FULL_NAME);
                $SUBJECT = mysqli_real_escape_string($mysqli,$SUBJECT);
                $FACEBOOK_LINK = mysqli_real_escape_string($mysqli,$FACEBOOK_LINK);
                $TWITTER_LINK = mysqli_real_escape_string($mysqli,$TWITTER_LINK);

                $result = $mysqli->query("UPDATE dbteacher SET TEACHER_NAME='$FULL_NAME', SUBJECT='$SUBJECT', FACEBOOK_LINK='$FACEBOOK_LINK', TWITTER_LINK='$TWITTER_LINK' WHERE TEACHER_ID = $id") or die($mysqli->error);
                

                if ($result === TRUE) {
                  echo "<script>alert('Updated');location='../manageTeacher.php';</script> ";
                 } else  {
                   echo "<script>alert('Error');location='../manageTeacher.php';</script> ";
                 } 
		}
    }
?>


