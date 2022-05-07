<?php

  require_once ("../include/initialize.php");

  if (!isset($_SESSION['StudentID'])){
    redirect("../");
  } 

  $ACTIVATE = $_SESSION['StudentID'];
  $RESULTS = 'ACTIVE';

  $query = "SELECT * FROM `tblstudent` WHERE StudentID = $ACTIVATE";
  $mydb->setQuery($query);
  $cur = $mydb->loadResultList();
  foreach ($cur as $result) {

  $RESULTS = $result->ACTIVE; 

  }

  if ($RESULTS == 'DISABLE'){
    echo "<script>alert ('Your Account Has Been Disabled! Please Contact Administrator');</script>";
    redirect("../");
  }


  $CID = $_SESSION['STCID'];
  $RESULTS2 = 'ACTIVE';
  $query = "SELECT * FROM `studentcourses` WHERE STID = $ACTIVATE AND CID = $CID AND ACTIVE_ST = 'DISABLE'";
  $mydb->setQuery($query);
  $cur = $mydb->loadResultList();
  foreach ($cur as $result) {

  $RESULTS2 = $result->ACTIVE_ST; 

  }

  if ($RESULTS2 == 'DISABLE'){
    echo "<script>alert ('This Class Temperley Blocked! Please Contact Administrator');</script>";
    redirect("courseManager.php");
  }

   
 ?>