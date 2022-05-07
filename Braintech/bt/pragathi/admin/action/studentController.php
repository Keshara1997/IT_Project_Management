<?php
 	require_once ("../../include/initialize.php");
	 require_once ("../inc/redirect.php");
	 require_once ("../../include/connection.php");
 

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :

		$STID =	$_POST['STID'];  
		
		$result = $mysqli->query("SELECT * FROM tblstudent ") or die($mysqli->error);
		while ($row = $result->fetch_assoc()):
			$tbSTID = $row['STID'];
			if ($tbSTID == $STID){
				echo "<script>alert('Error!! Student ID is Not Valid Try Again');</script>";
				redirect("../addStudent.php");
			}
		endwhile;
                    
	doInsert();
	break;
	
	case 'edit' :

			if(isset($_POST['save'])){
						$id				=	$_POST['id'];
						$class			=	$_POST['FNAME']; 
						$Fname			=	$_POST['FNAME']; 
						$Lname      	=   $_POST['LNAME'];
						$BIRTHDAY     	=   $_POST['DOB'];
						$Address        =   $_POST['ADDRESS']; 
						$MobileNo       =   $_POST['PHONE']; 
						$SCHOOL			=	$_POST['SCHOOL']; 
						$STID			=	$_POST['STID'];  
						$STUDUSERNAME	=	$_POST['STID'];
						$STUDPASS		=	sha1($_POST['STID']);
						
						$mysqli->query("UPDATE tblstudent SET Fname='$Fname', Lname='$Lname', BIRTHDAY='$BIRTHDAY', Address='$Address', MobileNo='$MobileNo'
						,SCHOOL='$SCHOOL', STID='$STID', STUDUSERNAME='$STUDUSERNAME', STUDPASS='$STUDPASS' WHERE StudentID = $id") 
						or die($mysqli->error);

						?>    
							
						<script>
							alert("Updated");
							location='../manageStudent.php';
						</script> 

						<?php 
				
			}
	
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
			$student->Fname         = $_POST['FNAME']; 
			$student->Lname         = $_POST['LNAME'];
			$student->BIRTHDAY      = $_POST['DOB'];
			$student->Address       = $_POST['ADDRESS']; 
			$student->MobileNo      = $_POST['PHONE'];  
			$student->SCHOOL		= $_POST['SCHOOL'];
			$student->STID         	= $_POST['STID'];  
			$student->STUDUSERNAME  = $_POST['STID'];
			$student->STUDPASS      = sha1($_POST['STID']); 
			$student->ACTIVE      	= 'ACTIVE'; 
			$student->create();

		
			message("Your now succefully registered. You can login now!","success");
			echo "<script>location='StudentCourseController.php?action=register&STID=".$_POST['STID']."&class=".$_POST['class']."';</script>";

		
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
		redirect('../manageStudent.php');
 
		
	}


	function doEdit(){

		if(isset($_POST['save'])){
			$id = $_POST['id'];




			$student = new Student();
			$student->Fname         = $_POST['FNAME']; 
			$student->Lname         = $_POST['LNAME'];
			$student->BIRTHDAY      = $_POST['DOB'];
			$student->Address       = $_POST['ADDRESS']; 
			$student->MobileNo      = $_POST['PHONE']; 
			$student->EMAIL		    = $_POST['EMAIL']; 
			$student->STID         	= $_POST['STID'];  
			$student->CATEGORY	    = $_POST['CATEGORY']; 
			$student->STUDUSERNAME  = $_POST['USERNAME'];
			$student->STUDPASS      = sha1($_POST['PASS']); 
			$student->ACTIVE      	= 'ACTIVE'; 
			$student->update($id); 


			message("Student has been updated!", "success");
			echo "<script>alert('Student Details has been Updated!');</script>";
			redirect("../manageStudent.php");
		}
}



if($action == 'add'){

}
    
?>


