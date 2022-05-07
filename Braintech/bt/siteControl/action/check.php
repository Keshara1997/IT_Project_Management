<?php session_start(); ?>
<?php require_once('../../inc/connection.php') ?>

<?php

    if (isset($_POST['submit'])){
        
        $errors = array();
        
            if(!isset($_POST['username'])) {
                $errors[] = 'User Name is missing or invalid';
            }
 
            if(!isset($_POST['password'])) {
                $errors[] = 'Password is missing or invalid';
            }

            if(empty($errors)){

                $uName = test_input($_POST['username']);
                $password = test_input($_POST['password']);

                $uName = mysqli_real_escape_string($mysqli,$uName);
                $password = mysqli_real_escape_string($mysqli,$password);

                $h_upass = sha1($password);

                $query = "SELECT * FROM dbuser WHERE USER_USERNAME = '{$uName}' AND USER_PASSWORD = '{$h_upass}' LIMIT 1";
                
                $result_set = mysqli_query($mysqli , $query);

                if ($result_set){

                    if(mysqli_num_rows($result_set)==1){
                        
                        $user = mysqli_fetch_assoc($result_set);
                        $_SESSION['USER_ID'] = $user['USER_ID'];
                        $_SESSION['SITE_USER_ID'] = $user['USER_ID'];
                        
                        header('location: ../dashboard.php');

                    }else{
                        ?>
                        <script>
                            alert("Username Password Invalied");
                            location='../';
                        </script> 
                        <?php
                    }
                }else{
                    
                    $errors = 'Database Quary Failed';
                }


            }


        }




        


?>