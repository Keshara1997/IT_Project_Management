<?php require_once ("action/direct.php"); ?>


<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 22:35:55 GMT -->
    <head>
        <base href="../" />
		<!--include head items-->
		<?php include('inc/head.php'); ?>  
    </head>
    <body class="home1">
        <!--Preloader area start here-->
        <div class="book_preload">
            <div class="book">
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
            </div>
        </div>
		<!--Preloader area end here-->
		
        <!--Full width header Start-->
		<div class="full-width-header">

			<!-- Toolbar Start -->
                <!--include tool bar-->
                <?php include('inc/adminTopNav.php'); ?>  
			<!-- Toolbar End -->
			
			<!--Header Start-->
			<header id="rs-header" class="rs-header">
				

				<!-- Menu Start -->
				<div class="menu-area menu-sticky">
					<div class="container">
						<div class="main-menu">
							<div class="row">
								<div class="col-sm-12">
									<!-- <div id="logo-sticky" class="text-center">
										<a href="index.html"><img src="images/logo.png" alt="logo"></a>
									</div> -->
									<a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
									<nav class="rs-menu">
										<ul class="nav-menu">
											<!--Contact Menu Start-->
											<li> <a href="siteControl/dashboard.php">DASHBOARD</a></li>
								            <!--Contact Menu End-->
										</ul>
									</nav>
                                    <div class="right-bar-icon rs-offcanvas-link text-right">
                                        <a id="nav-expander" class="nav-expander fixed"><i class="fa fa-bars fa-lg white"></i></a>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Menu End -->
			</header>
			<!--Header End-->
		</div>
        <!--Full width header End-->
		


        <!-- Contact Section Start -->
        <div class="contact-page-section sec-spacer">
        	<div class="container">
        

        		<div class="contact-comment-section">
        			<h3>Add Course</h3>
                    <div id="form-messages"></div>
					<form id="contact-form" method="post" action="siteControl/action/controlCourse.php?action=add" enctype="multipart/form-data">
						<fieldset>
							<div class="row">                                      
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Course Name*</label>
										<input name="COURSE_NAME" id="fname" class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Course Price*</label>
										<input name="COURSE_PRICE" id="lname" class="form-control" type="text">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Lectures*</label>
										<input name="LECTURES" id="email" class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Duration *</label>
										<input name="DURATION" id="subject" class="form-control" type="text">
									</div>
								</div>
                            </div>
                            <div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Skill Level*</label>
										<input name="SKILL_LEVEL" id="email" class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Language *</label>
										<input name="LANGUAGE" id="subject" class="form-control" type="text">
									</div>
								</div>
                            </div>
                            <div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Exams*</label>
										<input name="EXAMS" id="email" class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Assessments*</label>
										<input name="ASSESSMENT" id="subject" class="form-control" type="text">
									</div>
								</div>
                            </div>
                            <div class="row">                                      
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Upload Header Image* (770 x 470)</label>
										<input name="HEADER_IMG" id="fname" class="form-control" type="file">
									</div>
								</div>
							</div>
							<div class="row"> 
								<div class="col-md-12 col-sm-12">    
									<div class="form-group">
										<label>Description 01 (Only Characters 255) *</label>
										<textarea cols="40" rows="5" id="message" name="DESCRIPTION_01" class="textarea form-control"></textarea>
									</div>
								</div>
                            </div>	
                            <div class="row"> 
								<div class="col-md-12 col-sm-12">    
									<div class="form-group">
										<label>Description 02 (Only Characters 255)</label>
										<textarea cols="40" rows="4" id="message" name="DESCRIPTION_02" class="textarea form-control"></textarea>
									</div>
								</div>
                            </div>
                            <br>
                            
                            <h3>About Instrucor</h3>


                            <div class="row">                                      
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Teacher Name*</label>
										<input name="TEACHER_NAME" id="fname" class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Categories*</label>
										<input name="TEACHER_CATEGORIES" id="lname" class="form-control" type="text">
									</div>
								</div>
                            </div>
                            <div class="row">                                      
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Upload Image* (270 x 270)</label>
										<input name="TEACHER_IMG" id="fname" class="form-control" type="file">
									</div>
								</div>
							</div>
							<div class="form-group mb-0">
								<input class="btn-send" type="submit" value="Submit Now" name="save">
							</div>
							   
						</fieldset>
					</form>						
        		</div>
        	</div>
        </div>
        <!-- Contact Section End -->  









       
        <!-- Footer Start -->
          
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
		    <!--include Menu-->
            <?php include('inc/adminMenu.php'); ?>  
		    <!--include JS-->
            <?php include('inc/adminJS.php'); ?>  
    </body>

<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 22:37:43 GMT -->
</html>

