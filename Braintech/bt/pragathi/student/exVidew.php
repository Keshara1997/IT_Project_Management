<?php 	
    require_once ("../include/connection.php");
    
    $name = $_GET['name'];


    $result = $mysqli->query("SELECT * FROM  `exercise` WHERE ExId=$name") or die($mysqli->error);
    while ($row = $result->fetch_assoc()): 
        $file = $row['FilePath'];

?>


<html>

<embed src="../admin/action/exercises/<?php echo  $row['FilePath']?>" type="application/pdf" width="100%" height="100%" />
</html>
    <?php endwhile; ?>