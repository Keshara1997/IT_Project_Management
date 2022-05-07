<?php require_once ("../inc/connection.php");
header("X-XSS-Protection: 1; mode=block"); ?>

<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 22:44:04 GMT -->
    <head>
        <base href="../" />
		<!--include head items-->
		<?php include('../inc/head.php'); ?>  
    </head>
    <body class="inner-page">
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

		<!--include Top Navigation-->
		<?php include('../inc/topNav.php'); ?>  
		
			<!--Header Start-->
                <header id="rs-header-2" class="rs-header-2">
                    <?php include('../inc/menu.php'); ?>  
                </header>
			<!--Header End-->

		</div>
        <!--Full width header End-->
		
		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">Registration</h1>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->


        <div class="rs-check-out sec-spacer">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-12">
						<h3 class="title-bg">Student Details</h3>
						<div class="check-out-box">
							<form id="contact-form" method="post" action="site/register_controller.php">
								<fieldset>
									<div class="row">                                      
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>First Name*</label>
												<input id="FNAME" name="FNAME" class="form-control" type="text" required>
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Last Name*</label>
												<input name="LNAME" class="form-control" type="text" required>
											</div>
										</div>
									</div>
									<div class="row"> 
										<div class="col-md-12 col-sm-12 col-xs-12">    
											<div class="form-group">
												<label>School</label>
												<input name="SCHOOL" class="form-control" type="text">
											</div>
										</div>
                                    </div>
                                    <div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>NIC No</label>
												<input id="NIC_NO" name="NIC_NO" class="form-control" type="text">
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Age*</label>
												<input name="AGE" class="form-control" type="text" required>
											</div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Email</label>
												<input id="email" name="EMAIL" class="form-control" type="email">
											</div>
										</div>
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Phone*</label>
												<input name="PHONE" class="form-control" type="text" required>
											</div>
                                        </div>
                                    </div>
                                    <div class="row"> 
										<div class="col-md-12 col-sm-12 col-xs-12">    
											<div class="form-group">
												<label>Address*</label>
												<textarea name="ADDRESS" class="form-control" type="text" required></textarea>
											</div>
										</div>
                                    </div>
                                    <br>
                                    <h3 class="title">Course Details</h3>
									<div class="row"> 
										<div class="col-md-12 col-sm-12 col-xs-12">    
											<div class="form-group">
												<label>Course*</label>
                                                <select name="COURSE" required>
                                                <?php
                                                    $result = $mysqli->query("SELECT * FROM dbcourse") or die($mysqli->error);
                                                    while ($row = $result->fetch_assoc()): 
                                                ?>
                                                    <option value="<?php echo $row['COURSE_ID']; ?>"><?php echo $row['COURSE_NAME']; ?></option>
                                                <?php endwhile; ?>
                                                </select>
											</div>
										</div>
                                    </div>
                                    <div class="row">
										<div class="col-lg-6 col-md-12">
											<div class="form-group">
												<label>Grade</label>
												<select name="GRADE">
                                                    <option>PRE - SCHOOL</option>
                                                    <option>Grade 01</option>
                                                    <option>Grade 02</option>
                                                    <option>Grade 03</option>
                                                    <option>Grade 04</option>
                                                    <option>Grade 05</option>
                                                    <option>Grade 06</option>
                                                    <option>Grade 07</option>
                                                    <option>Grade 08</option>
                                                    <option>Grade 09</option>
                                                    <option>Grade 10</option>
                                                    <option>Grade 11</option>
                                                    <option>Grade 12</option>
                                                    <option>Grade 13</option>
                                                </select>
											</div>
										</div>
                                    </div>
									
									<div class="checkbox">
								    	<label><input type="checkbox" value="AGREE" name="AGREE" checked required>Agree with terms & Condition?</label>
                                    </div>  
                                    
                                    <div class="rs-payment-system">
                                        <input class="btn-send" type="submit" value="Submit" name="submit">
                                    </div>
								</fieldset>
							</form>	
						</div>
                        
                        
                   
					</div>
					<div class="col-lg-4 col-md-12">
						<h3 class="title-bg">Read This</h3>
						<div class="rs-payment-system" style="background-color:#ffdede;">
							<div class="payment-radio-btn1">
								IMPORTANT
								<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, provident reprehenderit? Beatae, nostrum ipsam harum blanditiis odit. Illum ex consequatur expedita vitae.</p>
							</div>
						</div>		
					</div>
				</div>
			</div>
		</div>
	
		
<br><br><br>
       
       		<!--include footer-->
		<?php include('../inc/footer.php'); ?>  

<!-- start scrollUp  -->
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>

  <!--include jsFile-->
<?php include('../inc/incJs.php'); ?>  
    </body>

<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 22:44:30 GMT -->
</html>