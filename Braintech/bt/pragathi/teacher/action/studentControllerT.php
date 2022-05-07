<?php
 	require_once ("../../include/initialize.php");
	 require_once ("../inc/redirectT.php");


$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;

	case 'updatefiles' :
	dochangefile();
	break;

 
	}


    function doInsert(){ 

		if (isset($_POST['btnRegister'])) {
			# code...  
		
			$student = New Student(); 
			$student->CID			= $_SESSION['CID'];
			$student->Fname         = $_POST['FNAME']; 
			$student->Lname         = $_POST['LNAME'];
			$student->Address       = $_POST['ADDRESS']; 
			$student->MobileNo      = $_POST['PHONE']; 
			$student->STID         	= $_POST['STID'];  
			$student->STUDUSERNAME  = $_POST['USERNAME'];
			$student->STUDPASS      = sha1($_POST['PASS']); 
			$student->ACTIVE      	= 'ACTIVE'; 
			$student->create();  
		
			message("Your now succefully registered. You can login now!","success");
			echo "<script>alert('New Student succefully registered. This student can login now!');</script>";
			redirect("../manageStudentT.php");
		
		}
	}



	function doDelete(){ 

		
			# code...  
			global $mydb;
		
			$id = 	$_GET['id'];

			$student = New Student();
			  $student->delete($id);

			$sql = "DELETE FROM tblstudent  WHERE StudentID='{$id}'";
			$mydb->setQuery($sql);
			$mydb->executeQuery();
		 
		message("The Student was Removed!","info");
		echo "<script>alert('The Student was Removed!');</script>";
		redirect('../manageStudentT.php');
 
		
	}


	function doEdit(){

		if(isset($_POST['save'])){
			$id = $_POST['id'];




			$student = new Student();
			$student->CID			= $_SESSION['CID'];
			$student->Fname         = $_POST['FNAME']; 
			$student->Lname         = $_POST['LNAME'];
			$student->Address       = $_POST['ADDRESS']; 
			$student->MobileNo      = $_POST['PHONE']; 
			$student->STID         	= $_POST['STID'];
			$student->update($id); 


			//$sql = "UPDATE tblstudent SET CID='$CID', Fname='$FNAME', Lname='$LNAME', Address='$ADDRESS', MobileNo='$PHONE', STID='$STID' WHERE StudentID = $id";
			//$mydb->setQuery($sql);
			//$mydb->executeQuery();


			message("Student has been updated!", "success");
			echo "<script>alert('Student Details has been Updated!');</script>";
			redirect("../manageStudentT.php");
		}
}
    
?>


