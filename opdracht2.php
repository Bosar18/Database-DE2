
<?php
$servername = "localhost";
$databasename = "database2";
$username = "user1";
$password = "g8bal28";

// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


?>
