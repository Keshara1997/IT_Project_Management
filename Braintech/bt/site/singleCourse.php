<?php require_once ("../inc/connection.php"); 
header("X-XSS-Protection: 1; mode=block");
    if(!isset($_GET['id'])){
        echo "<script>location='course.php';</script> ";
    } else {
        $COURSE_ID = $_GET['id'];
        if (!is_numeric($COURSE_ID)==1){
            echo "<script>location='course.php';</script> ";
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

		<?php
            $COURSE_ID = $_GET['id'];
            $COURSE_ID = mysqli_real_escape_string($mysqli,test_input($COURSE_ID));
            $result = $mysqli->query("SELECT * FROM dbcourse WHERE COURSE_ID = $COURSE_ID") or die($mysqli->error);
            while ($row = $result->fetch_assoc()):
     
        ?>

		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title"><?php echo $row['COURSE_NAME']; ?></h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.php">Home</a>
		                        </li>
		                        <li><?php echo $row['COURSE_NAME']; ?></li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
        <!-- Breadcrumbs End -->
        

        <!-- Courses Details Start -->
        <div class="rs-courses-details pt-100 pb-70">
            <div class="container">
                <div class="row mb-30">
                    <div class="col-lg-8 col-md-12">
                	    <div class="detail-img" style="background-color:#212121;">
                	        <center><img src="uploads/course<?php echo $row['HEADER_IMG']; ?>" alt="Courses Images" width="80%" /></center>
                	    </div>
                        <div class="row">
                            <div class="col-md-8">
                                <ul class="course-meta-style">
                                    <li class="author">
                                        <div class="image">
                                            <img src="uploads/courseTeacher<?php echo $row['TEACHER_IMG']; ?>" width="60"  alt="">
                                        </div>
                                        <div class="author-name">
                                            <a><?php echo $row['TEACHER_NAME']; ?></a>
                                            <p>Teacher</p>
                                        </div>
                                    </li>
                                    <li class="categories">
                                        <a class="course-name"><?php echo $row['CATEGORIES']; ?></a>
                                        <p>Categories</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="course-des-tabs">
                                    <div class="tab-btm">
                                        <!-- Nav tabs -->
                                        <div class="tabs-wrapper">
                                            <ul class="nav classic-tabs tabs-cyan" role="tablist">
                                                <li class="nav-item"> 
                                                    
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Tab panels -->
                                    <div class="tab-content card"> 
                                        <!--Panel 1-->
                                        <div class="tab-pane fade in active show" id="panel51" role="tabpanel">
                                          <h4 class="desc-title">Course Details</h4>
                                            <p align="justify"><?php echo $row['DESCRIPTION_1']; ?></p>
                                            
                                            <p align="justify"><?php echo $row['DESCRIPTION_2']; ?></p>
                                      
                                        </div>
                                      <!--/.Panel 1--> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="sidebar-area">
                            <div class="course-features-info">
                                <h4 class="desc-title">Course Features</h4>
                                <ul>
                                    <li><i class="fa fa-files-o"></i> <span class="label">Lectures</span> <span class="value"><?php echo $row['LECTURES']; ?></span></li>
                                    <li><i class="fa fa-clock-o"></i> <span class="label">Duration</span> <span class="value"><?php echo $row['DURATION']; ?></span></li>
                                    <li><i class="fa fa-level-up"></i> <span class="label">Skill level</span> <span class="value"><?php echo $row['SKILL_LEVEL']; ?></span></li>
                                    <li><i class="fa fa-language"></i> <span class="label">Language</span> <span class="value"><?php echo $row['LANGUAGE']; ?></span></li>
                                    <li><i class="fa fa-users"></i> <span class="label">Exams</span> <span class="value"><?php echo $row['EXAMS']; ?></span></li>
                                    <li><i class="fa fa-check-square-o"></i> <span class="label">Assessments</span> <span class="value"><?php echo $row['ASSESSMENT']; ?></span></li>
                                </ul>
                            </div>
                            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- course -->
                            <ins class="adsbygoogle"
                                style="display:block"
                                data-ad-client="ca-pub-7547377132401174"
                                data-ad-slot="4693627473"
                                data-ad-format="auto"
                                data-full-width-responsive="true"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <!-- Courses Details End -->
            <?php endwhile; ?>		
				

       
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