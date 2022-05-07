<?php 
    require_once ("../include/initialize.php");
    require_once ("../include/connection.php");

    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 2") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
        
        $student    =   $row['STID'];

            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','2','2021','05','01','500','NO','NO','NO')") or die($mysqli->error);
          

    endwhile;

    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 3") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];
            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','3','2021','05','01','500','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;

    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 4") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];
            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','4','2021','05','01','500','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;

    
    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 5") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];
            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','5','2021','05','01','500','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;

    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 6") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];

            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','6','2021','05','01','500','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;
     
    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 7") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];

            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','7','2021','05','01','500','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;

    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 9") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];

            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','9','2021','05','01','500','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;

    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 10") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];
    
            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','10','2021','05','01','500','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;

    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 11") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];
    
            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','11','2021','05','01','500','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;

    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 12") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];
        
            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','12','2021','05','01','500','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;

    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 13") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];

            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','13','2021','05','01','600','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;

    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 14") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];
            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','14','2021','05','01','600','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;






    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 15") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];
    
            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','15','2021','05','01','500','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;
    

    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 16") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];
    
            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','16','2021','05','01','500','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;

    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 17") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];
    
            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','17','2021','05','01','500','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;

    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 18") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];
    
            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','18','2021','05','01','500','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;

    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 19") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];
    
            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','19','2021','05','01','500','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;

    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 20") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];
    
            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','20','2021','05','01','600','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;



    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 21") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];
    
            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','21','2021','05','01','700','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;

    
    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 22") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];
    
            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','22','2021','05','01','700','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;

    
    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 23") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];
    
            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','23','2021','05','01','800','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;

    
    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 24") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];
    
            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','24','2021','05','01','700','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;

    
    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 25") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];
    
            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','25','2021','05','01','800','NO','NO','NO')") or die($mysqli->error);
         
    endwhile;

    
    $result = $mysqli->query("SELECT * FROM studentcourses WHERE CID = 26") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):

        $student    =   $row['STID'];

            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$student','26','2021','05','01','800','NO','NO','NO')") or die($mysqli->error);
         
    endwhile; 
?>

