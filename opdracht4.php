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

if(isset($_POST['submitinp']) && isset($_POST['artistinp']) && isset($_POST['titleinp'])){

    $id = $_POST['id'];
    $artist = $_POST['artistinp'];
    $title = $_POST['titleinp'];

    $sql = "INSERT INTO `songs`(`id`, `artist`, `title`) 
    VALUES ('$id', '$artist','$title')";

    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: opdracht2.php");
    }
}

if(isset($_POST['submit3'])){
    header("location: opdracht2.php");
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
        <input type="text" name="artistinp" placeholder="artist...." class="text3">
    </td>
  </tr>
  <tr>
    <td>
        <input type="text" name="titleinp" placeholder="title...." class="text3">
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
