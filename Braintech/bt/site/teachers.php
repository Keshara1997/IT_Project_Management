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
		<div class="rs-breadcrumbs bg16 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">OUR TEACHERS</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.php">Home</a>
		                        </li>
		                        <li>Our Teachers</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

		<!-- Team Start -->
        <div id="rs-team-2" class="rs-team-2 team-page sec-spacer">
			<div class="container">
				<div class="row grid">

				<?php
                    $result = $mysqli->query("SELECT * FROM dbteacher") or die($mysqli->error);
                    while ($row = $result->fetch_assoc()): 
                ?>

					<div class="col-lg-3 col-md-6 col-xs-6 grid-item filter1">
		                <div class="team-item">
		                    <div class="team-img">
		                        <a><img src="uploads/teacher<?php echo $row['TEACHER_IMG']; ?>" alt="" /></a>
		                        <div class="social-icon">
		                        	<a href="<?php echo $row['FACEBOOK_LINK']; ?>"><i class="fa fa-facebook"></i></a>
		                        	<a href="<?php echo $row['TWITTER_LINK']; ?>"><i class="fa fa-twitter"></i></a>
		                        	  
		                        </div>
		                    </div>
		                    <div class="team-body">
		                    	<a><h3 class="name"><?php echo $row['TEACHER_NAME']; ?></h3></a>
		                    	<span class="designation"><?php echo $row['SUBJECT']; ?></span>
		                    </div>
		                </div>						
					</div>
			
				<?php endwhile; ?>
				
			    </div>
			</div>
        </div>
        <!-- Team End -->
				

       
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