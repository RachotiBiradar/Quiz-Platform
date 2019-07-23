 <?php
session_start();

$dbhost = 'localhost';     
$dbuser = 'root';   
$dbpass = '';
$connection = mysqli_connect($dbhost, $dbuser, $dbpass);

if(!$connection ) {  
die('Could not connect to Server' 
.mysqli_error($connection));  
}

$dbhandle=mysqli_select_db($connection, 'wppro1');
if(!$dbhandle) {  
die('Database Selection Problem' 
.mysqli_error($connection));  
}

$myusername=$_POST['user'];
$mypassword=$_POST['password'];

$query = "SELECT * FROM faculty 
WHERE user='$myusername' AND password='$mypassword'";
$result=mysqli_query($connection,$query);
if(!$result )
{
die('Could not retrieve data: '
.mysqli_error($connection));
}
 
$count= mysqli_num_rows($result);
if($count==1)
{   
$_SESSION['user']=$_POST['user'];
header("Location: ../includes/factry.php");
}
else { 
   session_destroy();
   ?>
   <script>alert('Your Login Name or Password is invalid');
   window.location.href ="faculty.php?fail";
   </script>
   <?php
   }
?>



	