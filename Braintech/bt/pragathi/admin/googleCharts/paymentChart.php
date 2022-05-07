<?php
    require_once ("../include/initialize.php");

    $CID = $_SESSION['CID']; 

    $ThisYear = date("y");
    $ThisMonth = date("m");
    $Month2 = $ThisMonth-1;
    $Month3 = $Month2-1;

    $Amount1 = 0;
    $Amount2 = 0;
    $Amount3 = 0;
    $Amount4 = 0;

    if ($ThisMonth==1){
        $month = 'January';
        $premonth = 'December';
        $premonth2 = 'November';
        $premonth3 = 'Octomber';
    }
    if ($ThisMonth==2){
        $month = 'February';
        $premonth = 'January';
        $premonth2 = 'December';
        $premonth3 = 'November';
    }
    if ($ThisMonth==3){
        $month = 'March';
        $premonth = 'February';
        $premonth2 = 'January';
        $premonth3 = 'December';
    }
    if ($ThisMonth==4){
        $month = 'April';
        $premonth = 'March';
        $premonth2 = 'February';
        $premonth3 = 'January';
    }
    if ($ThisMonth==5){
        $month = 'May';
        $premonth = 'April';
        $premonth2 = 'March';
        $premonth3 = 'February';
    }
    if ($ThisMonth==6){
        $month = 'June';
        $premonth = 'May';
        $premonth2 = 'April';
        $premonth3 = 'March';
    }
    if ($ThisMonth==7){
        $month = 'July';
        $premonth = 'June';
        $premonth2 = 'May';
        $premonth3 = 'April';
    }
    if ($ThisMonth==8){
        $month = 'August';
        $premonth = 'July';
        $premonth2 = 'June';
        $premonth3 = 'May';
    }
    if ($ThisMonth==9){
        $month = 'September';
        $premonth = 'August';
        $premonth2 = 'July';
        $premonth3 = 'June';
    }
    if ($ThisMonth==10){
        $month = 'Octomber';
        $premonth = 'September';
        $premonth2 = 'August';
        $premonth3 = 'July';
    }
    if ($ThisMonth==11){
        $month = 'November';
        $premonth = 'Octomber';
        $premonth2 = 'September';
        $premonth3 = 'August';
    }
    if ($ThisMonth==12){
        $month = 'December';
        $premonth = 'November';
        $premonth2 = 'Octomber';
        $premonth3 = 'September';
    }

    $result = $mysqli->query("SELECT * FROM tbpayments WHERE  P_MONTH = $ThisMonth AND P_YEAR = $ThisYear AND CID = $CID") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
        $Amount = $row['AMOUNT'];
        $Amount1 = $Amount1 + $Amount;
    endwhile;

    $result = $mysqli->query("SELECT * FROM tbpayments WHERE  P_MONTH = $Month2 AND P_YEAR = $ThisYear AND CID = $CID") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
        $Amount = $row['AMOUNT'];
        $Amount2 = $Amount2 + $Amount;
    endwhile;

    $result = $mysqli->query("SELECT * FROM tbpayments WHERE  P_MONTH = $Month3 AND P_YEAR = $ThisYear AND CID = $CID") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
        $Amount = $row['AMOUNT'];
        $Amount3 = $Amount3 + $Amount;
    endwhile;
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["<?php echo  $month;?>", <?php echo  $Amount1;?>, "#0081ff"],
        ["<?php echo  $premonth;?>", <?php echo  $Amount2;?>, "#08b66e"],
        ["<?php echo  $premonth2;?>", <?php echo  $Amount3;?>, "#ff3d57"],
        ["<?php echo  $premonth3;?>", <?php echo  $Amount4;?>, "#fd8a4b"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Payment Status",
        width: 700,
        height: 400,
        bar: {groupWidth: "100%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>