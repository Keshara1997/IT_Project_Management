<?php

    $dbhost     = '162.214.155.142';
    $dbuser     = 'braintec_admin';
    $dbpass     = 'braintech77';
    $dbname     = 'braintec_site';   

    $mysqli = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if (mysqli_connect_error()){
        die('Database Connection Failed' . mysqli_connect_error());
    }

?>