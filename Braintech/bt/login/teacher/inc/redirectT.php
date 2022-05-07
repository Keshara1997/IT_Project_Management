<?php

if (!isset($_SESSION['TEACHER_ID'])){
  redirect(web_root."teacher/signinT.php");
 } 



  $ACTIVATE = $_SESSION['TEACHER_ID'];
  $RESULTS = 'ACTIVE';

  $query = "SELECT * FROM `tbteacher` WHERE TEACHER_ID = $ACTIVATE";
  $mydb->setQuery($query);
  $cur = $mydb->loadResultList();
  foreach ($cur as $result) {

  $RESULTS = $result->ACTIVE; 

  }

  if ($RESULTS == 'DISABLE'){
    echo "<script>alert ('Your Account Has Been Disabled! Please Contact Administrator');</script>";
    redirect("signinT.php");
  }
 ?>