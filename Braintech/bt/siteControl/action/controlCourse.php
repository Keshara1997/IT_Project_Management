<?php
	require_once ("../../inc/connection.php");

	$action = $_GET['action'];
  $action = test_input($_GET['action']);
  $action = mysqli_real_escape_string($mysqli,$action);
  
  $errors = array();

	if($action == 'add'){
		if(isset($_POST['save'])){

                $HEADER_IMG = $_FILES['HEADER_IMG']['name'];
                $HEADER_IMG_TEMP = $_FILES['HEADER_IMG']['tmp_name'];
            
                $TEACHER_IMG = $_FILES['TEACHER_IMG']['name'];
                $TEACHER_IMG_TEMP = $_FILES['TEACHER_IMG']['tmp_name'];

                $folder1 = '../../uploads/course';
                $folder2 = '../../uploads/courseTeacher';

                move_uploaded_file($HEADER_IMG_TEMP, $folder1.$HEADER_IMG);
                move_uploaded_file($TEACHER_IMG_TEMP, $folder2.$TEACHER_IMG);

                $COURSE_NAME        = test_input($_POST['COURSE_NAME']);
                $COURSE_PRICE       = test_input($_POST['COURSE_PRICE']);
                $LECTURES           = test_input($_POST['LECTURES']);
                $DURATION           = test_input($_POST['DURATION']);
                $SKILL_LEVEL        = test_input($_POST['SKILL_LEVEL']);
                $LANGUAGE           = test_input($_POST['LANGUAGE']);
                $EXAMS              = test_input($_POST['EXAMS']);
                $ASSESSMENT         = test_input($_POST['ASSESSMENT']);
                $DESCRIPTION_01     = test_input($_POST['DESCRIPTION_01']);
                $DESCRIPTION_02     = test_input($_POST['DESCRIPTION_02']);
                $TEACHER_NAME       = test_input($_POST['TEACHER_NAME']);
                $TEACHER_CATEGORIES = test_input($_POST['TEACHER_CATEGORIES']);

                $COURSE_NAME = mysqli_real_escape_string($mysqli,$COURSE_NAME);
                $COURSE_PRICE = mysqli_real_escape_string($mysqli,$COURSE_PRICE);
                $LECTURES = mysqli_real_escape_string($mysqli,$LECTURES);
                $DURATION = mysqli_real_escape_string($mysqli,$DURATION);
                $SKILL_LEVEL = mysqli_real_escape_string($mysqli,$SKILL_LEVEL);
                $LANGUAGE = mysqli_real_escape_string($mysqli,$LANGUAGE);
                $EXAMS = mysqli_real_escape_string($mysqli,$EXAMS);
                $ASSESSMENT = mysqli_real_escape_string($mysqli,$ASSESSMENT);
                $DESCRIPTION_01 = mysqli_real_escape_string($mysqli,$DESCRIPTION_01);
                $DESCRIPTION_02 = mysqli_real_escape_string($mysqli,$DESCRIPTION_02);
                $TEACHER_NAME = mysqli_real_escape_string($mysqli,$TEACHER_NAME);
                $TEACHER_CATEGORIES = mysqli_real_escape_string($mysqli,$TEACHER_CATEGORIES);
                $HEADER_IMG = mysqli_real_escape_string($mysqli,$HEADER_IMG);

                $result = $mysqli->query("INSERT into dbcourse (COURSE_NAME,COURSE_PRICE,LECTURES,DURATION,SKILL_LEVEL,LANGUAGE,EXAMS,ASSESSMENT,HEADER_IMG,DESCRIPTION_1,DESCRIPTION_2,TEACHER_NAME,CATEGORIES,TEACHER_IMG) 
                VALUES('$COURSE_NAME','$COURSE_PRICE','$LECTURES','$DURATION','$SKILL_LEVEL','$LANGUAGE','$EXAMS','$ASSESSMENT','$HEADER_IMG','$DESCRIPTION_01','$DESCRIPTION_02','$TEACHER_NAME','$TEACHER_CATEGORIES','$TEACHER_IMG')") or die($mysqli->error);
                
                if ($result === TRUE) {
                  echo "<script>alert('New Course Created Successfully');location='../manageCourse.php';</script> ";
                } else {
                  echo "<script>alert('Error');location='../manageCourse.php';</script> ";
                }
            
          
	
		}
    }


    
    if($action == 'delete'){
   

        $id = test_input($_GET['id']);
        $id = mysqli_real_escape_string($mysqli,$id);

        $result = $mysqli->query("DELETE FROM dbcourse WHERE COURSE_ID = $id") or die($mysqli->error);
                
        if ($result === TRUE) {
          echo "<script>alert('Deleted');location='../manageCourse.php';</script> "; 
        } else {
          echo "<script>alert('Error');location='../manageCourse.php';</script> "; 
        }    
	
    }


    if($action == 'edit'){
		if(isset($_POST['save'])){

            
                $id                 = test_input($_POST['COURSE_ID']);
                $COURSE_NAME        = test_input($_POST['COURSE_NAME']);
                $COURSE_PRICE       = test_input($_POST['COURSE_PRICE']);
                $LECTURES           = test_input($_POST['LECTURES']);
                $DURATION           = test_input($_POST['DURATION']);
                $SKILL_LEVEL        = test_input($_POST['SKILL_LEVEL']);
                $LANGUAGE           = test_input($_POST['LANGUAGE']);
                $EXAMS              = test_input($_POST['EXAMS']);
                $ASSESSMENT         = test_input($_POST['ASSESSMENT']);
                $DESCRIPTION_01     = test_input($_POST['DESCRIPTION_01']);
                $DESCRIPTION_02     = test_input($_POST['DESCRIPTION_02']);
                $TEACHER_NAME       = test_input($_POST['TEACHER_NAME']);
                $TEACHER_CATEGORIES = test_input($_POST['TEACHER_CATEGORIES']);

                $id = mysqli_real_escape_string($mysqli,$id);
                $COURSE_NAME = mysqli_real_escape_string($mysqli,$COURSE_NAME);
                $COURSE_PRICE = mysqli_real_escape_string($mysqli,$COURSE_PRICE);
                $LECTURES = mysqli_real_escape_string($mysqli,$LECTURES);
                $DURATION = mysqli_real_escape_string($mysqli,$DURATION);
                $SKILL_LEVEL = mysqli_real_escape_string($mysqli,$SKILL_LEVEL);
                $LANGUAGE = mysqli_real_escape_string($mysqli,$LANGUAGE);
                $EXAMS = mysqli_real_escape_string($mysqli,$EXAMS);
                $ASSESSMENT = mysqli_real_escape_string($mysqli,$ASSESSMENT);
                $DESCRIPTION_01 = mysqli_real_escape_string($mysqli,$DESCRIPTION_01);
                $DESCRIPTION_02 = mysqli_real_escape_string($mysqli,$DESCRIPTION_02);
                $TEACHER_NAME = mysqli_real_escape_string($mysqli,$TEACHER_NAME);
                $TEACHER_CATEGORIES = mysqli_real_escape_string($mysqli,$TEACHER_CATEGORIES);

                $result = $mysqli->query("UPDATE dbcourse SET COURSE_NAME='$COURSE_NAME', COURSE_PRICE='$COURSE_PRICE', LECTURES='$LECTURES', DURATION='$DURATION',
                SKILL_LEVEL='$SKILL_LEVEL' , LANGUAGE='$LANGUAGE' , EXAMS='$EXAMS' , ASSESSMENT='$ASSESSMENT' , DESCRIPTION_1='$DESCRIPTION_01' , DESCRIPTION_2='$DESCRIPTION_02' ,
                TEACHER_NAME='$TEACHER_NAME' , CATEGORIES='$TEACHER_CATEGORIES' WHERE COURSE_ID = $id") or die($mysqli->error);
                
                if ($result === TRUE) {
                  echo "<script>alert('Updated');location='../manageCourse.php';</script> ";
                } else {
                  echo "<script>alert('Error');location='../manageCourse.php';</script> ";
                }
            
          
	
		}
    }
?>


