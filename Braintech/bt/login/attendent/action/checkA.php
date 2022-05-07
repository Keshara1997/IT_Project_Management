<?php 
    require_once ("../../include/connection.php");
 	require_once ("../../include/initialize.php"); 

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

                $query = "SELECT * FROM tbattendent WHERE ATTENDENT_USER_NAME = '{$uName}' AND ATTENDENT_PASSWORD = '{$h_upass}' LIMIT 1";
                
                $result_set = mysqli_query($mysqli , $query);

                if ($result_set){

                    if(mysqli_num_rows($result_set)==1){
                        
                        $user = mysqli_fetch_assoc($result_set);
                        $_SESSION['ATT_ID'] = $user['ATT_ID'];
                        $_SESSION['ATT_NAME'] = $user['ATTENDENT_NAME'];
               
                        
                        echo "<script>location='../attendent.php';</script> ";

                    }else{

                        echo "<script>alert('Username Password Invalied');location='../signinA.php';</script> ";
                        
                    }
                }else{
                    
                    $errors = 'Database Quary Failed';
                }


            }


        }




        


?>