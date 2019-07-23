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
    font-size: 60px;
	z-index:1;
}
.centertxt {
    position: absolute;
	z-index:1;
	margin-left:17%;
	margin-right:0%;
	font-size:28px;
	font-color:red;
	
}
.pos{
		position:absolute;
}

.img1{
  position: absolute;
	width:100%;
	height=80%;
    opacity: 0.6;
	z-index:0;
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
  <img src="home.png "alt="home"  class="img1">
  </br>
  <div class="center"><h4><pre> ABOUT US </pre></h4></div>
  <br>
  <br><p class="centertxt"><b>Why CodeQuizzers?</b><br>
Learning programming is hard... retaining what you learn is even harder! When you learn a new concept, you need to practice it several times or you'll immediately forget it.

What is the point of reading a book or taking a class if you're going to forget everything anyways?<br><br><br>
<b>Teaching Philosophy</b><br>
The quizzes teach the most important concepts first. We're not going to burden you with a huge quiz that addresses all the edge cases if you're not ready yet!
Each question is stand-alone and not dependent on other questions. We hate when questions are "chained" and one question cannot be anwered unless a prior question is answered correctly.
Each question teaches a single concept. We hate when books teach two concepts at the same time - we only teach one concept per question.
Quizzes are short! There is nothing worse than reading a chapter in a book, trying the chapter exercises, and realizing they will take you 8 hours to complete. Every quiz on this site should only take 5 minutes to complete.
Repetition, repetition, repetition. The quizzes are meant to be taken multiple times. You need to beat programming concepts in your head to make them stick.
Bottom up. We start with the basics and work up to more complicated topics. Throwing learners into the deep end leads to frusteration and hoplessness. Learing programming isn't that hard if you take it one step at a time.
Self sufficient developers. We want to make you a self-sufficient developer that can solve any problem. Too many courses and bootcamps are prematurely training developers complicated frameworks, so they can get a job quickly. We believe in a long term, sequential learning approach.
</p>



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
