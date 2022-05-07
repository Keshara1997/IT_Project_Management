<?php session_start(); ?>
   

<?php
    if (!isset($_SESSION['SITE_USER_ID'])){
        header('location: index.php');
    }
?>