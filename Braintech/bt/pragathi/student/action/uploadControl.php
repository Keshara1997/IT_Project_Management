


<?php
	require_once ("../../include/initialize.php");
	require_once ("../../include/connection.php");
	$action = $_GET['action'];

	if($action == 'add'){
		if(isset($_POST['save'])){

			//$fileType = $_FILES['file']['type'];
			//if($fileType != "application/pdf"){
				//echo "<script>alert('Your File Format does not match. You can upload PDF Only.');</script>";
				//redirect("../exeLesson.php");
			//}else{

				$filename = $_FILES['file']['name'];
				$filetmpname = $_FILES['file']['tmp_name'];

				$ext = pathinfo($filename,PATHINFO_EXTENSION);
                $randomno = rand(0,100000);
                $rename = 'Upload'.date('ymd').$randomno;
                $newname = $rename.".".$ext;
	
				$folder = 'upload/';

				move_uploaded_file($filetmpname, $folder.$newname);

				$STID = $_POST['STUDENTID'];
				$EXID = $_POST['ExId'];
				$CID = $_POST['CID'];  
				

				$mysqli->query("INSERT into submittedex (STID,EXID,CID,File) 
				VALUES('$STID','$EXID','$CID','$newname')") or die($mysqli->error);

				?>    
					
				<script>
					alert("Your answers were uploaded correctly!");
					location='../exeLesson.php';
				</script> 

				<?php 
			//}
		}
	}

?>


