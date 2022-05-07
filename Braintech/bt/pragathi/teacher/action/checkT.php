<?php session_start(); ?>
<?php require_once ("../../include/connection.php"); ?>

<?php

        require_once("../../include/connection.php");


    if (isset($_POST['submit'])){
        
        $errors = array();
        
            if(!isset($_POST['username'])) {
                $errors[] = 'User Name is missing or invalid';
            }

            if(!isset($_POST['password'])) {
                $errors[] = 'Password is missing or invalid';
            }

            if(empty($errors)){ 

                $uName = $_POST['username'];
                $password = $_POST['password'];



                $uName = stripcslashes($uName);
                $password = stripcslashes($password);
        
                $uName = mysqli_real_escape_string($mysqli,$uName);
                $password = mysqli_real_escape_string($mysqli,$password);



                $h_upass = sha1($password);

                $query = "SELECT * FROM tbteacher WHERE TEACHER_USER_NAME = '{$uName}' AND TEACHER_PASSWORD = '{$h_upass}' LIMIT 1";
                
                $result_set = mysqli_query($mysqli , $query);

                if ($result_set){

                    if(mysqli_num_rows($result_set)==1){
                        
                        $user = mysqli_fetch_assoc($result_set);
                        $_SESSION['TEACHER_ID'] = $user['TEACHER_ID'];
                        $_SESSION['TEACHER_NAME'] = $user['TEACHER_NAME'];
                        $_SESSION['SUBJECT'] = $user['SUBJECT'];
                        $_SESSION['NIC_NO'] = $user['NIC_NO'];
                        $_SESSION['AGE'] = $user['AGE'];
                        $_SESSION['ACTIVE_TEACHER'] = $user['ACTIVE'];
                        $_SESSION['TEACHER_USER_NAME'] = $user['TEACHER_USER_NAME'];
                        
                        echo "<script>location='../courseSelectorT.php';</script> ";

                    }else{
                        ?>
                        <script>
                            alert("Username Password Invalied");
                            location='../signinT.php';
                        </script> 
                        <?php
                    }
                }else{
                    
                    $errors = 'Database Quary Failed';
                }


            }


        }




        


?>