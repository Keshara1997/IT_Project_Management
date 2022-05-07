<?php 
    require_once("../../include/initialize.php");
    require_once("../../include/connection.php");
?>

<?php

if(isset($_POST['btnLogin'])){
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $email = stripcslashes($email);
  $upass = stripcslashes($upass);

  $email = mysqli_real_escape_string($mysqli,$email);
  $upass = mysqli_real_escape_string($mysqli,$upass);

  
  $h_upass = sha1($upass);

   if ($email == '' OR $upass == '') {

      message("Invalid Username and Password!", "error");
      echo ("<script> alert ('Invalid Username and Password!') </script>");
      redirect("admin/signin.php");

    } else {
  //it creates a new objects of member
    $user = new User();
    //make use of the static function, and we passed to parameters
    $res = $user::userAuthentication($email, $h_upass);
    if ($res==true) {
       message("You login as ".$_SESSION['TYPE'].".","success");
      if ($_SESSION['TYPE']=='Administrator'){
         redirect(web_root."admin/courseSelector.php");
      }else{
           redirect(web_root."admin/signin.php");
      }
    }else{
      message("Account does not exist! Please contact Administrator.", "error");
      echo ("<script> alert ('Account does not exist! Please contact Administrator. call 0705669566') </script>");
       redirect(web_root."admin/signin.php");
    }
 }
 }
 ?> 