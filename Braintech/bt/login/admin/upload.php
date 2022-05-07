<?php 
$upload = 'err'; 
if(!empty($_FILES['file'])){ 
     
    // File upload configuration 
    $targetDir = "upload"; 
    $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg', 'gif','mp4'); 
     
    $fileName = basename($_FILES['file']['name']); 
    $targetFilePath = $targetDir.$fileName; 
     
    // Check whether file type is valid 
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
    if(in_array($fileType, $allowTypes)){ 
        // Upload file to the server 
        if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){ 
            $upload = 'ok'; 
        } 
    } 
} 
echo $upload; 
?>