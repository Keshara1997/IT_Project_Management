<?php 
require_once("../../include/initialize.php"); 
require_once("../../include/connection.php"); 

if(isset($_POST['btnLogin'])){
  $email = test_input($_POST['user_email']);
  $upass  = test_input($_POST['user_pass']);

  $email = mysqli_real_escape_string($mysqli,$email);
  $upass = mysqli_real_escape_string($mysqli,$upass);

  $h_upass = sha1($upass);
  
   if ($email == '' OR $upass == '') {

      message("Invalid Username and Password!", "error");
      echo ("<script> alert ('Invalid Username and Password!') </script>");
      redirect (web_root."index.php");
         
    } else {  
      //it creates a new objects of member
        $student = new Student();
        //make use of the static function, and we passed to parameters
        $res = $student::studentAuthentication($email, $h_upass);
        if ($res==true) {  
          $ip = getUserIpAddr(); 
          $STID = $_SESSION['StudentID'];
          $result = $mysqli->query("UPDATE tblstudent SET IP_ADDRESS='$ip' WHERE StudentID = $STID ") 
          or die($mysqli->error);

          redirect(web_root."student/courseManager.php"); 
        }else{
          message("Account does not exist! Please contact Administrator.", "error");
          echo ("<script> alert ('Account does not exist! Please contact Administrator.') </script>");
          redirect (web_root."index.php");
        }
   }
 } 



 
function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
 ?> 

 