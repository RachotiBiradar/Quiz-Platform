<?php
session_start();
include_once 'db.php';
if ($conn->connect_error) {
die("coneection failed:" . $conn->connect_error);}
$field0 = $_POST['cal'];
$field1= $_SESSION['user']; 
$sql = "INSERT INTO score (score,name) VALUES ('$field0','$field1')";
if ($conn->query($sql)=== TRUE)
{
echo 'You have been logout successfully';
unset($_SESSION['user']);
header('Location: home.php');
}
else { echo "Error:" . $sql . "<br>" . $conn->error;
}
	


$conn->close();
?>