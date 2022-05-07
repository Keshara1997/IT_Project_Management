<?php
    session_start();
    require_once ("../../include/connection.php");

    $CID = test_input($_GET['id']);
    $CID = mysqli_real_escape_string($mysqli,$CID);
    
    $result = $mysqli->query("SELECT * FROM tbcourse WHERE CID = $CID") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
        $_SESSION['STCID'] = $row['CID'];
        header('location:../STDashboard.php');
    endwhile;

    function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>