<?php
session_start();
?>
<html>
<head>
<title>Quiz</title>
<script type="text/javascript">


	function submitQuiz() {

	
		function answerScore (qName) {
			var radiosNo = document.getElementsByName(qName);

			for (var i = 0, length = radiosNo.length; i < length; i++) {
   				if (radiosNo[i].checked) {
			
					var answerValue = Number(radiosNo[i].value);
				}
			}
		
			if (isNaN(answerValue)) {
				answerValue = 0;
			}
			return answerValue;
		}

		var calcScore = (answerScore('q1') + answerScore('q2') + answerScore('q3') + answerScore('q4')+answerScore('q5') + answerScore('q6') + answerScore('q7') + answerScore('q8')+answerScore('q9') + answerScore('q10') + answerScore('q11') + answerScore('q12')+answerScore('q13') + answerScore('q14') + answerScore('q15') + answerScore('q16')+answerScore('q17') + answerScore('q18') + answerScore('q19') + answerScore('q20'));
		 
		console.log("CalcScore: " + calcScore); // it works!
		

	// function to return correct answer string
		function correctAnswer (correctStringNo, qNumber) {
			console.log("qNumber: " + qNumber);  // logs 1,2,3,4 after called below
			return ("The correct answer for question #" + qNumber + ": &nbsp;<strong>" +
				(document.getElementById(correctStringNo).innerHTML) + "</strong>");
			}


		var questionCountArray = document.getElementsByClassName('question');

		var questionCounter = 0;
		for (var i = 0, length = questionCountArray.length; i < length; i++) {
			questionCounter++;
		}

	
	if (answerScore('q1') === 0) {
			document.getElementById('correctAnswer1').innerHTML = correctAnswer('correctString1', 1);
		}
		if (answerScore('q2') === 0) {
			document.getElementById('correctAnswer2').innerHTML = correctAnswer('correctString2', 2);
		}
		if (answerScore('q3') === 0) {
			document.getElementById('correctAnswer3').innerHTML = correctAnswer('correctString3', 3);
		}
		if (answerScore('q4') === 0) {
			document.getElementById('correctAnswer4').innerHTML = correctAnswer('correctString4', 4);
		}
		if (answerScore('q5') === 0) {
			document.getElementById('correctAnswer5').innerHTML = correctAnswer('correctString5', 5);
		}
		if (answerScore('q6') === 0) {
			document.getElementById('correctAnswer6').innerHTML = correctAnswer('correctString6', 6);
		}
		if (answerScore('q7') === 0) {
			document.getElementById('correctAnswer7').innerHTML = correctAnswer('correctString7', 7);
		}
		if (answerScore('q8') === 0) {
			document.getElementById('correctAnswer8').innerHTML = correctAnswer('correctString8', 8);
		}
		if (answerScore('q9') === 0) {
			document.getElementById('correctAnswer9').innerHTML = correctAnswer('correctString9', 9);
		}
		if (answerScore('q10') === 0) {
			document.getElementById('correctAnswer10').innerHTML = correctAnswer('correctString1', 10);
		}
		if (answerScore('q11') === 0) {
			document.getElementById('correctAnswer11').innerHTML = correctAnswer('correctString3', 11);
		}
		if (answerScore('q12') === 0) {
			document.getElementById('correctAnswer12').innerHTML = correctAnswer('correctString4', 12);
		}
		if (answerScore('q13') === 0) {
			document.getElementById('correctAnswer13').innerHTML = correctAnswer('correctString5', 13);
		}
		if (answerScore('q14') === 0) {
			document.getElementById('correctAnswer14').innerHTML = correctAnswer('correctString6', 14);
		}
		if (answerScore('q15') === 0) {
			document.getElementById('correctAnswer15').innerHTML = correctAnswer('correctString7', 15);
		}
		if (answerScore('q16') === 0) {
			document.getElementById('correctAnswer16').innerHTML = correctAnswer('correctString1', 16);
		}
		if (answerScore('q17') === 0) {
			document.getElementById('correctAnswer17').innerHTML = correctAnswer('correctString2', 17);
		}
		if (answerScore('q18') === 0) {
			document.getElementById('correctAnswer18').innerHTML = correctAnswer('correctString3', 18);
		}
		if (answerScore('q19') === 0) {
			document.getElementById('correctAnswer19').innerHTML = correctAnswer('correctString4', 19);
		}
		if (answerScore('q20') === 0) {
			document.getElementById('correctAnswer20').innerHTML = correctAnswer('correctString5', 20);
		}
		


		var showScore = "Your Score: " + calcScore +"/" + questionCounter;
	
		if (calcScore === questionCounter) {
			showScore = showScore + "&nbsp; <strong>Perfect Score!</strong>"
		};
		document.getElementById('userScore').innerHTML = showScore;
		document.getElementById("calc").value = calcScore;
		
	}	
	$(document).ready(function() {

	$('#submitButton').click(function() {
		$(this).addClass('hide');
	});

});
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

 function time () {
    var fiveMinutes = 60 * 30,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};


