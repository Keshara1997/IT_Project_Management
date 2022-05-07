<?php

require_once ("../../include/initialize.php");
require_once ("../inc/redirectT.php");
	require_once ("../../include/connection.php");
	$action = $_GET['action']; 

	if($action == 'add'){
		if(isset($_POST['save'])){

					$CHAPTER_NAME       =    ($_POST['CHAPTER_NAME']);
                    $CHAPTER_LESSON     =    ($_POST['CHAPTER_LESSON']);
                    $DATE               =    ($_POST['DATE']);
					$CID                =    $_SESSION['CID'];
			
					
					$mysqli->query("INSERT into tbtimetable (CID,CHAPTERNAME,CHAPTERLESSON,DATE) 
					VALUES('$CID','$CHAPTER_NAME','$CHAPTER_LESSON','$DATE')") or die($mysqli->error);

					?>    
						
					<script>
						alert("Set the Time");
						location='../manageTimetableT.php';
					</script> 

					<?php 
			
		}
	}


	if($action == 'delete'){
		$id = $_GET['id'];
		$CID = $_SESSION['CID'];
		$result = $mysqli->query("DELETE FROM tbtimetable WHERE TTID =  $id AND CID = $CID") or die($mysqli->error);

?>
<script>
    
    alert("Time Removed");
    location='../manageTimetableT.php';
    
</script>


<?php 	} 

			if($action == 'edit'){
				if(isset($_POST['save'])){

							$TTID				=	 ($_POST['ID']);
							$CHAPTER_NAME       =    ($_POST['CHAPTER_NAME']);
							$CHAPTER_LESSON     =    ($_POST['CHAPTER_LESSON']);
							$DATE               =    ($_POST['DATE']);
							$CID                =    $_SESSION['CID'];
					
							
							$mysqli->query("UPDATE tbtimetable SET CHAPTERNAME='$CHAPTER_NAME', CHAPTERLESSON='$CHAPTER_LESSON', DATE='$DATE' WHERE TTID = $TTID AND CID = $CID") or die($mysqli->error);

							?>    
								
							<script>
								alert("Update Time");
								location='../manageTimetableT.php';
							</script> 

							<?php 
					
				}
			}


?>

