<?php
  	require_once ("../../include/initialize.php");
      require_once ("../inc/redirect.php");
    require_once ("../../include/connection.php");
    $action = $_GET['action'];

    if($action == 'register'){
        $STUDENT_ID = ($_GET['STID']);
        $Class = ($_GET['class']);
        $result = $mysqli->query("SELECT * FROM tblstudent WHERE STID = '$STUDENT_ID' LIMIT 1") or die($mysqli->error);
        while ($row = $result->fetch_assoc()):
            $STID = $row['StudentID'];
        endwhile;

        $mysqli->query("INSERT into studentcourses (STID,CID,ACTIVE_ST) 
        VALUES('$STID','$Class','ACTIVE')") or die($mysqli->error);

        echo "<script>alert('Register Success');location='../addStudent.php';</script>";
    }

    if($action == 'add'){

			$STUDENT_ID = ($_GET['id']);
            $CID = $_SESSION['CID'];

			$mysqli->query("INSERT into studentcourses (STID,CID,ACTIVE_ST) 
			VALUES('$STUDENT_ID','$CID','ACTIVE')") or die($mysqli->error);

			echo "<script>alert('Added this Student');location='../add_Student_course.php';</script>";
    }


    if($action == 'delete'){
        $id = $_GET['id'];
        $CID = $_SESSION['CID'];
        $result = $mysqli->query("DELETE FROM studentcourses WHERE CID =  $CID AND STID = $id") or die($mysqli->error);
        echo "<script>alert('Removed');location='../manage_Student_course.php';</script>";
    }
    
    if($action == 'addAll'){
        if(!isset ($_POST['check'])){
            echo "<script>alert('Not Selected');location='../add_Student_course.php';</script>";
        }
        if(isset($_POST['save'])){
            $CID = $_SESSION['CID'];
            $chkarr = $_POST['check'];
            foreach($chkarr as $id){
                $mysqli->query("INSERT into studentcourses (STID,CID,ACTIVE_ST) 
                VALUES('$id','$CID','ACTIVE')") or die($mysqli->error);
                
                echo "<script>alert('Added this Students');location='../add_Student_course.php';</script>";
            }
        }

        
}
		
?>



