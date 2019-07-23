  
<?php 
session_start();
$_SESSION['user'];
?>
<html>
<style>
* {
    box-sizing: border-box;
}
.container {
    position: relative;
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
    opacity: 0.5;
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
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 10%;
    border-radius: 10%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block; 
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>


<body>

<h1><pre>                                                QUESTIONS </pre></h1>
<div class="sidenav">
 <div class="sidenav">
<a href="bargraph.php">STUDENT STATISTICS</a>
  <a href="column_chart.php">MARKS STATISTICS</a>
    <a href="question.php">SEND QUESTIONS</a>
  <a href="logout.php"> LOGOUT</a>

  
</div>
  
</div>



  <div class="container" style="background-color:#f1f1f1" class="content" >
   <form action="createq.php" method="POST"  class="content">

<input type="text" class="p96"   name="title"  placeholder="Questions on which subject">

<h3 class="nine">Question 1</h3>
<textarea class="eight" cols="50" rows="5" name="q1"  placeholder="Enter quesiton here">
</textarea>
<h3 class="ten">Options</h3>
<textarea class="eleven" cols="50" rows="2" name="q1op1" placeholder="option 1 here">
</textarea>
<textarea class="twelve" cols="50" rows="2" name="q1op2"  placeholder="option 2 here">
</textarea>
<textarea class="thirteen" cols="50" rows="2" name="q1op3"  placeholder="option 3 here">
</textarea>
<textarea class="forteen" cols="50" rows="2" name="q1op4"  placeholder="option 4 here">
</textarea>


<input type="text" class="seventeen" name="q1ans" placeholder="Ans">

<h3 class="ninteen">Question 2</h3>
<textarea class="twenty" cols="50" rows="5" name="q2"  placeholder="Enter quesiton here">
</textarea>
<h3 class="twentyfive">Options</h3>
<textarea class="twentysix" cols="50" rows="2" name="q2op1"  placeholder="option 1 here">
</textarea>
<textarea class="twentyseven" cols="50" rows="2" name="q2op2"  placeholder="option 2 here">
</textarea>
<textarea class="twentyeight" cols="50" rows="2" name="q2op3"  placeholder="option 3 here">
</textarea>
<textarea class="twentynine" cols="50" rows="2" name="q2op4"  placeholder="option 4 here">
</textarea>
<input type="text" class="p86" name="q2ans" placeholder="Ans">


<h3 class="thirty">Question 3</h3>
<textarea class="thirtyone" cols="50" rows="5" name="q3"  placeholder="Enter quesiton here">
</textarea>
<h3 class="thirtytwo">Options</h3>
<textarea class="thirtythree" cols="50" rows="2" name="q3op1"  placeholder="option 1 here">
</textarea>
<textarea class="thirtyfour" cols="50" rows="2" name="q3op2"  placeholder="option 2 here">
</textarea>
<textarea class="thirtyfive" cols="50" rows="2" name="q3op3"  placeholder="option 3 here">
</textarea>
<textarea class="thirtysix" cols="50" rows="2" name="q3op4" placeholder="option 4 here">
</textarea>
<input type="text" class="p87" name="q3ans" placeholder="Ans">




<h3 class="p37">Question 4</h3>
<textarea class="p38" cols="50" rows="5" name="q4"  placeholder="Enter quesiton here">
</textarea>
<h3 class="p39">Options</h3>
<textarea class="p40" cols="50" rows="2" name="q4op1"  placeholder="option 1 here">
</textarea>
<textarea class="p41" cols="50" rows="2" name="q4op2"  placeholder="option 2 here">
</textarea>
<textarea class="p42" cols="50" rows="2" name="q4op3"  placeholder="option 3 here">
</textarea>
<textarea class="p43" cols="50" rows="2" name="q4op4"  placeholder="option 4 here">
</textarea>
<input type="text" class="p88" name="q4ans" placeholder="Ans">


<h3 class="p44">Question 5</h3>
<textarea class="p45" cols="50" rows="5" name="q5"  placeholder="Enter quesiton here">
</textarea>
<h3 class="p46">Options</h3>
<textarea class="p47" cols="50" rows="2" name="q5op1"  placeholder="option 1 here">
</textarea>
<textarea class="p48" cols="50" rows="2" name="q5op2"  placeholder="option 2 here">
</textarea>
<textarea class="p49" cols="50" rows="2" name="q5op3"  placeholder="option 3 here">
</textarea>
<textarea class="p50" cols="50" rows="2" name="q5op4"  placeholder="option 4 here">
</textarea>
<input type="text" class="p89" name="q5ans" placeholder="Ans">


<h3 class="p51">Question 6</h3>
<textarea class="p52" cols="50" rows="5" name="q6"  placeholder="Enter quesiton here">
</textarea>
<h3 class="p53">Options</h3>
<textarea class="p54" cols="50" rows="2" name="q6op1"  placeholder="option 1 here">
</textarea>
<textarea class="p55" cols="50" rows="2" name="q6op2"  placeholder="option 2 here">
</textarea>
<textarea class="p56" cols="50" rows="2" name="q6op3"  placeholder="option 3 here">
</textarea>
<textarea class="p57" cols="50" rows="2" name="q6op4"  placeholder="option 4 here">
</textarea>
<input type="text" class="p90" name="q6ans" placeholder="Ans">


<h3 class="p58">Question 7</h3>
<textarea class="p59" cols="50" rows="5" name="q7"  placeholder="Enter quesiton here">
</textarea>
<h3 class="p60">Options</h3>
<textarea class="p61" cols="50" rows="2" name="q7op1"  placeholder="option 1 here">
</textarea>
<textarea class="p62" cols="50" rows="2" name="q7op2" placeholder="option 2 here">
</textarea>
<textarea class="p63" cols="50" rows="2" name="q7op3"  placeholder="option 3 here">
</textarea>
<textarea class="p64" cols="50" rows="2" name="q7op4"  placeholder="option 4 here">
</textarea>
<input type="text" class="p91" name="q7ans" placeholder="Ans">


<h3 class="p65">Question 8</h3>
<textarea class="p66" cols="50" rows="5" name="q8" placeholder="Enter quesiton here">
</textarea>
<h3 class="p67">Options</h3>
<textarea class="p68" cols="50" rows="2" name="q8op1"  placeholder="option 1 here">
</textarea>
<textarea class="p69" cols="50" rows="2" name="q8op2"  placeholder="option 2 here">
</textarea>
<textarea class="p70" cols="50" rows="2" name="q8op3"  placeholder="option 3 here">
</textarea>
<textarea class="p71" cols="50" rows="2" name="q8op4"  placeholder="option 4 here">
</textarea>
<input type="text" class="p92" name="q8ans" placeholder="Ans">

<h3 class="p72">Question 9</h3>
<textarea class="p73" cols="50" rows="5" name="q9"  placeholder="Enter quesiton here">
</textarea>
<h3 class="p74">Options</h3>
<textarea class="p75" cols="50" rows="2" name="q9op1"  placeholder="option 1 here">
</textarea>
<textarea class="p76" cols="50" rows="2" name="q9op2"  placeholder="option 2 here">
</textarea>
<textarea class="p77" cols="50" rows="2" name="q9op3" placeholder="option 3 here">
</textarea>
<textarea class="p78" cols="50" rows="2" name="q9op4"  placeholder="option 4 here">
</textarea>
<input type="text" class="p93" name="q9ans" placeholder="Ans">

<h3 class="p79">Question 10</h3>
<textarea class="p80" cols="50" rows="5" name="q10"  placeholder="Enter quesiton here">
</textarea>
<h3 class="p81">Options</h3>
<textarea class="p82" cols="50" rows="2" name="q10op1"  placeholder="option 1 here">
</textarea>
<textarea class="p83" cols="50" rows="2" name="q10op2"  placeholder="option 2 here">
</textarea>
<textarea class="p84" cols="50" rows="2" name="q10op3"  placeholder="option 3 here">
</textarea>
<textarea class="p85" cols="50" rows="2" name="q10op4"  placeholder="option 4 here">
</textarea>
<input type="text" class="p94" name="q10ans" placeholder="Ans">


<input type="submit" class="p95" name="postq" value="Send Questions">


</form>
    
  </div>



</body>
</html>
