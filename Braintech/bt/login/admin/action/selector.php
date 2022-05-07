<?php
    require_once ("../../include/initialize.php");
    require_once ("../inc/redirect.php");
    require_once ("../../include/connection.php");

    $CID = test_input($_GET['id']);
    $CID = mysqli_real_escape_string($mysqli,$CID);

    $result = $mysqli->query("SELECT * FROM tbcourse WHERE CID = $CID") or die($mysqli->error);
    
    while ($row = $result->fetch_assoc()):

        $_SESSION['CID']            = $row['CID'];
        $_SESSION['COURSE_NAME']    = $row['COURSE_NAME'];
        $_SESSION['DATE']           = $row['Date'];
        $_SESSION['COURSE_CATEGORY']= $row['CATEGORY'];

        echo "<script>location='../dashboard.php';</script>";
           
    endwhile;
?>