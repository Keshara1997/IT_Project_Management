<?php 
  require_once ("../include/initialize.php");
  $ActiveCount = 0;
  $DisableCount = 0;
  $CID = $_SESSION['CID'];

  $query = "SELECT * FROM `studentcourses` WHERE ACTIVE_ST = 'ACTIVE' AND CID = $CID";
  $mydb->setQuery($query);
  $cur = $mydb->loadResultList();
  foreach ($cur as $result) {
      $ActiveCount++;
  }

  $query = "SELECT * FROM `studentcourses` WHERE ACTIVE_ST = 'DISABLE' AND CID = $CID";
  $mydb->setQuery($query);
  $cur = $mydb->loadResultList();
  foreach ($cur as $result) {
      $DisableCount++;
  }
?>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Active',     <?php echo $ActiveCount ?>],
          ['Blocked',    <?php echo $DisableCount ?>],
     
        ]);

        var options = {
         
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>