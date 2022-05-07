<?php
require_once("../../include/initialize.php");  
require_once ("../../include/connection.php");

$action = $_GET['action']; 

if($action == 'check'){
    if (isset($_POST['cPassword'])){

        $studentid = $_SESSION['StudentID'];
        $cpassword = sha1($_POST['cPassword']);
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
        
        $password   =  trim(sha1($_POST['NewPassword']));
        $studentid = $_SESSION['StudentID'];
						
		$mysqli->query("UPDATE tblstudent SET 
		    STUDPASS='$password' WHERE StudentID = $studentid") 
        or die($mysqli->error);
        echo ("<script> alert ('Password is set!'); location='logout.php'; </script>");
    }
    echo ("<script> alert ('Password is not set!'); location='logout.php'; </script>");
}


?>