<?php 
    require_once ("../include/initialize.php");
    require_once ("../include/connection.php");
    require_once ("inc/redirect.php");
?>


<!DOCTYPE html>
<html>

<head>
    <base href="../" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>BRAINTECH</title>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="assets/css/vendors.bundle.min.css" />
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="assets/css/main.bundle.min.css" />
</head>

<body>
    <div class="app-admin-wrap-layout-1 sidebar-full sidebar-theme-slate">
    <?php include('inc/header.php'); ?>
       
         
            <!-- Start::Main header  -->
            <header class="main-header bg-card d-flex flex-row justify-content-between align-items-center px-lg">
                <!-- Start::Header menu-->
                <div>
                        <div class="ul-header-menu">
                            <ul class="ul-header-nav">
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link"><?php echo $_SESSION['COURSE_NAME']; ?></a></li>
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Add Students</a></li>
                            </ul>
                        </div>
     
                </div>
                <!-- End::Header menu-->
                <div class="ul-header-topbar">
                    <div class="flex-grow-1">
                        <div class="header-btn-group">
                            <button class="btn d-flex py-1 pl-2 pr-0 rounded"  type="button" ><span class="m-0 mr-2 font-weight-normal">Hi, <?php echo $_SESSION['NAME']; ?></span>
                                <img class="avatar-sm rounded-circle mr-1" src="assets/images/faces/1.png" />
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End::Main header-->
            <!-- Start:: content body-->

                <!-- Start:: content (Your custom content)-->
                <div class="main-content-body">
           
                <div class="container my-lg">
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-header">
                                <h2 class="p-1 m-0 text-16 font-weight-semi">Add Students For <?php echo $_SESSION['COURSE_NAME']; ?></h2>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                <form method="POST" action="admin/action/StudentCourseController.php?action=addAll">
                                <button class="btn btn-opacity-primary btn-sm" id="usersave" name="save" type="submit" ><strong>Add selected students</strong></button>

                                <table id="datatableScrollY" class="table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>ST_ID</th>
                                                <th>Name</th>
                                                <th>Date of Birth</th>
                                                <th>Address</th>
                                                <th>Contact</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            
                                            <?php 
                                                $COURSE_CATEGORY = test_input($_SESSION['COURSE_CATEGORY']);
                                                $CID = test_input($_SESSION['CID']);
                                                $COURSE_CATEGORY = mysqli_real_escape_string($mysqli,$COURSE_CATEGORY);
                                                $CID = mysqli_real_escape_string($mysqli,$CID);

                                                $query = "SELECT * FROM `tblstudent` WHERE CATEGORY = '$COURSE_CATEGORY'";
                                                $mydb->setQuery($query);
                                                $cur = $mydb->loadResultList();

                                                foreach ($cur as $result) {
                                            ?>
                                            <tr>
                                            
                                                <?php
                                                    $Student_Id = $result->StudentID;
                                                    $CHECK = 0;
                                                    $results = $mysqli->query("SELECT * FROM studentcourses WHERE STID = $Student_Id AND CID = $CID") or die($mysqli->error);
                                                    while ($row = $results->fetch_assoc()):
                                                        $CHECK = 1;
                                                    endwhile;
                                                    
                                                    if ($CHECK == 0){      
                                                ?>

                                                <td><?php echo "<input type='checkbox' name='check[]' value='$result->StudentID'>" ?> </td>
                                                
                                                <?php } else{ ?>
                                                    <th></th>
                                                <?php }?>

                                                <td>
                                                    <?php echo $result->STID ?> 
                                                    <?php 
                                                        if ($result->ACTIVE == 'DISABLE'){
                                                            echo "<span class='badge badge-rounded badge-sm badge-danger'>Disable</span>";
                                                        }else {
                                                            echo "<span class='badge badge-rounded badge-sm badge-success'>Active</span>";
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php echo $result->Fname ?>  <?php echo $result->Lname ?> </td>
                                                <td><?php echo $result->BIRTHDAY ?></td>
                                                <td><?php echo $result->Address ?></td>
                                                <td><?php echo $result->MobileNo ?></td>
                                                <td>
                                                <?php
                                                    $Student_Id = $result->StudentID;
                                                    $Student_Id = test_input($Student_Id);
                                                    $Student_Id = mysqli_real_escape_string($mysqli,$Student_Id);

                                                    $CHECK = 0;
                                                    $results = $mysqli->query("SELECT * FROM studentcourses WHERE STID = $Student_Id AND CID = $CID") or die($mysqli->error);
                                                    while ($row = $results->fetch_assoc()):
                                                        $CHECK = 1;
                                                    endwhile;
                                                    
                                                    if ($CHECK == 0){      
                                                ?>
                                                    <a href="admin/action/StudentCourseController.php?id=<?php echo $result->StudentID ?>&action=add"><button class="btn btn-opacity-primary btn-sm" type="button">Add</button></a>
                                                <?php }else{ ?>
                                                    <a><button class="btn btn-opacity-warning btn-sm" type="button">Added</button></a>
                                                <?php }?>

                                                </td>
                                            </tr>
                                            <?php } ?>  
                                    </table>
                                    
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            
                <!-- Start:: content (Your custom content)-->
                <!-- Start:: Footer-->
                <?php include('../include/footer.php'); ?>
                <!-- End:: Footer-->
        
            <!-- End:: content body-->
        </div>
    
    </div>

    <!--Sidebar panel Profile-->
   
    <div class="ul-sidebar-panel-overlay"></div>

    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/pages/datatables/scrollDatatable.min.js"></script>
</body>

</html>