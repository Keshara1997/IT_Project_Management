<?php			


	
    $chapter = $_POST['LessonChapter'];
    $title  = $_POST['LessonTitle'];
    $category = $_POST['Category'];
    $CID = $_SESSION['CID'];

    



    $LESSON_NAME        = $_FILES['file']['name'];
    $LESSON_TMPNAME     = $_FILES['file']['tmp_name'];
    $LESSON_ext         = pathinfo($LESSON_NAME,PATHINFO_EXTENSION);
    $LESSON_randomno    = rand(0,100000);
    $LESSON_rename      = 'Upload'.date('ymd').$LESSON_randomno;
    $LESSON_NEW_NAME    = $LESSON_rename.".".$LESSON_ext;
    $LESSON_folder      = 'action/files/';


    $result = $mysqli->query(
        "INSERT into tbllesson (
            CID,
            LessonChapter,
            LessonTitle,
            FileLocation,
            Category
            ) 
        VALUES(
            '$CID',
            '$chapter',
            '$title',
            '$LESSON_NEW_NAME',
            '$category'
            )"
        ) or die($mysqli->error);

        
    if(move_uploaded_file($LESSON_TMPNAME, $LESSON_folder.$LESSON_NEW_NAME)){
        echo "upload is complete";
    } else {
        echo "move_uploaded_file function failed";
    }


    if ($result === TRUE) {
        if($category=='Docs'){
            redirect("../manageLessonPDF.php");
        }else{
            redirect("../manageLessonVideo.php");
        }
    }else{
        if($category=='Docs'){
            redirect("../manageLessonPDF.php");
        }else{
            redirect("../manageLessonVideo.php");
        }
    }

    


?>