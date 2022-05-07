<?php 
    require_once("../include/initialize.php");
?>

<!DOCTYPE html>

<head>
    <base href="../">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRAGATHI | ADMIN LOGIN</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400|Roboto:300,400,500,700,900|Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/pages/session/session.v1.min.css">
    <link rel="stylesheet" href="assets/css/main.bundle.min.css">
</head>

<body>
    <div class="page-wrap slate">
        <div class="session-form-hold">
            <div class="card text-center">
                <div class="card-body">
                    <form method="POST" action="admin/action/check.php">
                    <img class="card-img-top signup" src="assets/images/logo.png" alt="Card image cap">
                    <span class="text-primary text-18 d-block font-weight-bold">PRAGATHI ADMIN </span>
                    <span class="mb-md text-muted mb-lg d-block">Sign in to as a Admin</span>
                    <div class="input-group  input-light mb-md">
                        <input type="text" class="form-control" name="user_email" placeholder="Username">
                    </div>
                    <div class="input-group  input-light mb-md">
                        <input type="password" class="form-control" name="user_pass" placeholder="Password">
                    </div>
                    <div class="input-group  input-light mb-lg">
                        <div class="custom-control custom-checkbox checkbox-light d-flex align-items-center">
                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                            <label class="custom-control-label text-small" for="customCheck7">Remember this computer</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-raised btn-raised-primary btn-block mb-xl" name="btnLogin">Sign In</button>
                    <div class="d-flex justify-content-around">
                    <a href="logins.php">System Logins</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>