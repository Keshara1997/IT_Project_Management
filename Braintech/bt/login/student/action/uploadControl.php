


<?php
	require_once ("../../include/initialize.php");
	require_once ("../../include/connection.php");
	$action = test_input($_GET['action']);

	if($action == 'add'){
		if(isset($_POST['save'])){

			$fileType = $_FILES['file']['type'];
			if($fileType != "application/pdf"){
				echo "<script>alert('Your File Format does not match. You can upload PDF Only.');</script>";
				redirect("../exeLesson.php");
			}else{

				$filename = $_FILES['file']['name'];
				$filetmpname = $_FILES['file']['tmp_name'];

				$ext = pathinfo($filename,PATHINFO_EXTENSION);
                $randomno = rand(0,100000);
                $rename = 'Upload'.date('ymd').$randomno;
                $newname = $rename.".".$ext;
	
				$folder = 'upload/';

				move_uploaded_file($filetmpname, $folder.$newname);

				$STID = test_input($_POST['STUDENTID']);
				$EXID = test_input($_POST['ExId']);
				$CID = test_input($_POST['CID']); 
				
				$STID = mysqli_real_escape_string($mysqli,$STID);
				$EXID = mysqli_real_escape_string($mysqli,$EXID);
				$CID = mysqli_real_escape_string($mysqli,$CID);

				$result = $mysqli->query("INSERT into submittedex (STID,EXID,CID,File) 
				VALUES('$STID','$EXID','$CID','$newname')") or die($mysqli->error);

				if ($result === TRUE) {
					echo ("<script> alert ('Your answers were uploaded correctly!'); location='../exeLesson.php'; </script>");	
				} else {
					echo ("<script> alert ('Error'); location='logout.php'; </script>");	
				}
			
			}
		}
	}

?>


