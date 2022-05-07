
        <div class="sidebar-panel">
            <div class="brand"><img src="assets/images/logo.png" alt="" /><span class="app-logo-text ml-2 text-20"><font color="#2ECCFA">PRAGATHI</font></span></div>
            <!-- Start:: user-->
            <div class="scroll-nav" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <div class="app-user text-center">
                    <div class="app-user-info"><span class="app-user-name"></span>
                    <div class="app-user-control"><span class="badge badge-rounded badge-sm badge-primary"><?php echo $_SESSION['COURSE_NAME']; ?></span></div>
                    </div>
                    
                </div>
                <!-- End:: user-->
                <!-- Start:: side-nav-->
                <div class="side-nav">
                    <div class="main-menu">
                        <nav class="sidebar-nav">
                            <ul class="metismenu show-on-load" id="ul-menu">
                                <li class="mm-active"><a href="teacher/dashboardT.php"><i class="material-icons nav-icon">dashboard</i>Dashboards</a>
                                    

                                <li><a class="has-arrow" href="#"><i class="material-icons nav-icon">web</i>Lessons</a>
                                    <ul class="mm-collapse">
                                        <li><a href="teacher/addLessonT.php"><i class="bullet-icon"></i>Add Lesson</a></li>
                                        <li><a href="teacher/manageLessonVideoT.php"><i class="bullet-icon"></i>Manage Video Lesson</a></li>
                                        <li><a href="teacher/manageLessonPDFT.php"><i class="bullet-icon"></i>Manage PDF Lesson</a></li>
                                    </ul>
                                </li>

                                <li><a class="has-arrow" href="#"><i class="material-icons nav-icon text-16">style</i>Exercises</a>
                                    <ul class="mm-collapse">
                                        <li><a href="teacher/addExercisesT.php"><i class="bullet-icon"></i>Add Exercises</a></li>
                                        <li><a href="teacher/manageExercisesT.php"><i class="bullet-icon"></i>Manage Exercises</a></li>
                                        <li><a href="teacher/submittedT.php"><i class="bullet-icon"></i>Submitted Exercises</a></li>
                                    </ul>
                                </li>

                                <li><a class="has-arrow" href="#"><i class="material-icons nav-icon">today</i>Time Table</a>
                                    <ul class="mm-collapse">
                                        <li><a href="teacher/addTimetableT.php"><i class="bullet-icon"></i>Add Time Table</a></li>
                                        <li><a href="teacher/manageTimetableT.php"><i class="bullet-icon"></i>Manage Time Table</a></li>
                                    </ul>
                                </li>

                                <li><a  href="teacher/manageStudentT.php"><i class="material-icons nav-icon">account_circle</i>Students</a></li>

                                        
                              <span class="main-menu-title">Others</span>
                              <li><a href="teacher/paymentT.php"><i class="material-icons nav-icon text-16">monetization_on</i>Payments </a></li>
                               
                                <li><a href="teacher/courseSelectorT.php"><i class="material-icons nav-icon text-16">build_circle</i>Change Class Room</a></li>
                                <li><a href="teacher/action/logoutT.php"><i class="material-icons nav-icon text-16">login</i>Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content-wrap">
            <!-- Start::Mobile header-->
            <div class="ul-mobile-top-header bg-slate"><img class="ul-brand-mobile" src="assets/images/logo.png"alt="" />
                <div class="flex-grow-1"></div>
                <button class="sidebar-full-toggle btn btn-icon btn-primary rounded-circle text-white"><i class="material-icons">menu</i></button>
                <button class="btn btn-icon  btn-icon btn-primary rounded-circle text-white"><i class="material-icons text-white ul-mobile-header-toggle">more_vert</i></button>
            </div>
            <!-- End::Mobile header  -->