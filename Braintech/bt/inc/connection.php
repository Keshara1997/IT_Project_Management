<?php
    require_once ("validate.php");

    $dbhost     = 'localhost';
    $dbuser     = 'root';
    $dbpass     = '';
    $dbname     = 'braintech';   

    $mysqli = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if (mysqli_connect_error()){
        die('Database Connection Failed' . mysqli_connect_error());
    }

    header("X-XSS-Protection: 1; mode=block");
?>