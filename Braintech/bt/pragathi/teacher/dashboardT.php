<?php 
    require_once("../include/initialize.php");
    require_once ("../include/connection.php");
    require_once("inc/redirectT.php");
    require_once("googleCharts/activeStudentT.php");
    require_once("googleCharts/lessonsBarChartT.php");
?>



 
<!DOCTYPE html>
<html>

<head>
    <base href="../" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PRAGATHI</title>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="assets/css/vendors.bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/pages/dashboard/learning-management.min.css" />
    <link rel="stylesheet" href="assets/css/main.bundle.min.css" />
</head>

<body>
    <div class="app-admin-wrap-layout-1 sidebar-full sidebar-theme-slate subheader-fixed">
    <?php include('inc/headerT.php'); ?>
            <!-- Start::Main header  -->
            <header class="main-header bg-card d-flex flex-row justify-content-between align-items-center px-lg">
                <!-- Start::Header menu-->
                <div>
                        <div class="ul-header-menu">
                            <ul class="ul-header-nav">
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link"><?php echo $_SESSION['COURSE_NAME']; ?></a></li>
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Dashboards</a></li>
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
                <div class="subheader px-lg">
                    <div class="subheader-container">
                        <div class="subheader-main d-none d-lg-flex">
                            <nav class="ul-breadcrumb" aria-label="breadcrumb">
                                <ol class="ul-breadcrumb-items">
                                      <li class="breadcrumb-home"><a href="teacher/dashboardT.php"><?php echo $_SESSION['COURSE_NAME']; ?></a></li>
                                    <li class="breadcrumb-item"><a href="teacher/dashboardT.php">Dashboards</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="container mt-lg">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12 mb-lg">
                                    <div class="card">
                                        <div class="px-xl pt-xl pb-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="card-title mb-sm">Welcome Back! <?php echo $_SESSION['TEACHER_NAME']; ?></h4>
                                                    <h6><?php echo $_SESSION['COURSE_NAME']; ?> </h6>
                                            
                                                </div>
                                                <div class="col-md-6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col 1 -->
                            
                        
                                <div class="col-lg-6 mb-lg">
                                    <div class="card bg-danger">
                                        <div class="card-body">
                                            <div class="ul-grid-item d-flex justify-content-between align-items-center p-2">
                                                <?php
                                                    $CID = $_SESSION['CID'];
                                                    $count = 0;
                                                    $select = 0;
                                                    $result = $mysqli->query("SELECT * FROM tblive WHERE CID=$CID") or die($mysqli->error);
                                                    while ($row = $result->fetch_assoc()):
                                                        $select = 1;
                                                        $LiveID = $row['LID'];
                                                        $Title = $row['TITLE'];
                                                        $Link = $row['LINK'];
                                                    endwhile;
                                                ?>
                                              
                                                <?php
                                                    if($select == 1){
                                                ?>
                                                    <span class="badge badge-opacity rounded-circle badge-light mr-sm">
                                                        <h5 class="font-weight-semi text-white m-0"><img src="assets/images/live.gif"></h5>
                                                    </span>
                                                    <div class="ml-2 flex-grow-1">
                                                        <p class="m-0 text-white font-weight-normal">Zoom Live Meeting  <i class="material-icons nav-icon text-16">online_prediction</i></p>
                                                        <p class="text-white text-small m-0"><?php echo $Title; ?></p>
                                                    </div>
                                                    <a href="<?php echo $Link; ?>">
                                                        <button type="button" class="btn btn-raised btn-raised-default">Join Now</button>
                                                    </a>

                                                <?php } else{ ?>
                                                    <div class="ml-2 flex-grow-1">
                                                        <p class="m-0 text-white font-weight-normal">Zoom Live Meeting</p>
                                                        <p class="text-white text-small m-0"></p>
                                                    </div>
                                                    <a>
                                                        <button type="button" class="btn btn-raised btn-raised-default">Not Available</button>
                                                    </a>
                                                <?php } ?>
                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-lg">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="ul-grid-item d-flex justify-content-between align-items-center p-2">
                                                
                                               <?php
                                                    if($select == 1){
                                                ?>
                                                    <div class="ml-2 flex-grow-1">
                                                        <a href="teacher/action/liveControllerT.php?action=delete&id=<?php echo $LiveID; ?>">
                                                            <button class="btn btn-opacity-danger" >End Meeting</button>
                                                        </a>
                                                    </div>
                                                   

                                                <?php }else{ ?>
                                                    <div class="ml-2 flex-grow-1">
                                                    <form action="teacher/action/liveControllerT.php?action=add" method="POST"> 
                                                        <input type="text"  class="form-control" name="Title" placeholder="Title Here" style="width:70%" required>
                                                        <input type="text"  class="form-control" name="Link" placeholder="Invite Link Here" style="width:70%" required>
                                                    </div>
                                                        <button class="btn btn-opacity-primary" name="save" type="submit" >Create Link</button>
                               
                                                    </form>
                                                <?php } ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6 mb-lg">
                                    <div class="card bg-primary">
                                        <div class="card-body">
                                            <div class="ul-grid-item d-flex justify-content-between align-items-center p-2">
                                                <?php
                                                    $CID = $_SESSION['CID'];
                                                    $count = 0;
                                                    $select = 0;
                                                    $result = $mysqli->query("SELECT * FROM tbquiz WHERE CID=$CID") or die($mysqli->error);
                                                    while ($row = $result->fetch_assoc()):
                                                        $select = 1;
                                                        $QuizID = $row['QID'];
                                                        $Title = $row['TITLE'];
                                                        $Link = $row['LINK'];
                                                    endwhile;
                                                ?> 
                                              
                                                <?php
                                                    if($select == 1){
                                                ?>
                                                    <span class="badge badge-opacity rounded-circle badge-light mr-sm">
                                                        <h5 class="font-weight-semi text-white m-0"><img src="assets/images/live.gif"></h5>
                                                    </span>
                                                    <div class="ml-2 flex-grow-1">
                                                        <p class="m-0 text-white font-weight-normal">Online Quiz  <i class="material-icons nav-icon text-16">online_prediction</i></p>
                                                        <p class="text-white text-small m-0"><?php echo $Title; ?></p>
                                                    </div>
                                                    <a href="<?php echo $Link; ?>">
                                                        <button type="button" class="btn btn-raised btn-raised-default">Get Now</button>
                                                    </a>

                                                <?php } else{ ?>
                                                    <div class="ml-2 flex-grow-1">
                                                        <p class="m-0 text-white font-weight-normal">Online Quiz</p>
                                                        <p class="text-white text-small m-0"></p>
                                                    </div>
                                                    <a>
                                                        <button type="button" class="btn btn-raised btn-raised-default">Not Available</button>
                                                    </a>
                                                <?php } ?>
                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-lg">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="ul-grid-item d-flex justify-content-between align-items-center p-2">
                                                
                                               <?php
                                                    if($select == 1){
                                                ?>
                                                    <div class="ml-2 flex-grow-1">
                                                        <a href="teacher/action/quizControllerT.php?action=delete&id=<?php echo $QuizID; ?>">
                                                            <button class="btn btn-opacity-danger" >End Quiz</button>
                                                        </a>
                                                    </div>
                                                   

                                                <?php }else{ ?>
                                                    <div class="ml-2 flex-grow-1">
                                                    <form action="teacher/action/quizControllerT.php?action=add" method="POST"> 
                                                        <input type="text"  class="form-control" name="Title" placeholder="Quiz Title Here" style="width:70%" required>
                                                        <input type="text"  class="form-control" name="Link" placeholder="Quiz Link Here" style="width:70%" required>
                                                    </div>
                                                        <button class="btn btn-opacity-primary" name="save" type="submit" >Create Link</button>
                               
                                                    </form>
                                                <?php } ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-lg-6 mb-lg">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title">Student Status</div>

                                                <div id="piechart" style="width:100%; height:100%"></div>
                               
                                      
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="col-lg-6 mb-lg">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title">Lesons Status</div>

                                            <div id="barchart_values" style="width: 100%; height: 100%;"></div>
                               
                                      
                                        </div>
                                    </div>
                                </div>




                                <div class="col-lg-12 mb-lg">
                                    <div class="card table-responsive">
                                        <table class="table borderless table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-muted">Date</th>
                                                    <th scope="col" class="text-muted">Course</th>
                                                    <th scope="col" class="text-muted">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php 
                                                        $CID = $_SESSION['CID']; 
                                                        $counter = 0;  
                                                        $mydb->setQuery("SELECT * FROM tbllesson WHERE CID = $CID ORDER BY tbllesson.LessonID DESC");
                                                        $cur = $mydb->loadResultList();
                                                        foreach ($cur as $result) {
                                                            $counter++;
                                                            if($counter<=4){
                                                    ?>
                                                <tr>
                                                    <td class="align-middle text-muted"><?php echo $result->Date ?></td>
                                                    <th scope="row" class="align-middle">
                                                        <span class="font-weight-semi"><?php echo $result->LessonChapter ?> (<?php echo $result->LessonTitle ?>)</span>
                                                    </th>
                                                     
                                                    <td class="align-middle">
                                                    <?php
                                                        if($result->Category == 'Video' ){
                                                            echo "<a href='teacher/manageLessonVideoT.php'>";
                                                        }else{
                                                            echo "<a href='teacher/manageLessonPDFT.php'>";
                                                        }
                                                    ?>
                                                       <button type="button" class="btn btn-primary">View</button>
                                                    </a>
                                                    </td>
                                                </tr>
                                                <?php } } ?>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center mb-lg rounded gray-200">
                                        <div class="card-body">
                                            <img class="" src="assets/images/logo1.png" width="200"/>
                                            <?php
                                                        $CID = $_SESSION['CID'];   
                                                        $STCOUNT = 0;
                                                        $mydb->setQuery("SELECT * FROM studentcourses WHERE CID=$CID");
                                                        $cur = $mydb->loadResultList();
                                                        foreach ($cur as $result) {
                                                            $STCOUNT++;
                                                        }
                                                    ?>
                                            <h3 class="m-0 pt-xl pb-xl font-weight-normal"><b><?php echo $STCOUNT; ?> Students</b>  </h3>
                                        </div>
                                    </div>
                                    <div class="ul-list-group-1 mb-xxl">
                                        <h6 class="heading-label">Announcement</h6>
                                                    <form action="teacher/action/annControllerT.php?action=add" method="POST"> 
                                                        <div class="ml-2 flex-grow-1">
                                                            <input type="text"  class="form-control" name="Title"  placeholder="Title Here" style="width:100%" required>
                                                            <textarea class="form-control" aria-label="With textarea"  name="Ann" placeholder="Announcement here" required></textarea><br>
                                                        </div>
                                                        <button class="btn btn-opacity-primary" name="save" type="submit" >SEND</button>
                                                    </form>

                                                    <br>

                                                <?php
                                                    $CID = $_SESSION['CID'];
                                                    $count = 0;
                                                    $result = $mysqli->query("SELECT * FROM announcement WHERE CID=$CID ORDER BY announcement.AID DESC") or die($mysqli->error);
                                                    while ($row = $result->fetch_assoc()):
                                                        $count++;
                                                    
                                                ?>

                                        <div class="ul-list-item mb-md">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="badge badge-opacity rounded-circle badge-light mr-md"><?php echo $count ?></span>
                                                <div class="flex-grow-1">
                                                    <h6 class="text-small font-weight-semi m-0"><?php echo $row['TITLE'];?></h6>
                                                    <small class="text-muted text-small"><?php echo $row['ANNOUNCEMENT']; ?></small>
                                                </div>
                                                <div class="ul-reminder-action">
                                                <a href="teacher/action/annControllerT.php?action=delete&id=<?php echo $row['AID'];; ?>">
                                                    <button class="btn btn-danger btn-icon">
                                                         <i class="material-icons">delete</i>
                                                    </button>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                            <?php endwhile; ?>
                                      
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Start:: content (Your custom content)-->
                <!-- Start:: Footer-->
                <?php include('../include/footer.php'); ?>
                <!-- End:: Footer-->
            </div>
            <!-- End:: content body-->


        </div>
    </div>





    <div class="ul-sidebar-panel-overlay"></div>
    <script src="assets/js/vendors.bundle.min.js"></script>
    <script src="assets/js/main.bundle.min.js"></script>
    <script src="assets/vendors/echarts/dist/echarts.min.js"></script>
    <script src="assets/js/pages/dashboard/learningManagement.min.js"></script>
</body>

</html>