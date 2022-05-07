<?php session_start(); ?>
<?php require_once ("../../include/connection.php"); ?>

<?php

    if (isset($_POST['btnLogin'])){
        
        $errors = array();
        
            if(!isset($_POST['user_email'])) {
                $errors[] = 'User Name is missing or invalid';
            }

            if(!isset($_POST['user_pass'])) {
                $errors[] = 'Password is missing or invalid';
            }

            if(empty($errors)){ 

                $uName = $_POST['user_email'];
                $password = $_POST['user_pass'];
                $h_upass = sha1($password);

                $query = "SELECT * FROM tblstudent WHERE STUDUSERNAME = '{$uName}' AND STUDPASS = '{$h_upass}' LIMIT 1";
                
                $result_set = mysqli_query($mysqli , $query);

                if ($result_set){

                    if(mysqli_num_rows($result_set)==1){
                        
                        $user = mysqli_fetch_assoc($result_set);
                       

                        $_SESSION['StudentID']   	= $user['StudentID'];
                        $_SESSION['Fname']      	= $user['Fname'];
                        $_SESSION['Lname']      	= $user['Lname'];
                        $_SESSION['Address']      	= $user['Address'];
                        $_SESSION['MobileNo']      	= $user['MobileNo'];
                        $_SESSION['STID']      		= $user['STID'];
                        $_SESSION['USERNAME'] 		= $user['STUDUSERNAME'];
                        $_SESSION['STUDPASS'] 		= $user['STUDPASS']; 
                        $_SESSION['STCID'] 			= $user['CID']; 
                        $_SESSION['ACTIVE'] 		= $user['ACTIVE']; 
                        
                        echo "<script>location='../STDashboard.php';</script> ";

                    }else{
                        ?>
                        <script>
                            alert("Username Password Invalied");
                            location='../../index.php';
                        </script> 
                        <?php
                    }
                }else{
                    
                    $errors = 'Database Quary Failed';
                }


            }


        }




        


?>