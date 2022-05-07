<?php
    $ThisYear = date("y");
    $ThisMonth = date("m");
    $Month2 = $ThisMonth-1;
    $Month3 = $Month2-1;

    $Amount1 = 0;
    $Amount2 = 0;
    $Amount3 = 0;

    if ($ThisMonth==1){
        $month = 'January';
        $premonth = 'December';
        $premonth2 = 'November';
    }
    if ($ThisMonth==2){
        $month = 'February';
        $premonth = 'January';
        $premonth2 = 'December';
    }
    if ($ThisMonth==3){
        $month = 'March';
        $premonth = 'February';
        $premonth2 = 'January';
    }
    if ($ThisMonth==4){
        $month = 'April';
        $premonth = 'March';
        $premonth2 = 'February';
    }
    if ($ThisMonth==5){
        $month = 'May';
        $premonth = 'April';
        $premonth2 = 'March';
    }
    if ($ThisMonth==6){
        $month = 'June';
        $premonth = 'May';
        $premonth2 = 'April';
    }
    if ($ThisMonth==7){
        $month = 'July';
        $premonth = 'June';
        $premonth2 = 'May';
    }
    if ($ThisMonth==8){
        $month = 'August';
        $premonth = 'July';
        $premonth2 = 'June';
    }
    if ($ThisMonth==9){
        $month = 'September';
        $premonth = 'August';
        $premonth2 = 'July';
    }
    if ($ThisMonth==10){
        $month = 'Octomber';
        $premonth = 'September';
        $premonth2 = 'August';
    }
    if ($ThisMonth==11){
        $month = 'November';
        $premonth = 'Octomber';
        $premonth2 = 'September';
    }
    if ($ThisMonth==12){
        $month = 'December';
        $premonth = 'November';
        $premonth2 = 'Octomber';
    }

    $result = $mysqli->query("SELECT * FROM tbpayments WHERE  P_MONTH = $ThisMonth AND P_YEAR = $ThisYear") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
        $Amount = $row['AMOUNT'];
        $Amount1 = $Amount1 + $Amount;
    endwhile;

    $result = $mysqli->query("SELECT * FROM tbpayments WHERE  P_MONTH = $Month2 AND P_YEAR = $ThisYear") or die($mysqli->error);
    while ($row = $result->fetch_assoc()):
        $Amount = $row['AMOUNT'];
        $Amount2 = $Amount2 + $Amount;
    endwhile;

    $result = $mysqli->query("SELECT * FROM tbpayments WHERE  P_MONTH = $Month3 AND P_YEAR = $ThisYear") or die($mysqli->error);
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
        ["<?php echo  $premonth2;?>", <?php echo  $Amount3;?>, "#ff3d57"]
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
        width: 400,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>