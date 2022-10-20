<?php
include '../ressources/database/db_connection.php';

$conn = OpenCon();
$result = mysqli_query($conn, "SELECT * FROM `intensitesonore`");
$row = $result->fetch_all();

for($i=0; $i<count($row); $i++){
 $row[$i][1] = new DateTime($row[$i][1]);
 $row[$i][1]= (int)$row[$i][1]->format('U');
 $row[$i][1]= $row[$i][1]*1000;
 $row[$i][0] = (int)$row[$i][0];
 }


$var = json_encode(['IntensiteSonore' => $row], JSON_PRETTY_PRINT);
$fp = fopen('data.json', 'w');
fwrite($fp, $var);  
fclose($fp);

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rammetto+One&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <meta charset="UTF-8">

    <script>
    window.onload = function() {
     
    var dataPoints = [];
     
    var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      theme: "light2",
      zoomEnabled: true,
      backgroundColor: "#F5DEB3",
       interactivityEnabled: true,
      title: {
      },
      axisY: {
        title: "Intensite Sonore",
        titleFontSize: 24,
      },
      axisX: {
        type: Date,
      },
      data: [{
        type: "line",
        yValueFormatString: "#dB",
        
        dataPoints: dataPoints
      }]
    });
     
    function addData(data) {
      var dps = data.IntensiteSonore;
      for (var i = 0; i < dps.length; i++) {
        dataPoints.push({
          x: new Date(dps[i][1]),
			y: dps[i][0]
        });
      }
      chart.render();
    }
     
    $.getJSON("data.json", addData);

    }
    </script>
</head>

<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
 
</body>

</html>

