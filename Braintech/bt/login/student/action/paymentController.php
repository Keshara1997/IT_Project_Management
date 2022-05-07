


<?php
	require_once ("../../include/initialize.php");
	require_once ("../../include/connection.php");
	$action = $_GET['action'];

	if($action == 'add'){
		if(isset($_POST['save'])){
                $true = 0;
                $fileType = $_FILES['bankslip']['type'];
                
                if($fileType == "image/jpeg"){
                    $true = 1;
                }else{
                    if($fileType == "image/png"){
                        $true = 1;
                    }else{
                        if($fileType == "image/tiff"){
                            $true = 1;   
                        } else{
                            echo "<script>alert('Your File Format does not match. You can upload Image Only.');</script>";
                            redirect("../addPaymentDetails.php");
                        }  
                    }
                }
                    
        if($true == 1){    

				$filename = $_FILES['bankslip']['name'];
                $filetmpname = $_FILES['bankslip']['tmp_name'];

                $ext = pathinfo($filename,PATHINFO_EXTENSION);
                $randomno = rand(0,100000);
                $rename = 'Upload'.date('ymd').$randomno;
                $newname = $rename.".".$ext;
            
                $folder = 'bankSlips/';

				move_uploaded_file($filetmpname, $folder.$newname);

                $fullname = $_POST['full_name'];
                $address = $_POST['address'];
                $Month = $_POST['month']; 
                $STID = $_POST['STUDENTID'];
                $CID = $_POST['CID'];
				

				$mysqli->query("INSERT into studentpayments (SID,CID,Full_Name,Address,PMonth,Slip,status) 
				VALUES('$STID','$CID','$fullname','$address','$Month','$newname','Pending')") or die($mysqli->error);

				?>    
					
				<script>
					alert("Placed Your Payment Details.");
					location='../STDashboard.php';
				</script> 

				<?php 
			}else{
                echo "<script>alert('Your File Format does not match. You can upload Image Only.');</script>";
                redirect("../addPaymentDetails.php");
            }
		}
	}

?>


