<?php 
    require_once ("../include/initialize.php");
    require_once ("../include/connection.php");
    require_once("inc/redirectA.php");

    if(
        !isset($_POST['F_NAME']) ||
        !isset($_POST['L_NAME']) ||
        !isset($_POST['BIRTHDAY']) ||
        !isset($_POST['CONTACT']) ||
        !isset($_POST['EMAIL']) ||
        !isset($_POST['SCHOOL']) ||
        !isset($_POST['ADDRESS']) ||
        !isset($_POST['MEDIUM']) ||
        !isset($_POST['CATEGORY']) ||
        empty($_POST['F_NAME']) ||
        empty($_POST['L_NAME']) ||
        empty($_POST['BIRTHDAY']) ||
        empty($_POST['CONTACT']) ||
        empty($_POST['ADDRESS']) ||
        empty($_POST['MEDIUM']) ||
        empty($_POST['CATEGORY'])
    ){ 
        echo "<script>location='register.php?status=empty';</script>";

    }else{
        
        $F_NAME = mysqli_real_escape_string($mysqli,test_input($_POST['F_NAME']));
        $L_NAME = mysqli_real_escape_string($mysqli,test_input($_POST['L_NAME']));
        $BIRTHDAY = mysqli_real_escape_string($mysqli,test_input($_POST['BIRTHDAY']));
        $CONTACT = mysqli_real_escape_string($mysqli,test_input($_POST['CONTACT']));
        $EMAIL = mysqli_real_escape_string($mysqli,test_input($_POST['EMAIL']));
        $SCHOOL = mysqli_real_escape_string($mysqli,test_input($_POST['SCHOOL']));
        $ADDRESS = mysqli_real_escape_string($mysqli,test_input($_POST['ADDRESS']));
        $MEDIUM = mysqli_real_escape_string($mysqli,test_input($_POST['MEDIUM']));
        $CATEGORY = mysqli_real_escape_string($mysqli,test_input($_POST['CATEGORY']));

        if($CATEGORY == 'A/L'){
            if(!isset($_POST['CLASS_AL']) || empty($_POST['CLASS_AL'])){
                echo "<script>location='register.php?status=empty';</script>";
            }else{
                $CLASS_AL = mysqli_real_escape_string($mysqli,test_input($_POST['CLASS_AL']));
                $EXAM_YEAR = mysqli_real_escape_string($mysqli,test_input($_POST['EXAM_YEAR']));

                if($MEDIUM == 'English'){
                    $STUDENT_ID = "ALE".$EXAM_YEAR[2].$EXAM_YEAR[3].rand(10,99).rand(10,99);
                }else{
                    $STUDENT_ID = "ALS".$EXAM_YEAR[2].$EXAM_YEAR[3].rand(10,99).rand(10,99);
                }
               
                $result = $mysqli->query("SELECT * FROM tblstudent WHERE STID = '$STUDENT_ID' LIMIT 1") or die($mysqli->error);
                while ($row = $result->fetch_assoc()):
                    $error = 1;
                endwhile;

                if(isset($error)){
                    header("Refresh:0");
                }else{
                    $password = sha1($STUDENT_ID);
                    $result = $mysqli->query("INSERT into tblstudent (Fname,Lname,BIRTHDAY,Address,MobileNo,EMAIL,SCHOOL,STID,CATEGORY,STUDUSERNAME,STUDPASS,ACTIVE,IP_ADDRESS) 
                    VALUES('$F_NAME','$L_NAME','$BIRTHDAY','$ADDRESS','$CONTACT','$EMAIL','$SCHOOL','$STUDENT_ID','$CATEGORY','$STUDENT_ID','$password','ACTIVE','0')") or die($mysqli->error);

                    if($result === TRUE){
                        echo "<script>location='registerEnd.php?status=success&STID=$STUDENT_ID&CLASS=$CLASS_AL';</script>";
                    }else{
                        echo "<script>location='register.php?status=error';</script>";
                    }
                }

            }
        }
        
        if($CATEGORY == 'O/L'){
            if(!isset($_POST['CLASS_OL']) || empty($_POST['CLASS_OL'])){
                echo "<script>location='register.php?status=empty';</script>";
            }else{
                $CLASS_OL = mysqli_real_escape_string($mysqli,test_input($_POST['CLASS_OL']));
                $EXAM_YEAR = mysqli_real_escape_string($mysqli,test_input($_POST['EXAM_YEAR']));

                if($MEDIUM == 'English'){
                    $STUDENT_ID = "OLE".$EXAM_YEAR[2].$EXAM_YEAR[3].rand(10,99).rand(10,99);
                }else{
                    $STUDENT_ID = "OLS".$EXAM_YEAR[2].$EXAM_YEAR[3].rand(10,99).rand(10,99);
                }
               
                $result = $mysqli->query("SELECT * FROM tblstudent WHERE STID = '$STUDENT_ID' LIMIT 1") or die($mysqli->error);
                while ($row = $result->fetch_assoc()):
                    $error = 1;
                endwhile;

                if(isset($error)){
                    header("Refresh:0");
                }else{
                    $password = sha1($STUDENT_ID);
                    $result = $mysqli->query("INSERT into tblstudent (Fname,Lname,BIRTHDAY,Address,MobileNo,EMAIL,SCHOOL,STID,CATEGORY,STUDUSERNAME,STUDPASS,ACTIVE,IP_ADDRESS) 
                    VALUES('$F_NAME','$L_NAME','$BIRTHDAY','$ADDRESS','$CONTACT','$EMAIL','$SCHOOL','$STUDENT_ID','$CATEGORY','$STUDENT_ID','$password','ACTIVE','0')") or die($mysqli->error);

                    if($result === TRUE){
                        echo "<script>location='registerEnd.php?status=success&STID=$STUDENT_ID&CLASS=$CLASS_OL';</script>";
                    }else{
                        echo "<script>location='register.php?status=error';</script>";
                    }
                }
            }
        }

        if($CATEGORY == 'Course'){
            if(!isset($_POST['CLASS_COURSE']) || empty($_POST['CLASS_COURSE'])){
                echo "<script>location='register.php?status=empty';</script>";
            }else{
                $CLASS_COURSE = mysqli_real_escape_string($mysqli,test_input($_POST['CLASS_COURSE']));

                if($MEDIUM == 'English'){
                    $STUDENT_ID = "CE".rand(10,99).rand(10,99);
                }else{
                    $STUDENT_ID = "CS".rand(10,99).rand(10,99);
                }
               
                $result = $mysqli->query("SELECT * FROM tblstudent WHERE STID = '$STUDENT_ID' LIMIT 1") or die($mysqli->error);
                while ($row = $result->fetch_assoc()):
                    $error = 1;
                endwhile;

                if(isset($error)){
                    header("Refresh:0");
                }else{
                    $password = sha1($STUDENT_ID);
                    $result = $mysqli->query("INSERT into tblstudent (Fname,Lname,BIRTHDAY,Address,MobileNo,EMAIL,SCHOOL,STID,CATEGORY,STUDUSERNAME,STUDPASS,ACTIVE,IP_ADDRESS) 
                    VALUES('$F_NAME','$L_NAME','$BIRTHDAY','$ADDRESS','$CONTACT','$EMAIL','$SCHOOL','$STUDENT_ID','$CATEGORY','$STUDENT_ID','$password','ACTIVE','0')") or die($mysqli->error);

                    if($result === TRUE){
                        echo "<script>location='registerEnd.php?status=success&STID=$STUDENT_ID&CLASS=$CLASS_COURSE';</script>";
                    }else{
                        echo "<script>location='register.php?status=error';</script>";
                    }
                }
            }
        }

        if($CATEGORY == 'Others'){
            if(!isset($_POST['CLASS_OTHER']) || empty($_POST['CLASS_OTHER'])){
                echo "<script>location='register.php?status=empty';</script>";
            }else{
                $CLASS_OTHER = mysqli_real_escape_string($mysqli,test_input($_POST['CLASS_OTHER']));

                if($MEDIUM == 'English'){
                    $STUDENT_ID = "OE".rand(10,99).rand(10,99);
                }else{
                    $STUDENT_ID = "OS".rand(10,99).rand(10,99);
                }
               
                $result = $mysqli->query("SELECT * FROM tblstudent WHERE STID = '$STUDENT_ID' LIMIT 1") or die($mysqli->error);
                while ($row = $result->fetch_assoc()):
                    $error = 1;
                endwhile;

                if(isset($error)){
                    header("Refresh:0");
                }else{
                    $password = sha1($STUDENT_ID);
                    $result = $mysqli->query("INSERT into tblstudent (Fname,Lname,BIRTHDAY,Address,MobileNo,EMAIL,SCHOOL,STID,CATEGORY,STUDUSERNAME,STUDPASS,ACTIVE,IP_ADDRESS) 
                    VALUES('$F_NAME','$L_NAME','$BIRTHDAY','$ADDRESS','$CONTACT','$EMAIL','$SCHOOL','$STUDENT_ID','$CATEGORY','$STUDENT_ID','$password','ACTIVE','0')") or die($mysqli->error);

                    if($result === TRUE){
                        echo "<script>location='registerEnd.php?status=success&STID=$STUDENT_ID&CLASS=$CLASS_OTHER';</script>";
                    }else{
                        echo "<script>location='register.php?status=error';</script>";
                    }
                }
            }
        }


    
    }


?>


