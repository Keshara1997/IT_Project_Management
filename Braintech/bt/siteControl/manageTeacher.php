<?php require_once ("../inc/connection.php"); ?>
<?php require_once ("action/direct.php"); ?>

<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 22:35:55 GMT -->
    <head>
        <base href="../" />
		<!--include head items-->
        <?php include('inc/head.php'); ?> 
        <style>
            table, td, th {  
            border: 2px solid black;
            text-align: left;
            }

            table {
            border-collapse: collapse;
            width: 100%;
            }

            th, td {
            padding: 15px;
            }
            .button {
            background-color: #4CAF50; /* Green */
            border: none;
            border-radius: 5px;
            color: white;
            padding: 2px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            }
            .button:hover {
            background-color: black; /* Green */
            color: white;
            }
            .button3 {background-color: #f44336;} 
            .button2 {background-color: #008CBA;} 

        </style> 
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
                <h1>Manage Teachers</h1>
                <div class="table">
                    <table width="100%">
                        <tr>
                            <th>In No</th>
                            <th>Teacher Name</th>
                            <th>Subject</th>
                            <th>Action</th>
                        </tr>

                        <?php
                            $count = 0;
                            $result = $mysqli->query("SELECT * FROM dbteacher ORDER BY dbteacher.TEACHER_ID DESC") or die($mysqli->error);
                            while ($row = $result->fetch_assoc()): 
                                $count = $count + 1;
                        ?>

                        <tr>
                            <td><?php echo $count ?></td>
                            <td><?php echo $row['TEACHER_NAME']; ?></td>
                            <td><?php echo $row['SUBJECT']; ?></td>
                            <td>
                                <a href="siteControl/editTeacher.php?id=<?php echo $row['TEACHER_ID']; ?>"><span><button class="button button2">EDIT</button></span></a>
                                <a href="siteControl/action/controlTeachers.php?action=delete&id=<?php echo $row['TEACHER_ID']; ?>"><span><button class="button button3">DELETE</button></span></a>
                            </td>
                        </tr>
                        
                        <?php endwhile; ?>

                    </table>
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