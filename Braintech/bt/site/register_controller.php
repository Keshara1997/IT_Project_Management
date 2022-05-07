<?php include('../inc/connection.php');
header("X-XSS-Protection: 1; mode=block");


$errors = array();

if (isset($_POST['submit'])){

    $req_fields = array('FNAME','LNAME','AGE','PHONE','ADDRESS','COURSE','AGREE');

    foreach ($req_fields as $field){
        if(empty($_POST[$field])){
            $errors[] = $field . ' is Emplty';
        } 
    }
    if(!empty($errors)){
        echo "<script>alert('Sorry! We can not Process Your details');location='register.php';</script> ";
    }
    else{
    
  
    $FNAME      = mysqli_real_escape_string($mysqli,test_input($_POST['FNAME']));
    $LNAME      = mysqli_real_escape_string($mysqli,test_input($_POST['LNAME']));
    $SCHOOL     = mysqli_real_escape_string($mysqli,test_input($_POST['SCHOOL']));
    $NIC_NO     = mysqli_real_escape_string($mysqli,test_input($_POST['NIC_NO']));
    $AGE        = mysqli_real_escape_string($mysqli,test_input($_POST['AGE']));
    $EMAIL      = mysqli_real_escape_string($mysqli,test_input($_POST['EMAIL']));
    $PHONE      = mysqli_real_escape_string($mysqli,test_input($_POST['PHONE']));
    $ADDRESS    = mysqli_real_escape_string($mysqli,test_input($_POST['ADDRESS']));
    $COURSE     = mysqli_real_escape_string($mysqli,test_input($_POST['COURSE']));
    $GRADE      = mysqli_real_escape_string($mysqli,test_input($_POST['GRADE']));
    $AGREE      = mysqli_real_escape_string($mysqli,test_input($_POST['AGREE']));


    $mysqli->query("INSERT INTO `dbregister` (`F_NAME`, `L_NAME`, `SCHOOL`, `NIC_NO`, `AGE`, `EMAIL`, `PHONE`, `ADDRESS`, `COURSE_ID`, `GRADE`, `TEARMS_CONDITION`) 
    VALUES ('$FNAME', '$LNAME', '$SCHOOL', '$NIC_NO', '$AGE', '$EMAIL', '$PHONE', '$ADDRESS', '$COURSE', '$GRADE', '$AGREE');") or die($mysqli->error);

    echo "<script>alert('Your Registration is Succcess!');location='../index.php';</script> ";

    } 
}

?>    
    
