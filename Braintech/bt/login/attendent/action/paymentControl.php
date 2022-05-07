<?php
 	require_once ("../../include/initialize.php");
    require_once ("../inc/redirectA.php");
	require_once ("../../include/connection.php");

    if(!isset($_POST['submit'])){
        echo "<script>alert('Error');location='../Aregister.php';</script>";
    }

	$action = test_input($_POST['submit']);
    $STID = test_input($_POST['STID']);
    $CID = test_input($_POST['CID']);
    $Tute = 'NO';
    $Paper = 'NO';
    $Other = 'NO';
    $Ammount = test_input($_POST['Amount']);
    $error = 0;

    $action = mysqli_real_escape_string($mysqli,$action);
    $STID = mysqli_real_escape_string($mysqli,$STID);
    $CID = mysqli_real_escape_string($mysqli,$CID);
    $Ammount = mysqli_real_escape_string($mysqli,$Ammount);


   
  
    if(isset($_POST['tute'])){
        $Tute = 'YES';
    }
    if(isset($_POST['paper'])){
        $Paper = 'YES';
    }
    if(isset($_POST['Other'])){
        $Other = 'YES';
    }

    $Pyear = mysqli_real_escape_string($mysqli,test_input($_POST['Year']));
    $Pmonth = mysqli_real_escape_string($mysqli,test_input($_POST['Month']));
    $Pdate = mysqli_real_escape_string($mysqli,test_input($_POST['Date']));


    if(is_numeric($Ammount)){

        if($action == 'payOnly'){

            

                $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
                VALUES('$STID','$CID','$Pyear','$Pmonth','$Pdate','$Ammount','$Tute','$Paper','$Other')") or die($mysqli->error);

                $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='ACTIVE' WHERE STID=$STID AND CID=$CID") or die($mysqli->error);

                echo "<script>;location='../Aregister.php?status=PaymentSuccess';</script>";
        }


        if($action == 'PayAttend'){

            $ATTerror = 0;

            $mysqli->query("INSERT into tbpayments (ST_ID,CID,P_YEAR,P_MONTH,P_DATE,AMOUNT,TUTE,Q_PAPER,OTHERS) 
            VALUES('$STID','$CID','$Pyear','$Pmonth','$Pdate','$Ammount','$Tute','$Paper','$Other')") or die($mysqli->error);


            //check already attend
            $result = $mysqli->query("SELECT * FROM tbattendence  WHERE ST_ID=$STID AND CID=$CID AND ST_ATT_YEAR=$Pyear AND ST_ATT_MONTH=$Pmonth AND ST_ATT_DATE=$Pdate Limit 1") or die($mysqli->error);
            while ($row = $result->fetch_assoc()):
                $ATTerror = 1;
            endwhile;
    

            if($ATTerror == 0){

                $mysqli->query("INSERT into tbattendence (ST_ID,CID,ST_ATT_YEAR,ST_ATT_MONTH,ST_ATT_DATE) 
                VALUES('$STID','$CID','$Pyear','$Pmonth','$Pdate')") or die($mysqli->error);

                $mysqli->query("UPDATE studentcourses SET ACTIVE_ST='ACTIVE' WHERE STID=$STID AND CID=$CID") or die($mysqli->error);

                echo "<script>location='../Aregister.php?status=PaymentAttendSuccess';</script>";

            }else{
                echo "<script>location='../Aregister.php?status=PaymentSuccess';</script>";
            }

    }
    }   else {
        echo "<script>alert('Error');location='../Aregister.php';</script>";
    }
?>





