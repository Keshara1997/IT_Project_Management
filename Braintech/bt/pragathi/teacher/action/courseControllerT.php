<?php
 	require_once ("../../include/initialize.php");
	 require_once ("../inc/redirectT.php");
	require_once ("../../include/connection.php");
	$action = $_GET['action'];

	if($action == 'add'){
		if(isset($_POST['save'])){

			$COURSENAME = ($_POST['COURSENAME']);
			

			$mysqli->query("INSERT into tbcourse (COURSE_NAME) 
			VALUES('$COURSENAME')") or die($mysqli->error);

			?>    
				
			<script>
				alert("The Classroom was set up Correctly");
				location='../courseSelectorT.php';
			</script> 

			<?php 
		}
	}


	if($action == 'delete'){
		$id = $_GET['id'];
		$result = $mysqli->query("DELETE FROM tbcourse WHERE CID =  $id") or die($mysqli->error);
	}
?>
<script>
    
    alert("The Classroom has been Deleted");
    location='../courseSelectorT.php';
    
</script>

