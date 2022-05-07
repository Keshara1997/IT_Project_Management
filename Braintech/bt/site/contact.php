<?php
	require_once ("../inc/connection.php");
    $errors = array();


		if(isset($_POST['save'])){

                $FNAME            = mysqli_real_escape_string($mysqli,test_input($_POST['fname']));
				$LNAME            = mysqli_real_escape_string($mysqli,test_input($_POST['lname']));
				$EMAIL            = mysqli_real_escape_string($mysqli,test_input($_POST['email']));
				$SUBJECT          = mysqli_real_escape_string($mysqli,test_input($_POST['subject']));
				$MESSAGE          = mysqli_real_escape_string($mysqli,test_input($_POST['message']));

                $result = $mysqli->query("INSERT into dbmessage (NAME,EMAIL,PHONE,MESSAGE) 
                VALUES('$FNAME $LNAME','$EMAIL','$SUBJECT','$MESSAGE')") or die($mysqli->error);
                
				if ($result === TRUE) {
                	echo "<script>alert('Message Sent');location='contact.php';</script> ";
				} else {
					echo "<script>alert('Error');location='contact.php';</script> ";
				}
	
		}
    

?>


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
		<div class="rs-breadcrumbs bg17 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">Contact</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.php">Home</a>
		                        </li>
		                        <li>Contact</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

		<!-- Contact Section Start -->
		<div class="contact-page-section sec-spacer">
        	<div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d477.0065841914392!2d80.34542072446433!3d7.248812805491291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3172ca4ab8e6f%3A0xb37b8b410deca2ee!2sBrainTech%20Institute!5e0!3m2!1sen!2slk!4v1608056963147!5m2!1sen!2slk" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        		<div class="row contact-address-section">
    				<div class="col-md-4 pl-0">
    					<div class="contact-info contact-address">
    						<i class="fa fa-map-marker"></i>
    						<h4>Address</h4>
    						<p>163/120 Kalugalla Mawatha,</p>
							<p>Kegalle.Sri Lanka</p>
    					</div>
    				</div>
    				<div class="col-md-4">
    					<div class="contact-info contact-phone">
    						<i class="fa fa-phone"></i>
    						<h4>Phone Number</h4>
    						<a href="tel:+94353353354">+94 35 335 3354</a>
    						<a href="tel:+94705669566">+94 70 566 9566</a>
    					</div>
    				</div>
    				<div class="col-md-4 pr-0">
    					<div class="contact-info contact-email">
    						<i class="fa fa-envelope"></i>
    						<h4>Email Address</h4>
    						<a href="mailto:infoname@gmail.com"><p>info@braintech.lk</p></a>
							<p><br></p>
        				</div>
        			</div>
        		</div>

        		<div class="contact-comment-section">
        			<h3>Leave Comment</h3>
                    <div id="form-messages"></div>
					<form id="contact-form" method="post" action="site/contact.php?action=add" enctype="multipart/form-data">
						<fieldset>
							<div class="row">                                      
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>First Name*</label>
										<input name="fname" id="fname" class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Last Name*</label>
										<input name="lname" id="lname" class="form-control" type="text">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Email*</label>
										<input name="email" id="email" class="form-control" type="email">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Phone*</label>
										<input name="subject" id="subject" class="form-control" type="text">
									</div>
								</div>
							</div>
							<div class="row"> 
								<div class="col-md-12 col-sm-12">    
									<div class="form-group">
										<label>Message*</label>
										<textarea cols="40" rows="5" id="message" name="message" class="textarea form-control"></textarea>
									</div>
								</div>
							</div>							        
							<div class="form-group mb-0">
								<input class="btn-send" type="submit" name="save" value="Submit Now">
							</div>
							   
						</fieldset>
					</form>						
        		</div>
        	</div>
        </div>
        <!-- Contact Section End -->     
				
		<br><br>
       
       		<!--include footer-->
		<?php include('../inc/footer.php'); ?>  

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>

        <!--include jsFile-->
        <?php include('../inc/incJs.php'); ?>  

		    <!-- Load Facebook SDK for JavaScript -->
			<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="100775911928221">
      </div>
    </body>

<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 22:44:30 GMT -->
</html>