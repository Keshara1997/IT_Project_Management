<?php 
   /* require_once ("include/initialize.php");
    require_once ("include/connection.php");
    
    $Todayyear = date("y");
    $Todaymonth = date("m");
    $Todaydate = date("d");

    if($Todaydate>14){

        $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='DISABLE'") or die($mysqli->error);

        $result = $mysqli->query("SELECT * FROM tbpayments WHERE P_MONTH = $Todaymonth AND P_YEAR = $Todayyear") or die($mysqli->error);
        while ($row = $result->fetch_assoc()):
            $STID = $row['ST_ID'];
            $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='ACTIVE' WHERE STID = $STID ") or die($mysqli->error);
        endwhile;

    }else{
        $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='ACTIVE'") or die($mysqli->error);
    }
    

*/
?>

<!DOCTYPE html>
<html>

<head>
    <base href="" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>BrainTech | Logins</title>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="assets/css/vendors.bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/github.min.css" />
    <link rel="stylesheet" href="assets/css/main.bundle.min.css" />
</head>

<body>
    <div class="app-admin-wrap-layout-1 sidebar-full sidebar-theme-slate">

                <div class="container my-lg">
                    <div class="row">
                        <div class="col-xl-12 mb-md">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-4 border-right p-4">
                                            <div class="ul-pricing-v1 ul-icon-box-animate-onhover">
                                                <div class="ul-icon-box mx-auto mb-xl">
                                                <i class="material-icons text-72 text-primary">admin_panel_settings</i>
                                                </div>
                                                <div class="ul-pricing-v1-title text-center mb-xxl">
                                                    <h4 class="font-weight-bold">Administrator</h4>
                                                </div>
                                                <div class="text-center">
                                                    <a href="admin/signin.php"><button type="button" class="btn btn-raised btn-raised-primary btn-rounded btn-lg">LOGIN</button></a>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="col-lg-12 col-xl-4 border-right p-4">
                                            <div class="ul-pricing-v1 ul-icon-box-animate-onhover">
                                                <div class="ul-icon-box mx-auto mb-xl">
                                                <i class="material-icons text-72 text-primary">account_circle</i>
                                                </div>
                                                <div class="ul-pricing-v1-title text-center mb-xxl">
                                                    <h4 class="font-weight-bold">Teacher</h4>
                                                </div>
                                                <div class="text-center">
                                                    <a href="teacher/signinT.php"><button type="button" class="btn btn-raised btn-raised-primary btn-rounded btn-lg">LOGIN</button></a>
                                                </div>
                                            </div>
                                        </div><br>
                                        <div class="col-lg-12 col-xl-4 border-right p-4">
                                            <div class="ul-pricing-v1 ul-icon-box-animate-onhover">
                                                <div class="ul-icon-box mx-auto mb-xl">
                                                <i class="material-icons text-72 text-primary">supervisor_account</i>
                                                </div>
                                                <div class="ul-pricing-v1-title text-center mb-xxl">
                                                    <h4 class="font-weight-bold">Attendent</h4>
                                                </div>
                                                <div class="text-center">
                                                    <a href="attendent/signinA.php"><button type="button" class="btn btn-raised btn-raised-primary btn-rounded btn-lg">LOGIN</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
         

    </div>
    <!--begin::sidebar-panel-notification-->
    
    
    <div class="ul-sidebar-panel-overlay"></div>
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/highlight.min.js"> </script>
    <script src="assets/js/pages/doc.script.min.js"></script>
</body>

</html>