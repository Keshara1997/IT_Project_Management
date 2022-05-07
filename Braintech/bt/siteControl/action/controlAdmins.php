<?php
	require_once ("../../inc/connection.php");
	$action = test_input($_GET['action']);
  $action = mysqli_real_escape_string($mysqli,$action);
  $errors = array();

	if($action == 'add'){
		if(isset($_POST['save'])){

      $NAME                 = test_input($_POST['NAME']);
      $USER_NAME            = test_input($_POST['USER_NAME']);
      $PASSWORD             = test_input(sha1($_POST['PASSWORD']));

       $NAME = mysqli_real_escape_string($mysqli,$NAME);
       $USER_NAME = mysqli_real_escape_string($mysqli,$USER_NAME);
       $PASSWORD = mysqli_real_escape_string($mysqli,$PASSWORD);

      $result = $mysqli->query("INSERT into dbuser (USER_NAME,USER_USERNAME,USER_PASSWORD) 
      VALUES('$NAME','$USER_NAME','$PASSWORD')") or die($mysqli->error);
                
      if ($result === TRUE) {
         echo "<script>alert('Admin Added Successfully');location='../manageAdmin.php';</script> ";
      } else {
         echo "<script>alert('Error');location='../manageAdmin.php';</script> ";
      }
		}
  }


    if($action == 'delete'){
      $id = test_input($_GET['id']);
      $id = mysqli_real_escape_string($mysqli,$id);

      $result = $mysqli->query("DELETE FROM dbuser WHERE USER_ID = $id") or die($mysqli->error);
           
      if ($result === TRUE) {     
        echo "<script>alert('Deleted');location='../manageAdmin.php';</script> "; 
      } else {
         echo "<script>alert('Error');location='../manageAdmin.php';</script> ";
      }   
    }


    if($action == 'edit'){
		  if(isset($_POST['save'])){

        $id                   = test_input($_POST['USER_ID']);
        $NAME                 = test_input($_POST['NAME']);
        $USER_NAME            = test_input($_POST['USER_NAME']);
        $PASSWORD             = test_input(sha1($_POST['PASSWORD']));

        $id = mysqli_real_escape_string($mysqli,$id);
        $NAME = mysqli_real_escape_string($mysqli,$NAME);
        $USER_NAME = mysqli_real_escape_string($mysqli,$USER_NAME);
        $PASSWORD = mysqli_real_escape_string($mysqli,$PASSWORD);

        $result = $mysqli->query("UPDATE dbuser SET USER_NAME='$NAME', USER_USERNAME='$USER_NAME', USER_PASSWORD='$PASSWORD' WHERE USER_ID = $id") or die($mysqli->error);
       
        if ($result === TRUE) {       
          echo "<script>alert('Updated');location='../manageAdmin.php';</script> ";
        } else {
          echo "<script>alert('Error');location='../manageAdmin.php';</script> ";
        }
            
		  }
    }
?>






