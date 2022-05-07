<?php 
  require_once ("../include/initialize.php");
  $PDFLesson = 0;
  $VideoLesson = 0;
  $CID = $_SESSION['CID'];

  $query = "SELECT * FROM `tbllesson` WHERE CID = $CID AND Category='Docs'";
  $mydb->setQuery($query);
  $cur = $mydb->loadResultList();
  foreach ($cur as $result) {
      $PDFLesson++;
  }

  $query = "SELECT * FROM `tbllesson` WHERE CID = $CID AND Category='Video'";
  $mydb->setQuery($query);
  $cur = $mydb->loadResultList();
  foreach ($cur as $result) {
      $VideoLesson++;
  }
?>



<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["PDF", <?php echo $PDFLesson ?>, "#0082fc"],
        ["Video", <?php echo $VideoLesson ?>, "#fe3e53"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        width: 350,
        height: 200,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>