<?php
     	require_once ("../../include/initialize.php");
         require_once ("../inc/redirectT.php");
    require_once ("../../include/connection.php");

    $CID = $_GET['id'];
    $result = $mysqli->query("SELECT * FROM tbcourse WHERE CID = $CID") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
     

        $_SESSION['CID']            = $row['CID'];
        $_SESSION['COURSE_NAME']    = $row['COURSE_NAME'];
        $_SESSION['DATE']           = $row['Date'];

        echo "<script>location='../dashboardT.php';</script>";
 
    endwhile;
?>