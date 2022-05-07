<?php 
    require_once ("../include/initialize.php");
    require_once ("../include/connection.php");
    require_once("inc/redirectT.php");
?>


<!DOCTYPE html>
<html>

<head>
    <base href="../" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PRAGATHI | HELP</title>
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
                                <li class="ul-menu-item ul-menu-item--active"><a class="ul-menu-link">Help</a></li>
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
            
            <div class="subheader px-lg"></div>
                <div class="container">
                    <div class="row pt-xxxl">
                        <div class="col-md-12 text-center pt-xxxl">
                            <h1 class="mb-xl">Hi <?php echo $_SESSION['TEACHER_NAME']; ?>, How can we help you?</h1>
                            <form class="mb-xxxl" action="">
                                <div class="custom-input-1 bg-card light mx-auto py-sm pl-md text-16 mb-xxxl border-0 shadow-6dp show-on-load" style="max-width: 400px">
                                    <i class="material-icons">search</i>
                                    <input type="text" class="" id="" placeholder="Search knowledge base" aria-describedby="">
                                    <button class="btn btn-raised btn-primary" type="submit">Search</button></div>
                            </form>
                   
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 py-xl mb-lg">
                            <div class="nav-pills-primary">
                                <ul class="nav nav-pills-card justify-content-center mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link m-sm active" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-home" aria-selected="true"><i class="material-icons icon text-33 mb-sm">class</i>
                                            <p class="font-weight-semi m-0">Classroom</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link m-sm" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-home" aria-selected="true"><i class="material-icons icon text-33 mb-sm">article</i>
                                            <p class="font-weight-semi m-0">Lessons</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link m-sm" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-home" aria-selected="true"><i class="material-icons icon text-33 mb-sm">help</i>
                                            <p class="font-weight-semi m-0">Exercises</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link m-sm" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-home" aria-selected="true"><i class="material-icons icon text-33 mb-sm">supervisor_account</i>
                                            <p class="font-weight-semi m-0">Students</p>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="accordion" id="accordion1">
                                            <div class="card">
                                                <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link">
                                                            How to Work Classroom? 

                                                        </button>
                                                    </h5>
                                                </div>
                                                <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion1">
                                                    <div class="card-body">
                                                        You need to create a classroom before you can do a lesson. 
                                                        After creating this you can add lessons, students, exercises and announcement to the classroom you have created. 
                                                        You can create as many classrooms as you want and do the teaching.
                                                        When you have finished creating a classroom you will get a dashboard related to that classroom which will have 
                                                        the ability to control everything in the classroom you have created.

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link">
                                                            How to Create Classroom?

                                                        </button>
                                                    </h5>
                                                </div>
                                                <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion1">
                                                    <div class="card-body">
                                                    Once you log in to the system you can create a new classroom by clicking the 
                                                    <span class="badge badge-secondary">Create New Classroom</span> button in the slide bar on the left side of the dashboard and filling and submitting the form. 
                                                    After you create the classroom, the new classroom you created will be added to the <span class="badge badge-secondary">Classroom Selector</span> page. 
                                                    Click on the <span class="badge badge-rounded badge-primary">Dashboard</span> button to go to the dashboard created for that classroom. 
                                                    If you created an unwanted classroom, you can remove it under the <span class="badge badge-secondary">Delete Classroom</span> option on the left side bar of the Dashboard.

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="pills-2" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="accordion" id="accordion2">
                                            <div class="card">
                                                <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapse2-1" aria-expanded="true" aria-controls="collapse2-1">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link">
                                                             How to control Lessons?

                                                        </button>
                                                    </h5>
                                                </div>
                                                <div class="collapse show" id="collapse2-1" aria-labelledby="headingOne" data-parent="#accordion2">
                                                    <div class="card-body">
                                                        There are three ways to present lessons to students in the system. <br>
                                                        <ol>
                                                            <li>Upload Video as Video</li>
                                                            <li>Upload Lesson as PDF Document</li>
                                                            <li>Zoom Live Meeting</li>
                                                        </ol>
                                                        You have the ability to present your lessons in all three of these ways to the classroom you created.    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapse2-2" aria-expanded="false" aria-controls="collapse2-2">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link">
                                                            How to upload and manage a Video Lesson or PDF Lesson?

                                                        </button>
                                                    </h5>
                                                </div>
                                                <div class="collapse" id="collapse2-2" aria-labelledby="headingTwo" data-parent="#accordion2">
                                                    <div class="card-body">
                                                    You can upload your video or PDF lesson by filling out the form you get by selecting the
                                                     <b><span class="badge badge-secondary">Add Lesson</span> option under the <span class="badge badge-secondary">Lesson</span> option</b> in the left column of your selected classroom. 
                                                     The <span class="badge badge-secondary">Manage Video Lesson</span> and <span class="badge badge-secondary">Manage PDF Lesson</span> options under the <span class="badge badge-secondary">Lesson</span> option also allow you to watching,
                                                      editing and deleting uploaded videos or pdf lessons.

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header collapsed" id="headingThree" data-toggle="collapse" data-target="#collapse2-3" aria-expanded="false" aria-controls="collapseThree">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link">
                                                            How to control Zoom Live Meetings?

                                                        </button>
                                                    </h5>
                                                </div>
                                                <div class="collapse" id="collapse2-3" aria-labelledby="headingThree" data-parent="#accordion2">
                                                    <div class="card-body">
                                                    First you need to host a meeting through the zoom meeting web application. 
                                                    After hosting, place the invite link you receive in the text box of the live 
                                                    zoom meeting form link in the dashboard of your selected classroom. and fill in 
                                                    the title tex box above it. after, click the create link button and the students 
                                                    registered in the classroom of your choice will receive the invite link in the zoom meeting.



                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="pills-3" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="accordion" id="accordion2">
                                            <div class="card">
                                                <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapse2-1" aria-expanded="true" aria-controls="collapse2-1">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link">
                                                        How to control Exercises?

                                                        </button>
                                                    </h5>
                                                </div>
                                                <div class="collapse show" id="collapse2-1" aria-labelledby="headingOne" data-parent="#accordion2">
                                                    <div class="card-body">
                                                    The <span class="badge badge-secondary">add Exercise</span> option under the <span class="badge badge-secondary">Exercises</span> option in the selected classroom 
                                                    allows you to provide Exercises to the students in the selected classroom. You can view the 
                                                    exercises uploaded to the classroom of your choice by selecting the <span class="badge badge-secondary">Manage Exercises</span> option 
                                                    under <span class="badge badge-secondary">add Exercises</span> option in the left column. This includes the ability to remove unnecessary exercises.

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapse2-2" aria-expanded="false" aria-controls="collapse2-2">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link">
                                                            How to get Submitted Exercises?

                                                        </button>
                                                    </h5>
                                                </div>
                                                <div class="collapse" id="collapse2-2" aria-labelledby="headingTwo" data-parent="#accordion2">
                                                    <div class="card-body">
                                                    The <span class="badge badge-secondary">Submitted Exercise</span> option under <span class="badge badge-secondary">Exercises</span> in the left column of the selected classroom allows 
                                                    you to view the exercises submitted by the students by answering the previously mentioned exercises.

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show" id="pills-4" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="accordion" id="accordion2">
                                            <div class="card">
                                                <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapse2-1" aria-expanded="true" aria-controls="collapse2-1">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link">
                                                            How to Register Student in the classroom?

                                                        </button>
                                                    </h5>
                                                </div>
                                                <div class="collapse show" id="collapse2-1" aria-labelledby="headingOne" data-parent="#accordion2">
                                                    <div class="card-body">
                                                    You can register student in the classroom by filling out the form you get by clicking on the 
                                                    <span class="badge badge-secondary">add Student</span> option under the <span class="badge badge-secondary">Student Manager</span> 
                                                    option in the left pane of the dashboard that 
                                                    you receive for the classroom of your choice. <b>The student will then be able to access our 
                                                    system using the username and password you set.</b>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapse2-2" aria-expanded="false" aria-controls="collapse2-2">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link">
                                                            How to Manage Students?

                                                        </button>
                                                    </h5>
                                                </div>
                                                <div class="collapse" id="collapse2-2" aria-labelledby="headingTwo" data-parent="#accordion2">
                                                    <div class="card-body">
                                                    Click on the <span class="badge badge-secondary">Manage Student</span> option under the <span class="badge badge-secondary">Student Manager</span> option in the left column of 
                                                    your selected classroom and you will see a list of students who have already registered for this 
                                                    classroom. The student's details can be edited as required by clicking on the 
                                                    <button class="btn text-primary rounded-circle m-0 btn-sm btn-icon"><i class="material-icons">edit</i></button> (edit icon)
                                                    in table's action column and the student can be removed from the system by clicking on the 
                                                    <button class="btn text-danger rounded-circle m-0 btn-sm btn-icon"><i class="material-icons">delete</i></button> (delete icon)
                                                     in the action column. <b>If such a student is removed, the student will not be able to re-enter 
                                                    the system.</b>

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