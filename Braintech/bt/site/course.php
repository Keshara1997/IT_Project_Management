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
		                    <h1 class="page-title">OUR COURSES</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.php">Home</a>
		                        </li>
		                        <li>Our Courses</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->
<br>
		<div class="container">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- AD6 -->
		<ins class="adsbygoogle"
			style="display:inline-block;width:100%;height:90px"
			data-ad-client="ca-pub-7547377132401174"
			data-ad-slot="6156196030"></ins>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		</div>

		<!-- Courses Start -->
        <div id="rs-courses-3" class="rs-courses-3 sec-spacer">
			<div class="container">
				<div class="abt-title">
				    <h2>OUR COURSES</h2>
				</div>
				<div class="row grid">

				<div class="col-lg-4 col-md-6 grid-item filter1">
		                <div class="course-item">
		                    <div class="course-img">
		                        <img src="uploads/coursecourse05 - Copy.jpg" alt="" width="370px" height="270px"/>
		                    </div>
		                    <div class="course-body">
		                    	<div class="course-desc">
									<h4 class="course-title">
										<a href="site/ICT_AL.php">
											Advanced Level ICT
										</a>
									</h4>
		                    		<p></p>
		                    	</div>
		                    </div>
		                    <div class="course-footer">
		                    	<div class="course-seats">
		                    		<i class="fa fa-users"></i> ICT 
		                    	</div>
		                    	<div class="course-button">
		                    		<a href="site/ICT_AL.php">More Details</a>
		                    	</div>
		                    </div>
		                </div>						
					</div>


				<?php
                    $result = $mysqli->query("SELECT * FROM dbcourse ORDER BY dbcourse.COURSE_ID DESC") or die($mysqli->error);
                    while ($row = $result->fetch_assoc()): 
				?>
				
					<div class="col-lg-4 col-md-6 grid-item filter1">
		                <div class="course-item">
		                    <div class="course-img">
		                        <img src="uploads/course<?php echo $row['HEADER_IMG']; ?>" alt="" width="370px" height="270px"/>
		                        <div class="course-toolbar">
		                        	<div class="course-duration">
		                        		<i class="fa fa-clock-o"></i> <?php echo $row['DURATION']; ?>
		                        	</div>
		                        </div>
		                    </div>
		                    <div class="course-body">
		                    	<div class="course-desc">
									<h4 class="course-title">
										<a href="site/singleCourse.php?id=<?php echo $row['COURSE_ID']; ?>">
											<?php echo $row['COURSE_NAME']; ?>
										</a>
									</h4>
		                    		<p></p>
		                    	</div>
		                    </div>
		                    <div class="course-footer">
		                    	<div class="course-seats">
		                    		<i class="fa fa-users"></i> <?php echo $row['CATEGORIES']; ?>
		                    	</div>
		                    	<div class="course-button">
		                    		<a href="site/singleCourse.php?id=<?php echo $row['COURSE_ID']; ?>">More Details</a>
		                    	</div>
		                    </div>
		                </div>						
					</div>

					<?php endwhile; ?>	
		
			
                </div>
			</div>
        </div>
        <!-- Courses End -->
				

       
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