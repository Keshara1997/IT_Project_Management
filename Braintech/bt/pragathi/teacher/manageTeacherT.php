<?php 
    require_once ("../include/initialize.php");
    require_once("inc/redirectT.php");
?>


<!DOCTYPE html>
<html>

<head>
    <base href="../" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PRAGATHI </title>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="assets/css/vendors.bundle.min.css" />
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="assets/css/main.bundle.min.css" />
</head>

<body>
    <div class="app-admin-wrap-layout-1 sidebar-full sidebar-theme-slate">
    <?php include('inc/headerOneT.php'); ?>
       
         
            <!-- Start::Main header  -->
            <header class="main-header bg-card d-flex flex-row justify-content-between align-items-center px-lg">
                <!-- Start::Header menu-->
                <div>
                        <div class="ul-header-menu">
                            <ul class="ul-header-nav">
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Manage Users</a></li>
                            </ul>
                        </div>
     
                </div>
                <!-- End::Header menu-->
                <div class="ul-header-topbar">
                    <div class="flex-grow-1">
                        <div class="header-btn-group">
                            <button class="btn d-flex py-1 pl-2 pr-0 rounded"  type="button" ><span class="m-0 mr-2 font-weight-normal">Hi, <?php echo $_SESSION['TEACHER_NAME']; ?></span>
                                <img class="avatar-sm rounded-circle mr-1" src="assets/images/faces/1.png" />
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End::Main header-->
            <!-- Start:: content body-->
            <div class="main-content-body">
                <!-- Start:: content (Your custom content)-->
            
           
                <div class="container my-lg">
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-header">
                                <h2 class="p-1 m-0 text-16 font-weight-semi">Teachers Details</h2>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                <table id="basicDatatable" class="table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>NIC No</th>
                                                <th>Name</th>
                                                <th>Subject</th>
                                                <th>Age</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $query = "SELECT * FROM `tbteacher` ORDER BY `tbteacher`.`TEACHER_ID` ASC";
                                            $mydb->setQuery($query);
                                            $cur = $mydb->loadResultList();

                                            foreach ($cur as $result) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $result->NIC_NO ?> 
                                                    <?php 
                                                        if ($result->ACTIVE == 'DISABLE'){
                                                            echo "<span class='badge badge-rounded badge-sm badge-danger'>Disable</span>";
                                                        }else {
                                                            echo "<span class='badge badge-rounded badge-sm badge-success'>Active</span>";
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php echo $result->TEACHER_NAME ?> </td>
                                                <td><?php echo $result->SUBJECT ?></td>
                                                <td><?php echo $result->AGE ?></td>
                                                <td>
                                                    <?php 
                                                        if ($result->ACTIVE == 'DISABLE'){
                                                            echo "<a href='teacher/action/teacherActivatorT.php?status=ACTIVE&id=$result->TEACHER_ID'><button class='btn btn-opacity-success btn-sm' type='button'>Activate</button></a>";
                                                        }else {
                                                            echo "<a href='teacher/action/teacherActivatorT.php?status=DISABLE&id=$result->TEACHER_ID'><button class='btn btn-opacity-danger btn-sm' type='button'>Disable</button></a>";
                                                        }
                                                    ?>
                                                    <a href="teacher/action/teacherControllerT.php?action=delete&id=<?php echo $result->TEACHER_ID ?>"><button class="btn text-danger rounded-circle m-0 btn-sm btn-icon"><i class="material-icons">delete</i></button></a>
                                                </td>
                                            </tr>
                                        <?php } ?>   
                                            
                                          
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start:: content (Your custom content)-->
                <!-- Start:: Footer-->
                <?php include('../include/footer.php'); ?>
                <!-- End:: Footer-->
            </div>
            <!-- End:: content body-->
        </div>
    
    </div>

    <!--Sidebar panel Profile-->
   
    <div class="ul-sidebar-panel-overlay"></div>
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/pages/datatables/basicDatatable.min.js"></script>
</body>

</html>