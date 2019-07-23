<?php
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
?>