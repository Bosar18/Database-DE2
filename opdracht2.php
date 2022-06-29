<?php
$servername = "localhost";
$databasename = "db_level2_opdr1";
$username = "user1";
$password = "g8bal28";

// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);
$query = 'SELECT * FROM `songs`';


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully" . '<br>';

if ($result = $conn -> query($query)) {
    while($row = $result->fetch_assoc()){
        echo $row['id'] . ' ';
        echo $row['artist'] .  ', ';
        echo $row['title'] . '<br />';
    }
    
    $result -> free_result();
}

?>