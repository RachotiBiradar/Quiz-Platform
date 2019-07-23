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
    top: -60%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 80px;
}

.img1{
  position: absolute;
left:185px;
top:-10px;  
    width: 86.45%;
    height: 560px;
    opacity: 1;
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
  <img src="reasoning.jpg "alt="home" width="500" height="80" class="img1">
    <img src="reasoning.jpg "alt="home" width="500" height="80" class="img2">
  
  <div class="center"><h4><pre>          CODE QUIZZERS </pre></h4></div>
  
</div>




<div class="sidenav">
  <a href="home.php">HOME</a>
  <a href="register.php">REGISTER</a>
  <a href="faculty.php">FACULTY LOGIN</a>
  <a href="student.php"> STUDENT LOGIN</a>
  <a href="about.php">ABOUT US</a>
  
</div>



</body>
</html>
