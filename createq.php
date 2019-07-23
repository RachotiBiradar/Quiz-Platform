<?php
$dbhost = 'localhost';     $dbuser = 'root';   $dbpass = '';
$connection = mysqli_connect($dbhost, $dbuser, $dbpass);
session_start();

$q1=$_POST['q1'];
$q1op1=$_POST['q1op1'];
$q1op2=$_POST['q1op2'];
$q1op3=$_POST['q1op3'];
$q1op4=$_POST['q1op4'];
$q1ans=$_POST['q1ans'];

$q2=$_POST['q2'];
$q2op1=$_POST['q2op1'];
$q2op2=$_POST['q2op2'];
$q2op3=$_POST['q2op3'];
$q2op4=$_POST['q2op4'];
$q2ans=$_POST['q2ans'];

$q3=$_POST['q3'];
$q3op1=$_POST['q3op1'];
$q3op2=$_POST['q3op2'];
$q3op3=$_POST['q3op3'];
$q3op4=$_POST['q3op4'];
$q3ans=$_POST['q3ans'];

$q4=$_POST['q4'];
$q4op1=$_POST['q4op1'];
$q4op2=$_POST['q4op2'];
$q4op3=$_POST['q4op3'];
$q4op4=$_POST['q4op4'];
$q4ans=$_POST['q4ans'];

$q5=$_POST['q5'];
$q5op1=$_POST['q5op1'];
$q5op2=$_POST['q5op2'];
$q5op3=$_POST['q5op3'];
$q5op4=$_POST['q5op4'];
$q5ans=$_POST['q5ans'];

$q6=$_POST['q6'];
$q6op1=$_POST['q6op1'];
$q6op2=$_POST['q6op2'];
$q6op3=$_POST['q6op3'];
$q6op4=$_POST['q6op4'];
$q6ans=$_POST['q6ans'];

$q7=$_POST['q7'];
$q7op1=$_POST['q7op1'];
$q7op2=$_POST['q7op2'];
$q7op3=$_POST['q7op3'];
$q7op4=$_POST['q7op4'];
$q7ans=$_POST['q7ans'];

$q8=$_POST['q8'];
$q8op1=$_POST['q8op1'];
$q8op2=$_POST['q8op2'];
$q8op3=$_POST['q8op3'];
$q8op4=$_POST['q8op4'];
$q8ans=$_POST['q8ans'];

$q9=$_POST['q9'];
$q9op1=$_POST['q9op1'];
$q9op2=$_POST['q9op2'];
$q9op3=$_POST['q9op3'];
$q9op4=$_POST['q9op4'];
$q9ans=$_POST['q9ans'];

$q10=$_POST['q10'];
$q10op1=$_POST['q10op1'];
$q10op2=$_POST['q10op2'];
$q10op3=$_POST['q10op3'];
$q10op4=$_POST['q10op4'];
$q10ans=$_POST['q10ans'];

$title=$_POST['title'];
$teacher= $_SESSION['user'];

if(! $connection ) {
  die('Could not connect: ' . mysqli_error($connection));
 }
echo 'SUCCESS';
echo "<br>";
echo "<br>";
	echo '<a href="factry.php">BACK</a>';

$dbhandle=mysqli_select_db($connection, 'wppro1' );


$result=mysqli_query($connection,"INSERT INTO quizdata2(qname,qteacher,q1,q1op1,q1op2,q1op3,q1op4,q1ans,q2,q2op1,q2op2,q2op3,q2op4,q2ans,q3,q3op1,q3op2,q3op3,q3op4,q3ans,q4,q4op1,q4op2,q4op3,q4op4,q4ans,q5,q5op1,q5op2,q5op3,q5op4,q5ans,q6,q6op1,q6op2,q6op3,q6op4,q6ans,q7,q7op1,q7op2,q7op3,q7op4,q7ans,q8,q8op1,q8op2,q8op3,q8op4,q8ans,q9,q9op1,q9op2,q9op3,q9op4,q9ans,q10,q10op1,q10op2,q10op3,q10op4,q10ans) VALUES('$title','$teacher','$q1','$q1op1','$q1op2','$q1op3','$q1op4','$q1ans','$q2','$q2op1','$q2op2','$q2op3','$q2op4','$q2ans','$q3','$q3op1','$q3op2','$q3op3','$q3op4','$q3ans','$q4','$q4op1','$q4op2','$q4op3','$q4op4','$q4ans','$q5','$q5op1','$q5op2','$q5op3','$q5op4','$q5ans','$q6','$q6op1','$q6op2','$q6op3','$q6op4','$q6ans','$q7','$q7op1','$q7op2','$q7op3','$q7op4','$q7ans','$q8','$q8op1','$q8op2','$q8op3','$q8op4','$q8ans','$q9','$q9op1','$q9op2','$q9op3','$q9op4','$q9ans','$q10','$q10op1','$q10op2','$q10op3','$q10op4','$q10ans')");
if(!$result )
{
  die('Could retrieve data: ' . mysqli_error($connection));
}

?>