<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

if(isset($_POST['submitinp']) && isset($_POST['naaminp']) && isset($_POST['geboortedatuminp'])){

    $id = $_POST['id'];
    $naam = $_POST['naaminp'];
    $geboortedatum = $_POST['geboortedatuminp'];

    $sql = "INSERT INTO `leeftijd`(`id`, `naam`, `geboortedatum`) 
    VALUES ('$id', '$naam','$geboortedatum')";

    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: eindopdrachtoverzicht.php");
    }
}

if(isset($_POST['submit3'])){
    header("location: eindopdrachtoverzicht.php");
};
?>  

    <form  method="POST">
        
    <Table>
    <tr>
    <th>
        <input type="text" name="id" placeholder="id...." class="text3">
    </th>
  </tr>
  <tr>
    <td>
        <input type="text" name="naaminp" placeholder="naam...." class="text3">
    </td>
  </tr>
  <tr>
    <td>
        <input type="date" name="geboortedatuminp" placeholder="geboortedatum...." class="text3">
    </td>
  </tr>
  <tr>
    <td>
        <input type="submit" name="submitinp" value="Verzend" class="button4">
    </td>
  </tr>
  <tr>
    <td>
        <input type="submit" name="submit3" value="terug" class="button4">
    </td>
  </tr>
    </Table>

    </form>

</body>
</html>