
    <div class="sidebar-panel">
            <div class="brand"><img src="assets/images/logo.png" alt="" /><span class="app-logo-text ml-2 text-20"><font color="#ff058b">BRAIN</font>TECH</span></div>
            <!-- Start:: user-->
            <div class="scroll-nav" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <div class="app-user text-center">
                    <div class="app-user-photo"><img src="assets/images/faces/1.png" alt="" /></div>
                    <div class="app-user-info"><span class="app-user-name"><?php echo $_SESSION['NAME']; ?></span>
                    </div>
                </div>
                <!-- End:: user-->
                <!-- Start:: side-nav-->
                <div class="side-nav">
                    <div class="main-menu">
                        <nav class="sidebar-nav">
                            <ul class="metismenu show-on-load" id="ul-menu">
                                <li><a href="admin/courseSelector.php"><i class="material-icons nav-icon">cast_for_education</i>Classroom Selector</a></li>

                                <li><a href="admin/addCourse.php"><i class="material-icons nav-icon">add_circle</i>Create New Classroom</a></li>

                                <li><a href="admin/deleteCourse.php"><i class="material-icons nav-icon">delete_forever</i>Delete Classroom</a></li>
       
                              <span class="main-menu-title">Users</span>
                              
                                <li><a class="has-arrow" href="#"><i class="material-icons nav-icon">supervised_user_circle</i>Students</a>
                                    <ul class="mm-collapse">
                                        <li><a href="admin/addStudent.php"><i class="bullet-icon"></i>Add Student</a></li>
                                        <li><a href="admin/manageStudent.php"><i class="bullet-icon"></i>Manage Students</a></li>
                                    </ul>
                                </li>
                                <li><a class="has-arrow" href="#"><i class="material-icons nav-icon">account_circle</i>Teachers</a>
                                    <ul class="mm-collapse">
                                        <li><a href="admin/addTeacher.php"><i class="bullet-icon"></i>Add Teachers</a></li>
                                        <li><a href="admin/manageTeacher.php"><i class="bullet-icon"></i>Manage Teachers</a></li>
                                    </ul>
                                </li>
                                <li><a class="has-arrow" href="#"><i class="material-icons nav-icon">account_circle</i>Attendents</a>
                                    <ul class="mm-collapse">
                                        <li><a href="admin/addAttendent.php"><i class="bullet-icon"></i>Add Attendents</a></li>
                                        <li><a href="admin/manageAttendent.php"><i class="bullet-icon"></i>Manage Attendents</a></li>
                                    </ul>
                                </li>
                                <span class="main-menu-title">Others    </span>
                                <li><a href="https://node235.r-usdatacenter.register.lk:2096/cpsess5764289445/3rdparty/roundcube/?_task=mail&_mbox=INBOX"><i class="material-icons nav-icon">email</i>Email</a></li>
                                <li><a href="admin/help.php"><i class="material-icons nav-icon">help</i>Help</a></li>
                                <li><a href="admin/action/logout.php"><i class="material-icons nav-icon text-16">login</i>Logout</a></li>
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
                <button class="btn btn-icon  btn-icon btn-primary rounded-circle text-white"><i class="material-icons text-white ul-mobile-header-toggle">more_vert</i></button>
            </div>
            
            <!-- End::Mobile header  -->