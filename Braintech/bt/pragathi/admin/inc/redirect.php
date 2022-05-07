<?php

if (!isset($_SESSION['USERID'])){
  redirect(web_root."admin/signin.php");
 } 

 ?>