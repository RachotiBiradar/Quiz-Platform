<?php
session_start();

if (!isset($_SESSION['user'])) 
{
header('Location: faculty.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>BMSCE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {
    box-sizing: border-box;
}
.container {
    position: relative;
	 font-family: "Times New Roman", Georgia, Serif;
}

.center {
    position: absolute;
    top: -9%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 80px;
}

img { 
    width: 100%;
    height: auto;
    opacity: 0.9;
}


body 
{
    margin: 0;
}



.sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
}



.sidenav a {
    color: white;
    padding: 16px;
    text-decoration: none;
    display: block;
}

.sidenav a:hover {
    background-color: #ddd;
    color: black;
}


.content {
    margin-left: 200px;
    padding-left: 20px;
}
pre{ font-family: Times New Roman;}
</style>
</head>
<body>
<h2>Image Text</h2>
<p>Center text in image:</p>

<div class="container">
  <img src="-analytics.jpg" alt="Norway" width="500" height="100">
  <div class="center"><h4><pre>         Welcome <b><?php 
echo $_SESSION['user']; ?></b></pre></h4></div>
  
</div>




<div class="sidenav">
 
  <a href="bargraph.php">STUDENT STATISTICS</a>
  <a href="column_chart.php">MARKS STATISTICS</a>
  <a href="question.php">SEND QUESTIONS</a>
  <a href="logout.php"> LOGOUT</a>
 
  
</div>



</body>
</html>
