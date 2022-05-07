
                <?php
                    $CID = $_SESSION['STCID'];
                                                
                    $result = $mysqli->query("SELECT * FROM tbcourse WHERE CID=$CID") or die($mysqli->error);
                    while ($row = $result->fetch_assoc()):
                        $CourseName = $row['COURSE_NAME'];
                    endwhile;
                ?>


        <div class="sidebar-panel">
            <div class="brand"><img src="assets/images/logo.png" alt="" /><span class="app-logo-text ml-2 text-20"><font color="#ff058b">BRAIN</font>TECH</span></div>
            <!-- Start:: user-->
            <div class="scroll-nav" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <div class="app-user text-center">
                    <div class="app-user-info"><span class="app-user-name"><?php echo $_SESSION['Fname']; ?></span>
                    <div class="app-user-control"><span class="badge badge-rounded badge-sm badge-primary"><?php echo $CourseName; ?></span></div>
                    </div>
                </div>
                <!-- End:: user-->
                <!-- Start:: side-nav-->
                <div class="side-nav">
                    <div class="main-menu">
                        <nav class="sidebar-nav">
                            <ul class="metismenu show-on-load" id="ul-menu">
                                     
                                <li><a href="student/STDashboard.php"><i class="material-icons nav-icon text-16">dashboard</i>Dashboard</a></li>

                                <li><a class="has-arrow" href="#"><i class="material-icons nav-icon">web</i>Lessons</a>
                                    <ul class="mm-collapse">
                                        <li><a href="student/lessonVideo.php"><i class="bullet-icon"></i>Video Lessons</a></li>
                                        <li><a href="student/lessonDocs.php"><i class="bullet-icon"></i>PDF Lessons</a></li>
                                    </ul>
                                </li>
                                <li><a href="student/exeLesson.php"><i class="material-icons nav-icon text-16">style</i>Exercises</a></li>
                                
                                <li><a href="student/timetable.php"><i class="material-icons nav-icon text-16">today</i>Time Table</a></li>
                                        
                              <span class="main-menu-title">Others</span>

                                <!--<li><a href="student/addPaymentDetails.php"><i class="material-icons nav-icon text-16">monetization_on</i>Payments</a></li>-->
                                <li><a href="student/courseManager.php"><i class="material-icons nav-icon text-16">build_circle</i>Change Classroom</a></li>
                              
                                <li><a href="student/videoGallery.php"><i class="material-icons nav-icon text-16">perm_media</i>Gallery</a></li>
                                
                                <li><a href="student/action/logout.php"><i class="material-icons nav-icon text-16">power_settings_new</i>Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content-wrap">
            <!-- Start::Mobile header-->
            <div class="ul-mobile-top-header bg-slate"><img class="ul-brand-mobile" src="assets/images/logo.png" alt="" />
                <div class="flex-grow-1"></div>
                <button class="sidebar-full-toggle btn btn-icon btn-primary rounded-circle text-white"><i class="material-icons">menu</i></button>
                <button class="btn btn-icon btn-icon btn-primary rounded-circle text-white"><i class="material-icons text-white ul-mobile-header-toggle">more_vert</i></button>
            </div>
            <!-- End::Mobile header  -->