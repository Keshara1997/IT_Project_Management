<?php 
    require_once ("include/initialize.php");

?>

<!DOCTYPE html>

<head>
    <base href="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BRAINTECH | STUDENT LOGIN</title>
    <link rel="stylesheet" href="assets/css/plugins/plugins.bundle.css">
    <link rel="stylesheet" href="assets/css/pages/session/session.v4.min.css">
    <link rel="stylesheet" href="assets/css/main.bundle.min.css">
    
</head>

<body>

    <div class="signup4-wrap">
        <div class="signup4-container">
                   
            <div class="card">
        
                <div class="card-body p-0">
          
                    <div class="row m-0">
                        <div class="col-md-6 d-flex justify-content-center p-xxl">
                            <img class="" src="assets/images/logo1.png"><br>
                   
                        </div>
                    

                        <div class="col-md-6 pt-xxl">
                            <form action="student/action/checkST.php" method="POST"  style="margin-left:5%; margin-right:5%;">
                            <div class="input-group  input-light mb-3">
                                <input type="text" class="form-control" name="user_email" placeholder="Username" required data-validation-required-message="Full Name Required">
                            </div>
                            <div class="input-group  input-light mb-3">
                                <input type="password" class="form-control" name="user_pass" placeholder="Password" required data-validation-required-message="Full Name Required">
                            </div>
                            <div class="input-group  input-light mb-md">
                                <div class="mb-md custom-control custom-checkbox checkbox-light">
                                    <input type="checkbox" class="custom-control-input" id="customCheck7" name="ok"  required data-validation-required-message="Full Name Required" CHECKED>
                                    <label class="custom-control-label" for="customCheck7">I agree with terms and condtions.</label>
                                </div>
                            </div>
                                <button class="btn btn-raised btn-raised-primary btn-block mb-xl" type="submit" name="btnLogin">Sign In</button>
                        
                                <a href="../Home">Home</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

