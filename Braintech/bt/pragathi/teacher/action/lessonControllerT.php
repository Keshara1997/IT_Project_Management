<?php
 	require_once ("../../include/initialize.php");
	 require_once ("../inc/redirectT.php");




$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
		$category = $_POST['Category'];
		$filename = $_FILES['file']['name'];
		$fileType = $_FILES['file']['type'];
		$fileSize = $_FILES['file']['size'];
		$filetmpname = $_FILES['file']['tmp_name'];
		if($category=='Video'){
			if($fileType != "video/mp4"){
				echo "<script>alert('Your File Format is not match');</script>";
				redirect("../addLessonT.php");
			}else{
				doInsert();
			}
		}else{
			if($fileType != "application/pdf"){
				echo "<script>alert('Your File Format is not match');</script>";
				redirect("../addLessonT.php");
			}else{
				doInsert();
			}	
		}


	break;
	
	case 'edit' :
		doEdit();
	break;
	 
	case 'delete' :
	doDelete();
	break;

	case 'updatefiles' :
		$category = $_POST['Category'];
		$filename = $_FILES['file']['name'];
		$fileType = $_FILES['file']['type'];
		$fileSize = $_FILES['file']['size'];
		$filetmpname = $_FILES['file']['tmp_name'];
		if($category=='Video'){
			if($fileType != "video/mp4"){
				echo "<script>alert('Your File Format is not match');</script>";
				redirect("../manageLessonVideoT.php");
			}else{
				dochangefile();
			}
		}else{
			if($fileType != "application/pdf"){
				echo "<script>alert('Your File Format is not match');</script>";
				redirect("../manageLessonPDFT.php");
			}else{
				dochangefile();
			}	
		}
	break;

 
	}
   
	function doInsert(){ 
		if(isset($_POST['save'])){ 
			

	
			$chapter = $_POST['LessonChapter'];
			$title  = $_POST['LessonTitle'];
			$category = $_POST['Category'];
			$CID = $_SESSION['CID'];

			$filename = UploadImage();
			$location = "../../admin/action/files/". $filename ;

			$lesson = new Lesson();
			$lesson->CID = $CID;
			$lesson->LessonChapter = $chapter;
			$lesson->LessonTitle   = $title;
			$lesson->FileLocation  = $location;
			$lesson->Category  = $category;
			$lesson->create(); 

			message("The lesson send was Successful", "success");
			echo "<script>alert('The lesson send was Successful');</script>";
			if($category=='Docs'){
				redirect("../manageLessonPDFT.php");
			}else{
				redirect("../manageLessonVideoT.php");
			}
			
		}  
	}

	function doEdit(){ 
		if(isset($_POST['save'])){  

			$chapter = $_POST['LessonChapter'];
			$title  = $_POST['LessonTitle'];
			$id = $_POST['LessonID'];
			$category = $_POST['Category'];

 
				// $filename = UploadImage();
				// $location = "files/". $filename ;

				$lesson = new Lesson();
				$lesson->LessonChapter = $chapter;
				$lesson->LessonTitle   = $title;
				$lesson->Category  = $category;
				// $lesson->FileLocation  = $location;
				$lesson->update($id); 

				message("The correction was Successful.", "success");
				echo "<script>alert('The correction was Successful.');</script>";
				if($_POST['Category']=='Docs'){
					redirect("../manageLessonPDFT.php");
				}else{
					redirect("../manageLessonVideoT.php");
				}
		 

			
	 		
		}
	}


	function doDelete(){
		 
			$id = 	$_GET['id'];

			$lesson = New Lesson();
			$lesson->delete($id);
 
			message("Lesson has been removed!","info");
			echo "<script>alert('Lesson has been removed!');</script>";
			redirect("../manageLessonVideoT.php");
		 
		
	}


	function dochangefile(){
		if(isset($_POST['save'])){ 
			$category = $_POST['Category'];

			if($_POST['Category']=='Docs'){

				$id = $_POST['LessonID']; 

 
				$filename = UploadImage();
				$location = "../../admin/action/files/". $filename ;

				$lesson = new Lesson(); 
				$lesson->Category  = $category;
				$lesson->FileLocation  = $location;
				$lesson->update($id); 

				echo "<script>alert ('File has been Updated Successful.');</script>";
				message("File has been updated in the database.", "success");
				redirect("../manageLessonPDFT.php");


			}else{

				$id = $_POST['LessonID']; 

 
				$filename = UploadImage();
				$location = "../../admin/action/files/". $filename ;

				$lesson = new Lesson(); 
				$lesson->Category  = $category;
				$lesson->FileLocation  = $location;
				$lesson->update($id); 

				echo "<script>alert ('File has been Updated Successful.');</script>";
				message("File has been updated in the database.", "success");
				redirect("../manageLessonVideoT.php");
			}
		}
	}

 
 
  function UploadImage(){
			$target_dir = "../../admin/action/files/";
		    $target_file = $target_dir  . basename($_FILES["file"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			
			
			if($imageFileType != "jpg" || $imageFileType != "png" || $imageFileType != "jpeg"
				|| $imageFileType != "gif" || $imageFileType != "docs" || $imageFileType != "mp4") {
				 if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
					return   basename($_FILES["file"]["name"]);
				}else{
					echo "Error Uploading File";
					exit;
				}
			}else{
					echo "File Not Supported";
					exit;
	 }
} 

	 
 
?>
