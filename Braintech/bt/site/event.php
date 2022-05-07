<?php require_once ("../inc/connection.php"); 
header("X-XSS-Protection: 1; mode=block");?>


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
		                    <h1 class="page-title">OUR Events</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.php">Home</a>
		                        </li>
		                        <li>Our Events</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

		<!-- Events Start -->
        <div class="rs-events-2 sec-spacer">
            <div class="container">




						

                

				<?php
					$count = 0;
					$divide = 0;
					$result = $mysqli->query("SELECT * FROM dbevent ORDER BY dbevent.EVENT_ID DESC") or die($mysqli->error);
					while ($row = $result->fetch_assoc()): 
						$count++;
						$divide = $count%2;
						if($divide==1){
				?>
				<div class="row space-bt30">

                    <div class="col-lg-6 col-md-12">
                    	<div class="event-item">
	                        <div class="row rs-vertical-middle">
	                        	<div class="col-md-6">
	                        	    <div class="event-img">
	                        	        <img src="uploads/event<?php echo $row['EVENT_IMG']; ?>" alt="events Images" />
	                        	    </div>                        		
	                        	</div>
	                        	<div class="col-md-6">
	                    	        <div class="event-content">
	                    	        	<div class="event-meta">
		                    	        	<div class="event-date">
		                    	        		<i class="fa fa-calendar"></i>
		                    	        		<span><?php echo $row['DATE']; ?></span>
		                    	        	</div>
	                    	        	</div>
	                    	        	<h3 class="event-title"><a><?php echo $row['EVENT_NAME']; ?></a></h3>
                    	        		<div class="event-location">
                    	        			<i class="fa fa-map-marker"></i>
                    	        			<span>Venue A, <?php echo $row['LOCATION']; ?></span>
                    	        		</div>
	                    	        	<div class="event-desc">
	                    	        		<p><?php echo $row['DESCRIPTION']; ?></p>
										</div>
										<div class="event-btn">
	                    	        		<a href="site/events-details.php?id=<?php echo $row['EVENT_ID']; ?>">View More</a>
	                    	        	</div>
	                    	        </div>                    		
	                        	</div>
	                        </div>                    		
                    	</div>
					</div><br>

					<?php }else{ ?>

                    <div class="col-lg-6 col-md-12">
						<div class="event-item">
	                        <div class="row rs-vertical-middle">
	                        	<div class="col-md-6">
	                        	    <div class="event-img">
	                        	        <img src="uploads/event<?php echo $row['EVENT_IMG']; ?>" alt="events Images" />
	                        	    </div>                        		
	                        	</div>
	                        	<div class="col-md-6">
	                    	        <div class="event-content">
	                    	        	<div class="event-meta">
		                    	        	<div class="event-date">
		                    	        		<i class="fa fa-calendar"></i>
		                    	        		<span><?php echo $row['DATE']; ?></span>
		                    	        	</div>
	                    	        	</div>
	                    	        	<h3 class="event-title"><a><?php echo $row['EVENT_NAME']; ?></a></h3>
                    	        		<div class="event-location">
                    	        			<i class="fa fa-map-marker"></i>
                    	        			<span>Venue A, <?php echo $row['LOCATION']; ?></span>
                    	        		</div>
	                    	        	<div class="event-desc">
	                    	        		<p><?php echo $row['DESCRIPTION']; ?></p>
										</div>
										<div class="event-btn">
	                    	        		<a href="site/events-details.php?id=<?php echo $row['EVENT_ID']; ?>">View More</a>
	                    	        	</div>
	                    	        </div>                    		
	                        	</div>
	                        </div>                    		
                    	</div>
					</div>
					</div>
					
				<?php } endwhile; ?>

				
            </div>
        </div>
		<!-- Events End -->
		



		
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