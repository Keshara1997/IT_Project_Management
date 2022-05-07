<?php require_once ("../inc/connection.php");
header("X-XSS-Protection: 1; mode=block");

    if(!isset($_GET['id'])){
        echo "<script>location='event.php';</script> ";
    } else {    
        $EVENT_ID = $_GET['id'];
        if (!is_numeric($EVENT_ID)==1){
            echo "<script>location='event.php';</script> ";
        }
    }
  ?>

<!DOCTYPE html>
<html lang="zxx">
    
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
		                    <h1 class="page-title">Event Details</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.php">Home</a>
		                        </li>
		                        <li>Event Details</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

        

	    <!-- Event Details Start -->
        <div class="rs-event-details pt-100 pb-70">
            <div class="container">
                <div class="row">

                <?php
                    $EVENT_ID = mysqli_real_escape_string($mysqli,test_input($_GET['id']));
                    $result = $mysqli->query("SELECT * FROM dbevent WHERE EVENT_ID = $EVENT_ID") or die($mysqli->error);
                    while ($row = $result->fetch_assoc()): 
                ?>

                    <div class="col-lg-8 col-md-12">
                        <div class="event-details-content">
                            <h3 class="event-title"><a ><?php echo $row['EVENT_NAME']; ?></a></h3>
                            <div class="event-meta">
                                <div class="event-date">
                                    <i class="fa fa-calendar"></i>
                                    <span><?php echo $row['DATE']; ?></span>
                                </div>
                                <div class="event-location">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Venue A, <?php echo $row['LOCATION']; ?></span>
                                </div>
                            </div>
                            <div class="event-img">
                                <img src="uploads/event<?php echo $row['IMAGE']; ?>" alt="Event Details Images" />
                            </div>
                            <div class="event-desc">
                                <p>
                                <?php echo $row['DESCRIPTION02']; ?>
                                </p>
                                <p>
                                <?php echo $row['DESCRIPTION03']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>

                    <div class="col-lg-4 col-md-12">
                        <div class="sidebar-area">
                            <div class="latest-courses">
                                <h3 class="title">Latest Posts</h3>

                                <?php
                                    $count = 0;
                                    $result = $mysqli->query("SELECT * FROM dbevent ORDER BY dbevent.EVENT_ID DESC") or die($mysqli->error);
                                    while ($row = $result->fetch_assoc()): 
                                        $count++;
                                        if ($count <=3){
                                ?>

                                <div class="post-item">
                                    <div class="post-img">
                                        <a href="site/events-details.php?id=<?php echo $row['EVENT_ID']; ?>"><img src="uploads/event<?php echo $row['EVENT_IMG']; ?>" alt="" title="News image"></a>
                                    </div>
                                    <div class="post-desc">
                                        <h4><a href="site/events-details.php?id=<?php echo $row['EVENT_ID']; ?>"><?php echo $row['EVENT_NAME']; ?></a></h4>
                                        <span class="duration"> 
                                            <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $row['DATE']; ?>
                                        </span> <br>
                                        <span class="duration"> 
                                            <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $row['LOCATION']; ?>
                                        </span>
                                    </div>
                                </div>

                                <?php } endwhile; ?>      

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Details End -->
		
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