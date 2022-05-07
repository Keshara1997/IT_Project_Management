<?php

if (!isset($_SESSION['ATT_ID'])){
  redirect(web_root."attendent/signinA.php");
 } 

 $ACTIVATE = $_SESSION['ATT_ID'];
 $RESULTS = 'ACTIVE';

 $query = "SELECT * FROM `tbattendent` WHERE ATT_ID = $ACTIVATE";
 $mydb->setQuery($query);
 $cur = $mydb->loadResultList();
 foreach ($cur as $result) {

 $RESULTS = $result->ACTIVE; 

 }

 if ($RESULTS == 'DISABLE'){
   echo "<script>alert ('Your Account Has Been Disabled! Please Contact Administrator');</script>";
   redirect("signinA.php");
 }
 ?>

