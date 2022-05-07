<?php
 	require_once ("../../include/initialize.php");
	 require_once ("../inc/redirect.php");
	 require_once ("../../include/connection.php");


$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
$action = test_input($action);
$action = mysqli_real_escape_string($mysqli,$action);

switch ($action) {
	case 'add' :

		$STID =	test_input($_POST['STID']); 
		$STID = mysqli_real_escape_string($mysqli,$STID); 
		
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
						$id				=	test_input($_POST['id']);
						$Fname			=	test_input($_POST['FNAME']); 
						$Lname      	=   test_input($_POST['LNAME']);
						$BIRTHDAY     	=   test_input($_POST['DOB']);
						$Address        =   test_input($_POST['ADDRESS']); 
						$MobileNo       =   test_input($_POST['PHONE']); 
						$EMAIL			=	test_input($_POST['EMAIL']); 
						$SCHOOL			=	test_input($_POST['SCHOOL']); 
						$STID			=	test_input($_POST['STID']);  
						$CATEGORY		=	test_input($_POST['CATEGORY']); 
						$STUDUSERNAME	=	test_input($_POST['USERNAME']);
						$STUDPASS		=	test_input(sha1($_POST['PASS']));
						
						$mysqli->query("UPDATE tblstudent SET Fname='$Fname', Lname='$Lname', BIRTHDAY='$BIRTHDAY', Address='$Address', MobileNo='$MobileNo',
						 EMAIL='$EMAIL',SCHOOL='$SCHOOL', STID='$STID', CATEGORY='$CATEGORY', STUDUSERNAME='$STUDUSERNAME', STUDPASS='$STUDPASS' WHERE StudentID = $id") 
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
			$student->Fname         = test_input($_POST['FNAME']); 
			$student->Lname         = test_input($_POST['LNAME']);
			$student->BIRTHDAY      = test_input($_POST['DOB']);
			$student->Address       = test_input($_POST['ADDRESS']); 
			$student->MobileNo      = test_input($_POST['PHONE']); 
			$student->EMAIL		    = test_input($_POST['EMAIL']); 
			$student->SCHOOL		= test_input($_POST['SCHOOL']);
			$student->STID         	= test_input($_POST['STID']);  
			$student->CATEGORY	    = test_input($_POST['CATEGORY']); 
			$student->STUDUSERNAME  = test_input($_POST['USERNAME']);
			$student->STUDPASS      = test_input(sha1($_POST['PASS'])); 
			$student->ACTIVE      	= 'ACTIVE'; 
			$student->IP_ADDRESS     = '0'; 
			$student->create();

		
			message("Your now succefully registered. You can login now!","success");
			echo "<script>alert('New Student succefully registered. This student can login now!');</script>";
			redirect("../addStudent.php");

		
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


