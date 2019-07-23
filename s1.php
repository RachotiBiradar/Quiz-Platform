 <?php
 header('Content-Type: application/json');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wppro1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT score FROM score";
$result = $conn->query($sql);

$data= array();
foreach ($result as $row)
{$data[] = $row;
}

$conn->close();
print json_encode($data);
?> 