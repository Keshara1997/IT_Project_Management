<?php 
  

        $Todayyear = date("y");
        $Todaymonth = date("m");
        $Todaydate = date("d");

        $Todayyear = stripcslashes($Todayyear);
        $Todaymonth = stripcslashes($Todaymonth);
        $Todaydate = stripcslashes($Todaydate);
        $Todayyear = mysqli_real_escape_string($mysqli,$Todayyear);
        $Todaymonth = mysqli_real_escape_string($mysqli,$Todaymonth);
        $Todaydate = mysqli_real_escape_string($mysqli,$Todaydate);

        if($Todaydate > 14){

            $result = $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='DISABLE'") or die($mysqli->error);

            $result = $mysqli->query("SELECT * FROM studentcourses WHERE ACTIVE_DATE = $Todaydate") or die($mysqli->error);
            while ($row = $result->fetch_assoc()):
                $STID = test_input($row['STID']);
                $CID = test_input($row['CID']);
                $CID = mysqli_real_escape_string($mysqli,$CID);
                $STID = mysqli_real_escape_string($mysqli,$STID);
                $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='ACTIVE' WHERE STID = $STID") or die($mysqli->error);
            endwhile;

          
            $result = $mysqli->query("SELECT * FROM tbpayments WHERE P_MONTH = $Todaymonth AND P_YEAR = $Todayyear") or die($mysqli->error);
            while ($row = $result->fetch_assoc()):
                $STID = test_input($row['ST_ID']);
                $CID = test_input($row['CID']);
                $STID = mysqli_real_escape_string($mysqli,$STID);
                $CID = mysqli_real_escape_string($mysqli,$CID);
                $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='ACTIVE' WHERE STID = $STID AND CID = $CID") or die($mysqli->error);
            endwhile;
          
        }


?>