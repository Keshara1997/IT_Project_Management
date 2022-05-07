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


   
 ?>