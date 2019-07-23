<?php
 // $con = mysqli_connect('hostname','username','password','database');
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>
 Create Google Charts
 </title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
function drawChart() {
 var data = google.visualization.arrayToDataTable([
['Rating', 'Count'],
/*['Excellent',20],
  ['Good',10],
  ['Average',10],*/
  
 <?php
include 'database_connection.php'; 
 $query = "SELECT count(*) as count FROM `score` WHERE `score`= 0 OR `score`= 1 OR `score`= 2 OR `score`= 3 OR `score`= 4 ";
 $result = mysqli_query($connection,$query);
 $row = mysqli_fetch_assoc($result);
 echo "['0-5',".$row['count']."],";
 $query = "SELECT count(*) as count FROM `score` WHERE `score`= 5 OR `score`= 6 OR `score`= 7 OR `score`= 8 OR `score`= 9 ";
 $result = mysqli_query($connection,$query);
 $row = mysqli_fetch_array($result);
 echo "['5-10',".$row['count']."],";
  $query = "SELECT count(*) as count FROM `score` WHERE `score`= 10 OR `score`= 11 OR `score`= 12 OR `score`= 13 OR `score`= 14 ";
 $result = mysqli_query($connection,$query);
 $row = mysqli_fetch_array($result);
 echo "['10-15',".$row['count']."],";
 $query = "SELECT count(*) as count FROM `score` WHERE `score`= 15 OR `score`= 16 OR `score`= 17 OR `score`= 18 OR `score`= 19 OR `score`= 20 ";
 $result = mysqli_query($connection,$query);
 $row = mysqli_fetch_array($result);
 echo "['15-20',".$row['count']."],";
 ?>
 ]);
 
 var options = {
 title: 'Student Marks Statistics'
 };
 var chart = new google.visualization.ColumnChart(document.getElementById("chart_area"));
 chart.draw(data, options);
 }
</script>
</head>
<body>

 <div id="chart_area" style="width: 900px; height: 500px;"></div>
 <button onclick="history.go(-1);">Back </button>
</body>
</html>


