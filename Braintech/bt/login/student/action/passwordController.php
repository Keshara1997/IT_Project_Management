<?php
require_once("../../include/initialize.php");  
require_once ("../../include/connection.php");

$action = test_input($_GET['action']); 
$action = mysqli_real_escape_string($mysqli,$action);

if($action == 'check'){
    if (isset($_POST['cPassword'])){

        $studentid = test_input($_SESSION['StudentID']);
        $cpassword = test_input($_POST['cPassword']);
        $studentid = mysqli_real_escape_string($mysqli,$studentid);
        $cpassword = mysqli_real_escape_string($mysqli,$cpassword);
        $cpassword = sha1($cpassword);
        $_SESSION['Correct'] = 0;
        $result = $mysqli->query("SELECT * FROM tblstudent WHERE StudentID = '{$studentid}' AND STUDPASS = '{$cpassword}' LIMIT 1") or die($mysqli->error);
        while ($row = $result->fetch_assoc()):
            $_SESSION['Correct'] = 1;
        endwhile;


        if($_SESSION['Correct'] == 1){
            echo ("<script> location='../setpassword.php'; </script>");
        }else{
            echo ("<script> alert ('Invalid Password!'); location='logout.php'; </script>");
        }
    }
    echo ("<script> location='../password.php'; </script>");
}


if($action == 'changepwd'){
    if (isset($_POST['NewPassword'])){
        
        $password   =  mysqli_real_escape_string($mysqli,test_input(sha1($_POST['NewPassword'])));

        $studentid = mysqli_real_escape_string($mysqli,test_input($_SESSION['StudentID']));
						
		$mysqli->query("UPDATE tblstudent SET 
		    STUDPASS='$password' WHERE StudentID = $studentid") 
        or die($mysqli->error);
        echo ("<script> alert ('Password is set!'); location='logout.php'; </script>");
    }
    echo ("<script> alert ('Password is not set!'); location='logout.php'; </script>");
}


?>