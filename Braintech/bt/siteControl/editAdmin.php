<?php require_once ("../inc/connection.php"); ?>
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
		        <?php
                    $id = $_GET['id'];
                    $result = $mysqli->query("SELECT * FROM dbuser WHERE USER_ID = $id") or die($mysqli->error);
                    while ($row = $result->fetch_assoc()): 
                ?>


        <!-- Contact Section Start -->
        <div class="contact-page-section sec-spacer">
        	<div class="container">
        

        		<div class="contact-comment-section">
        			<h3>Add Admin User</h3>
                    <div id="form-messages"></div>
					<form id="contact-form" method="post" action="siteControl/action/controlAdmins.php?action=edit" enctype="multipart/form-data">
						<fieldset>

                        <input name="USER_ID" id="subject" class="form-control" type="hidden" value="<?php echo $row['USER_ID']; ?>">
							<div class="row">                                      
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Name*</label>
										<input name="NAME" id="fname" class="form-control" type="text" value="<?php echo $row['USER_NAME']; ?>">
									</div>
								</div>
							</div>
							
                           
                            
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>User Name*</label>
										<input name="USER_NAME" id="subject" class="form-control" type="text" value="<?php echo $row['USER_USERNAME']; ?>">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Password *</label>
										<input name="PASSWORD" id="subject" class="form-control" type="password" required>
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



        <?php endwhile; ?>





       
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