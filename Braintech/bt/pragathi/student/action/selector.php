<?php
    session_start();
    require_once ("../../include/connection.php");

    $CID = $_GET['id'];
    $result = $mysqli->query("SELECT * FROM tbcourse WHERE CID = $CID") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
     

        $_SESSION['STCID']            = $row['CID'];


        header('location:../STDashboard.php');
    endwhile;
?>