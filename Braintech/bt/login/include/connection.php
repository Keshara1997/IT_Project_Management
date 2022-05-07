<?php

    $dbhost     = 'sql203.byethost12.com';
    $dbuser     = 'b12_26700754';
    $dbpass     = 'witc604pol';
    $dbname     = 'b12_26700754_witc';   

    $mysqli = mysqli_connect('localhost','root','','oc');

    if (mysqli_connect_error()){
        die('Database Connection Failed' . mysqli_connect_error());
    }

?>