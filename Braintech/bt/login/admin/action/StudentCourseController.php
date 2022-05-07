<?php
  	require_once ("../../include/initialize.php");
    require_once ("../inc/redirect.php");
    require_once ("../../include/connection.php");

    $action = test_input($_GET['action']);
    $action = mysqli_real_escape_string($mysqli,$action);

    if($action == 'add'){

			$STUDENT_ID = test_input($_GET['id']);
            $CID = test_input($_SESSION['CID']);

            $STUDENT_ID = mysqli_real_escape_string($mysqli,$STUDENT_ID);
            $CID = mysqli_real_escape_string($mysqli,$CID);

			$result = $mysqli->query("INSERT into studentcourses (STID,CID,ACTIVE_ST) 
			VALUES('$STUDENT_ID','$CID','ACTIVE')") or die($mysqli->error);

            if ($result === TRUE) {
			    echo "<script>alert('Added this Student');location='../add_Student_course.php';</script>";
            } else {
                echo "<script>alert('Error');location='../add_Student_course.php';</script>";
            }
    }


    if($action == 'delete'){
        $id = test_input($_GET['id']);
        $CID = test_input($_SESSION['CID']);

        $id = mysqli_real_escape_string($mysqli,$id);
        $CID = mysqli_real_escape_string($mysqli,$CID);

        $result = $mysqli->query("DELETE FROM studentcourses WHERE CID =  $CID AND STID = $id") or die($mysqli->error);

        if ($result === TRUE) {
            echo "<script>alert('Removed');location='../manage_Student_course.php';</script>";
        } else {
            echo "<script>alert('Error');location='../manage_Student_course.php';</script>";
        }
    }
    
    if($action == 'addAll'){
        if(!isset ($_POST['check'])){
            echo "<script>alert('Not Selected');location='../add_Student_course.php';</script>";
        }
        if(isset($_POST['save'])){
            $CID = test_input($_SESSION['CID']);
            $chkarr = $_POST['check'];

            $CID = mysqli_real_escape_string($mysqli,$CID);

            foreach($chkarr as $id){
                $mysqli->query("INSERT into studentcourses (STID,CID,ACTIVE_ST) 
                VALUES('$id','$CID','ACTIVE')") or die($mysqli->error);
                
                echo "<script>alert('Added this Students');location='../add_Student_course.php';</script>";
            }
        }

        
}
		
?>



