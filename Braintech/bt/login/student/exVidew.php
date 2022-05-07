<?php 	
    require_once ("../include/connection.php");
    
    $name = test_input($_GET['name']);
    $name = mysqli_real_escape_string($mysqli,$name);

    $result = $mysqli->query("SELECT * FROM  `exercise` WHERE ExId=$name") or die($mysqli->error);
    while ($row = $result->fetch_assoc()): 
        $file = $row['FilePath'];

?>


<html>

<embed src="../admin/action/exercises/<?php echo  $row['FilePath']?>" type="application/pdf" width="100%" height="100%" />
</html>
    <?php endwhile; ?>