</script>
<link rel="stylesheet" href="quiz1.css">
<style>

* {
    box-sizing: border-box;
}
.container {
    position: relative;
	color:blue;
}
html,body{
	background-image: url("back.jpg");
	
}

.center {
    position: absolute;
    top: -9%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 80px;
}
.center1 {
    position: absolute;
    top: 10%;
    left: 80%;
   
    font-size: 20px;
	color:red;
}
img { 
    width: 100%;
    height: auto;
    opacity: 0.5;
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


</style>

</head>
<body onload="time()">
	
<h2 style ="color:red";>Hello: 
<b><?php 
echo $_SESSION['user']; ?></b></h2>
<div class="container">
  
  <div class="center"><h4><pre>   Take a Quiz! </pre></h4></div>
  
</div>



  
  
	<table border="1px" style="width:1000px; margin:1em auto;" align:center>
	<tr>
	<td><h2 align="center"><font color="red">QUESTIONS ON C++</font></h2></td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question"><b>1.  Identify the incorrect statement.</b></p>

	    	<ul>
	    	<input class="answer" type="radio" name="q1" value="1">
	        <label id="correctString1"> iostream is a standard header and iostream.h is a non-standard header</label>
	    	<br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>iostream is a non-standard header and iostream.h is a non-standard header</label>
	        <br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label> iostream is a standard header and iostream.h is a standard header</label>
	        <br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>none of the mentioned</label>
    		</ul>
	  	</div>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  	<div>
	  		<p class="question"><b>2. Choose the right option</b><br/>
     string* x, y;</p>

	    	<ul>
	        <input class="answer" type="radio" name="q2" value="1">
	        <label id="correctString2">x is a pointer to a string, y is a string</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>y is a pointer to a string, x is a string</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>both x and y are pointer to string types</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>none of the mentioned</label>
	    	</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question"><b>3.  Which feature of the OOPS gives the concept of reusability?</b></p>

	    	<ul>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>abstraction</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>encapsulation</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="1">
	        <label id="correctString3">inheritance</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>None of the above</label>
	    	</ul>
		</div>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  	<div>
	  		<p class="question"><b>4.Choose the pure virtual function definition from the following. </b><br/>

</p>

	    	<ul>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>virtual void f()=0 {}</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>void virtual f()=0 { }</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="1">
	        <label id="correctString4">virtual void f() {} = 0;</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>None of the above.</label>
    		</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question"><b>5.  Choose the operator which cannot be overloaded.</b></p>

	    	<ul>
	    	<input class="answer" type="radio" name="q5" value="0">
	        <label> /</label>
	    	<br>
	        <input class="answer" type="radio" name="q5" value="0">
	        <label>()</label>
	        <br>
	        <input class="answer" type="radio" name="q5" value="1">
	        <label id="correctString5">::</label>
	        <br>
	        <input class="answer" type="radio" name="q5" value="0">
	        <label>%</label>
    		</ul>
	  	</div>
	  </td>
	  </tr>
	  <tr>
	 <td><h2 align="center"><font color="red">QUESTIONS ON WEB PROGRAMMING</font></h2></td>
	 </tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question"><b>6.What tag is used to display a picture in a HTML page?</b></p>

	    	<ul>
	        <input class="answer" type="radio" name="q6" value="0">
	        <label>picture</label>
	        <br>
	        <input class="answer" type="radio" name="q6" value="0">
	        <label>image</label>
	        <br>
	        <input class="answer" type="radio" name="q6" value="1">
	        <label id="correctString6">img</label>
	        <br>
	        <input class="answer" type="radio" name="q6" value="0">
	        <label>src</label>
	    	</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question"><b>7.  What is document object model (DOM)? </b></p>

	    	<ul>
	        <input class="answer" type="radio" name="q7" value="1">
	        <label id="correctString7">convention for representing and interacting with objects in html documents</label>
	        <br>
	        <input class="answer" type="radio" name="q7" value="0">
	        <label>application programming interface</label>
	        <br>
	        <input class="answer" type="radio" name="q7" value="0">
	        <label>hierarchy of objects in ASP.NET</label>
	        <br>
	        <input class="answer" type="radio" name="q7" value="0">
	        <label> none of the mentioned</label>
	    	</ul>
		</div>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  	<div>
	  		<p class="question"><b>8.URL stands  for </b></p>

	    	<ul>
	        <input class="answer" type="radio" name="q8" value="0">
	        <label> unique reference label</label>
	        <br>
	        <input class="answer" type="radio" name="q8" value="0">
	        <label> uniform reference label</label>
	        <br>
	        <input class="answer" type="radio" name="q8" value="1">
	        <label id="correctString8">uniform resource locator</label>
	        <br>
	        <input class="answer" type="radio" name="q8" value="0">
	        <label> unique resource locator</label>
    		</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question"><b>9. Markup tags tell the web browser</b> </p>

	    	<ul>
	    	<input class="answer" type="radio" name="q9" value="0">
	        <label>How to organise the page </label>
	    	<br>
	        <input class="answer" type="radio" name="q9" value="1">
	        <label id="correctString9">How to display the page</label>
	        <br>
	        <input class="answer" type="radio" name="q9" value="0">
	        <label>How to display message box on page</label>
	        <br>
	        <input class="answer" type="radio" name="q9" value="0">
	        <label>None of these</label>
    		</ul>
	  	</div>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  	<div>
	  		<p class="question"><b>10.The web standard allows programmers on many different computer platforms to dispersed format and display the information server. These programs are called </b></p>

	    	<ul>
	        <input class="answer" type="radio" name="q10" value="1">
	        <label id="correctstring10">Web Browsers</label>
	        <br>
	        <input class="answer" type="radio" name="q10" value="0">
	        <label>HTML</label>
	        <br>
	        <input class="answer" type="radio" name="q10" value="0">
	        <label>Internet Explorer</label>
	        <br>
	        <input class="answer" type="radio" name="q10" value="0">
	        <label>None of these</label>
	    	</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	 <td><h2 align="center"><font color="red">QUESTIONS ON DATA STRUCTURE</font></h2></td>
	 </tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question"><b>11. Minimum number of moves required to solve a Tower of Hanoi puzzle is</b></p>

	    	<ul>
	        <input class="answer" type="radio" name="q11" value="0">
	        <label>n</label>
	        <br>
	        <input class="answer" type="radio" name="q11" value="0">
	        <label> n^(n - 1)</label>
	        <br>
	        <input class="answer" type="radio" name="q11" value="1">
	        <label id="correctString11">1</label>
	        <br>
	        <input class="answer" type="radio" name="q11" value="0">
	        <label>0</label>
	    	</ul>
		</div>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  	<div>
	  		<p class="question"><b>12.prefix notation is alsow known as.</b> <br/>

</p>

	    	<ul>
	        <input class="answer" type="radio" name="q12" value="0">
	        <label>Reverse Polish Notation</label>
	        <br>
	        <input class="answer" type="radio" name="q12" value="0">
	        <label>Reverse Notation</label>
	        <br>
	        <input class="answer" type="radio" name="q12" value="1">
	        <label id="correctString12">Polish Reverse Notation</label>
	        <br>
	        <input class="answer" type="radio" name="q12" value="0">
	        <label>Polish Notation</label>
    		</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question"><b>13. A circular linked list can be used for</b></p>

	    	<ul>
	    	<input class="answer" type="radio" name="q13" value="0">
	        <label>stack </label>
	    	<br>
	        <input class="answer" type="radio" name="q13" value="0">
	        <label>Queue</label>
	        <br>
	        <input class="answer" type="radio" name="q13" value="1">
	        <label id="correctString13"> Both Stack & Queue </label>
	        <br>
	        <input class="answer" type="radio" name="q13" value="0">
	        <label>Neither Stack or Queue</label>
    		</ul>
	  	</div>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  	<div>
	  		<p class="question"><b>14.How many swaps are required to sort the given array using bubble sort - { 2, 5, 1, 3, 4} </b></p>

	    	<ul>
	        <input class="answer" type="radio" name="q14" value="1">
	        <label id="correctString14">4</label>
	        <br>
	        <input class="answer" type="radio" name="q14" value="0">
	        <label>5</label>
	        <br>
	        <input class="answer" type="radio" name="q14" value="0">
	        <label>6</label>
	        <br>
	        <input class="answer" type="radio" name="q14" value="0">
	        <label>7</label>
	    	</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question"><b>15.A stable sorting alrithm −</b> </p>

	    	<ul>
	        <input class="answer" type="radio" name="q15" value="0">
	        <label> does not crash.</label>
	        <br>
	        <input class="answer" type="radio" name="q15" value="0">
	        <label> does not run out of memory.</label>
	        <br>
	        <input class="answer" type="radio" name="q15" value="1">
	        <label id="correctString15"> does not change the sequence of appearance of elements.</label>
	        <br>
	        <input class="answer" type="radio" name="q15" value="0">
	        <label>does not exists.</label>
	    	</ul>
		</div>
	  </td>
	  </tr>
	  <tr>
	 <td><h2 align="center"><font color="red">QUESTIONS ON PYTHON</font></h2></td>
	 </tr>
	  <tr>
	  <td>
	  	<div>
	  		<p class="question"><b>16. What is the output of the following?<br/>

print("Hello {name1} and {name2}".format(name1='foo', name2='bin'))</b></p>

	    	<ul>
	        <input class="answer" type="radio" name="q16" value="1">
	        <label id="correctString16"> Hello foo and bin</label>
	        <br>
	        <input class="answer" type="radio" name="q16" value="0">
	        <label>Hello {name1} and {name2}</label>
	        <br>
	        <input class="answer" type="radio" name="q16" value="0">
	        <label>Error</label>
	        <br>
	        <input class="answer" type="radio" name="q16" value="0">
	        <label>Hello and</label>
    		</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question"><b>17. What is the output of the following?<br/>

print("Hello {0[0]} and {0[1]}".format(('foo', 'bin'))) </b></p>

	    	<ul>
	    	<input class="answer" type="radio" name="q17" value="1">
	        <label id="correctString17"> Hello foo and bin</label>
	    	<br>
	        <input class="answer" type="radio" name="q17" value="0">
	        <label> Hello (‘foo’, ‘bin’) and (‘foo’, ‘bin’)</label>
	        <br>
	        <input class="answer" type="radio" name="q17" value="0">
	        <label>Error </label>
	        <br>
	        <input class="answer" type="radio" name="q17" value="0">
	        <label>None of the mentioned</label>
    		</ul>
	  	</div>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  	<div>
	  		<p class="question"><b>18. What is the output of the following?<br/>

print('{:,}'.format('1112223334')) </b></p>

	    	<ul>
	        <input class="answer" type="radio" name="q18" value="1">
	        <label id="correctString18">1,112,223,334</label>
	        <br>
	        <input class="answer" type="radio" name="q18" value="0">
	        <label>111,222,333,4</label>
	        <br>
	        <input class="answer" type="radio" name="q18" value="0">
	        <label>1112223334</label>
	        <br>
	        <input class="answer" type="radio" name="q18" value="0">
	        <label>Error</label>
	    	</ul>
	  	</div>
	  </td>
	</tr>
	<tr>
	  <td>
	  	<div>
	  		<p class="question"><b>19.What is the output of print tinylist * 2 if tinylist = [123, 'john']?</b></p>

	    	<ul>
	        <input class="answer" type="radio" name="q19" value="1">
	        <label id="correctString19">[123, 'john', 123, 'john']</label>
	        <br>
	        <input class="answer" type="radio" name="q19" value="0">
	        <label> [123, 'john'] * 2</label>
	        <br>
	        <input class="answer" type="radio" name="q19" value="0">
	        <label>Error</label>
	        <br>
	        <input class="answer" type="radio" name="q19" value="0">
	        <label>None of the above</label>
	    	</ul>
		</div>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  	<div>
	  		<p class="question"><b>20.What is the following function removes last object from a list?</b></p>

	    	<ul>
	        <input class="answer" type="radio" name="q20" value="0">
	        <label>list.index(obj)</label>
	        <br>
	        <input class="answer" type="radio" name="q20" value="0">
	        <label>list.insert(index, obj)</label>
	        <br>
	        <input class="answer" type="radio" name="q20" value="1">
	        <label id="correctString20">list.pop(obj=list[-1])</label>
	        <br>
	        <input class="answer" type="radio" name="q20" value="0">
	        <label>list.remove(obj)</label>
    		</ul>
	  	</div>
	  </td>
	</tr>
	</table>
	
	
<br/>
  <div class="submitter">
          
    </div>
	
	<center><input class="quizSubmit" id="submitButton" onClick="submitQuiz()"
          type="submit" value="Submit" /></center>
	<form action ="score.php" method = "POST">
	<input type="hidden" id="calc" name="cal">
	<br>
	<center><input type ="submit" value= "Logout" class="quizSubmit"/></center>
	</form>
	<div>
    	<h2 class="quizScore" id="userScore"></h2>
    </div>
	
    <div class="quizAnswers" id="correctAnswer1"></div>
	<div class="quizAnswers" id="correctAnswer2"></div>
    <div class="quizAnswers" id="correctAnswer3"></div>
    <div class="quizAnswers" id="correctAnswer4"></div>
	<div class="quizAnswers" id="correctAnswer5"></div>
	<div class="quizAnswers" id="correctAnswer6"></div>
    <div class="quizAnswers" id="correctAnswer7"></div>
    <div class="quizAnswers" id="correctAnswer8"></div>
	<div class="quizAnswers" id="correctAnswer9"></div>
	<div class="quizAnswers" id="correctAnswer10"></div>
    <div class="quizAnswers" id="correctAnswer11"></div>
    <div class="quizAnswers" id="correctAnswer12"></div>
	<div class="quizAnswers" id="correctAnswer13"></div>
	<div class="quizAnswers" id="correctAnswer14"></div>
    <div class="quizAnswers" id="correctAnswer15"></div>
    <div class="quizAnswers" id="correctAnswer16"></div>
	<div class="quizAnswers" id="correctAnswer17"></div>
	<div class="quizAnswers" id="correctAnswer18"></div>
    <div class="quizAnswers" id="correctAnswer19"></div>
    <div class="quizAnswers" id="correctAnswer20"></div></div>
	
	
    <div class="center1">ENDS IN <span id="time">30:00</span> minutes!</div>

	
	</body>
</html>