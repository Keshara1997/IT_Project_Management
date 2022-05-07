<?php

  require_once ("../../include/initialize.php");
  require_once ("../../include/connection.php");
  if (!isset($_SESSION['StudentID'])){
    redirect("../");
  } 

  $ACTIVATE = $_SESSION['StudentID'];
  $RESULTS = 'ACTIVE';

  $STID = $_SESSION['StudentID']; 
  $CIP = getUserIpAddr();
  $ok = 0;

  $result = $mysqli->query("SELECT * FROM tblstudent WHERE StudentID = $STID AND IP_ADDRESS = '$CIP' LIMIT 1") or die($mysqli->error);
  while ($row = $result->fetch_assoc()):
    $ok = 1;

  endwhile;

  if($ok == 1){
    echo "1";
  }else{
    echo "0";
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