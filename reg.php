<?php
include_once 'db.php';
if ($conn->connect_error) {
die("coneection failed:" . $conn->connect_error);}
$field0 = $_POST['name'];
$field1 = $_POST['usn'];
$field2 = $_POST['sem'];
$field3 = $_POST['phone'];
$field4 = $_POST['user'];
$field5 = $_POST['email'];
$field6 = $_POST['pass'];
if(!filter_var($field5,FILTER_VALIDATE_EMAIL))
{
	header("Location: ../register.php?email=invalid");
	exit();
}else {
	$sql = "SELECT * FROM registration WHERE user='$field4'";
	$result = mysqli_query($conn,$sql);
	$resultcheck = mysqli_num_rows($result);
	if ($resultcheck >0)
	{
		header("Location: ../register.php?usertaken");
	exit();
	}
	else{
		


$sql = "INSERT INTO registration (name,usn,sem,phone,user,email,password) VALUES ('$field0','$field1','$field2','$field3','$field4','$field5','$field6')";
if ($conn->query($sql)=== TRUE)
{
	echo "Registration Successful";
	echo "<br>";
echo "<br>";
	echo '<a href="home.php">Click here to go to homepage</a>';
}
else { echo "Error:" . $sql . "<br>" . $conn->error;
}
	}
}

$conn->close();

?>