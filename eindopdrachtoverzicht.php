<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
<?php
$servername = "localhost";
$databasename = "database eindopdracht";
$username = "user1";
$password = "g8bal28";

// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);
$query = 'SELECT * FROM `leeftijd`';


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully" . '<br>';

echo "<form method='POST' action='opdracht5.php'>";
if ($result = $conn -> query($query)) {
    while($row = $result->fetch_assoc()){
        echo $row['id'] . ' ';
        echo $row['naam'] .  ', ';
        echo $row['geboortedatum'] . '<input type="submit" value="wijzig ' . $row["id"] . '" name="id"><input type="submit" value="verwijder ' . $row["id"] . '"name="id"><br>';
    }
    
    $result -> free_result();
}
echo "</form>";

if(isset($_POST["submitin"])){
    header("location: invoegoverzicht.php");
};

?>

    <form  method="POST">
        
        <Table>
      <tr>
        <td>
            <input type="submit" name="submitin" value="voeg toe" class="button3">
        </td>
      </tr>
        </Table>
    
        </form>
</body>
</html>
