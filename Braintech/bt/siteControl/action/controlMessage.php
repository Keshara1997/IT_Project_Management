<?php
	require_once ("../../inc/connection.php");
	$action = test_input($_GET['action']);
    $action = mysqli_real_escape_string($mysqli,$action);
    $errors = array();


    if($action == 'delete'){
   

        $id = test_input($_GET['id']);
        $id = mysqli_real_escape_string($mysqli,$id);

        $result = $mysqli->query("DELETE FROM dbmessage WHERE M_ID = $id") or die($mysqli->error);
                
        if ($result === TRUE) {
            echo "<script>alert('Deleted');location='../messages.php';</script> "; 
        } else {
            echo "<script>alert('Error');location='../messages.php';</script> "; 
        }    
	
    }
  
?>






