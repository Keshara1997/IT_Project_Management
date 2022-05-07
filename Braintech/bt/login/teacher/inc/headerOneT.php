
    <div class="sidebar-panel">
            <div class="brand"><img src="assets/images/logo.png" alt="" /><span class="app-logo-text ml-2 text-20"><font color="#ff058b">BRAIN</font>TECH</span></div>
            <!-- Start:: user-->
            <div class="scroll-nav" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <div class="app-user text-center">
                    <div class="app-user-photo"><img src="assets/images/faces/1.png" alt="" /></div>
                    <div class="app-user-info"><span class="app-user-name"><?php echo $_SESSION['TEACHER_NAME']; ?></span>
                    </div>
                </div>
                <!-- End:: user-->
                <!-- Start:: side-nav-->
                <div class="side-nav">
                    <div class="main-menu">
                        <nav class="sidebar-nav">
                            <ul class="metismenu show-on-load" id="ul-menu">
                                <li><a href="teacher/courseSelectorT.php"><i class="material-icons nav-icon">cast_for_education</i>Classroom Selector</a></li>

       
                              <span class="main-menu-title">Other</span>
                             
                                <li><a href="teacher/helpT.php"><i class="material-icons nav-icon">help</i>Help</a></li>
                                <li><a href="teacher/action/logoutT.php"><i class="material-icons nav-icon text-16">login</i>Logout</a></li>
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