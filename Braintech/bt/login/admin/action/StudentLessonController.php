<?php
  	require_once ("../../include/initialize.php");
    require_once ("../inc/redirect.php");
    require_once ("../../include/connection.php");

    $action = test_input($_GET['action']);
    $action = mysqli_real_escape_string($mysqli,$action);
    $LessonID = test_input($_GET['LessonID']);
    $LessonID = mysqli_real_escape_string($mysqli,$LessonID);

    if($action == 'add'){
            
			$STUDENT_ID = test_input($_GET['id']);
            $CID = test_input($_SESSION['CID']);
            $LessonID = test_input($_GET['LessonID']);

            $STUDENT_ID = mysqli_real_escape_string($mysqli,$STUDENT_ID);
            $CID = mysqli_real_escape_string($mysqli,$CID);
            $LessonID = mysqli_real_escape_string($mysqli,$LessonID);
            $CHECK = 0;

            $results = $mysqli->query("SELECT * FROM tblessonpermission WHERE LPSTID = $STUDENT_ID AND LPCID = $CID AND LPLID = $LessonID") or die($mysqli->error);
            while ($row = $results->fetch_assoc()):
                $CHECK = 1;
            endwhile;

            if($CHECK == 0){
                $result = $mysqli->query("INSERT into tblessonpermission (LPCID,LPLID,LPSTID) 
                VALUES('$CID','$LessonID','$STUDENT_ID')") or die($mysqli->error);

                if ($result === TRUE) {
                    echo "<script>alert('Gave Permission this Student');location='../LessonPermission.php?id=$LessonID';</script>";
                } else {
                    echo "<script>alert('Error');location='../LessonPermission.php?id=$LessonID';</script>";
                }
            }else{
                echo "<script>alert('Already Gave Permission this Student');location='../LessonPermission.php?id=$LessonID';</script>";
            }
    }


    if($action == 'delete'){
        $id = test_input($_GET['id']);
        $CID = test_input($_SESSION['CID']);
        $LessonID = test_input($_GET['LessonID']);  

        $id = mysqli_real_escape_string($mysqli,$id);
        $CID = mysqli_real_escape_string($mysqli,$CID);
        $LessonID = mysqli_real_escape_string($mysqli,$LessonID);  

        $result = $mysqli->query("DELETE FROM tblessonpermission WHERE LPSTID = $id AND LPLID = $LessonID AND LPCID = $CID") or die($mysqli->error);

        if ($result === TRUE) {
            echo "<script>alert('Removed from the Lesson Access Student List');location='../LessonPermission.php?id=$LessonID';</script>";
        } else {
            echo "<script>alert('Error');location=''../LessonPermission.php?id=$LessonID';</script>";
        }
    }
    
    if($action == 'addAll'){
        if(!isset ($_POST['check'])){
            echo "<script>alert('Error');location='../LessonPermission.php?id=$LessonID';</script>";
        }
        if(isset($_POST['save'])){
            $CID = test_input($_SESSION['CID']);
            $LessonID = test_input($_GET['LessonID']);
            $CID = mysqli_real_escape_string($mysqli,$CID);
            $LessonID = mysqli_real_escape_string($mysqli,$LessonID);
            $chkarr = $_POST['check'];


            foreach($chkarr as $id){

                $mysqli->query("INSERT into  tblessonpermission (LPCID,LPLID,LPSTID) 
                VALUES('$CID','$LessonID','$id')") or die($mysqli->error);
                
                echo "<script>alert('Gave Permission Selected Students');location='../LessonPermission.php?id=$LessonID';</script>";
            }
        }else{
            echo "<script>alert('Error');location='../LessonPermission.php?id=$LessonID';</script>";
        }
        
    }


    if($action == 'ALL'){

        $CID = test_input($_SESSION['CID']);
        $LessonID = test_input($_GET['LessonID']);
        $CID = mysqli_real_escape_string($mysqli,$CID);
        $LessonID = mysqli_real_escape_string($mysqli,$LessonID);

        $query = "SELECT * FROM  studentcourses tbsc, tblstudent tbs WHERE tbsc.STID = tbs.StudentID AND tbsc.CID = '$CID'";
        $mydb->setQuery($query);
        $cur = $mydb->loadResultList();

        foreach ($cur as $result) {
            $STUDENT_ID = $result->StudentID;
            $CHECK = 0;
            $results = $mysqli->query("SELECT * FROM tblessonpermission WHERE LPSTID = $STUDENT_ID AND LPCID = $CID AND LPLID = $LessonID") or die($mysqli->error);
            while ($row = $results->fetch_assoc()):
                $CHECK = 1;
            endwhile;

            if($CHECK == 0){
                $result = $mysqli->query("INSERT into tblessonpermission (LPCID,LPLID,LPSTID) 
                VALUES('$CID','$LessonID','$STUDENT_ID')") or die($mysqli->error);
            }
        }
        echo "<script>alert('Gave Permission this Student');location='../manageLessonVideo.php';</script>";

    }



    if($action == 'ALLREMOVE'){

        $CID = test_input($_SESSION['CID']);
        $LessonID = test_input($_GET['LessonID']);
        $CID = mysqli_real_escape_string($mysqli,$CID);
        $LessonID = mysqli_real_escape_string($mysqli,$LessonID);

        $query = "SELECT * FROM  studentcourses tbsc, tblstudent tbs WHERE tbsc.STID = tbs.StudentID AND tbsc.CID = '$CID'";
        $mydb->setQuery($query);
        $cur = $mydb->loadResultList();

        foreach ($cur as $result) {
            $STUDENT_ID = $result->StudentID;
            $CHECK = 0;
            $result = $mysqli->query("DELETE FROM tblessonpermission WHERE LPSTID = $STUDENT_ID AND LPLID = $LessonID AND LPCID = $CID") or die($mysqli->error);

        }
        echo "<script>alert('Removed All');location='../manageLessonVideo.php';</script>";



    }
		
?>



