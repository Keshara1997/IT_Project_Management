<?php
 	require_once ("../../include/initialize.php");
    require_once ("../inc/redirectA.php");
    require_once ("../../include/connection.php");

    if(
        !isset($_GET['action']) ||
        !isset($_POST['STID']) ||
        !isset($_POST['CLASS'])
    ){
        echo "<script>location='../register.php?status=error';</script>";
    }else{
        $action = mysqli_real_escape_string($mysqli,test_input($_GET['action']));
        $STID = mysqli_real_escape_string($mysqli,test_input($_POST['STID']));
        $CLASS = mysqli_real_escape_string($mysqli,test_input($_POST['CLASS']));

        $result = $mysqli->query("SELECT * FROM tbcourse WHERE CID = $CLASS LIMIT 1") or die($mysqli->error);
        while ($row = $result->fetch_assoc()):
            $xyz = 1;
        endwhile;
                       
        $result = $mysqli->query("SELECT * FROM tblstudent WHERE StudentID = '$STID' LIMIT 1") or die($mysqli->error);
        while ($row = $result->fetch_assoc()):
            $abc = 1;
        endwhile;
 

        if(
            $action == 'Add' &&
            isset($abc) &&
            isset($xyz)
        ){
     

            $result = $mysqli->query("INSERT into studentcourses (STID,CID,ACTIVE_ST,ACTIVE_DATE) 
            VALUES('$STID','$CLASS','ACTIVE','0')") or die($mysqli->error);

            if($result === TRUE){
                echo "<script>location='../register.php?status=success';</script>";
            }else{
                echo "<script>location='../register.php?status=error';</script>";
            }
        }else{
            echo "<script>location='../register.php?status=error';</script>";
        }

    }


?>