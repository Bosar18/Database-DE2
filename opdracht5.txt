<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method='POST'>
            <?php
                $id = explode(" ", $_POST["id"])[1];

                echo "<input type='text' name='id' value='$id' readonly>";
                echo "<input type='text' name='artist'>";
                echo "<input type='text' name='title'>";
                echo "<input type='submit' name='submit' value='verzend'>";
                echo "<input type='submit' name='submit2' value='terug'>";
            ?>
        </form>
    </body>
</html>
<?php
    if (isset($_POST["submit"])) {
        $servername = "localhost";
        $databasename = "db_level2_opdr1";
        $username = "user1";
        $password = "g8bal28";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $databasename);

        $id = $_POST["id"];
        $artist = $_POST["artist"];
        $title = $_POST["title"];
        

        $query = "UPDATE `songs` SET `id` = '$id', `artist` = '$artist', `title` = '$title' WHERE `songs`.`id` = $id";
        $query_run = mysqli_query($conn,$query);
        header("Location: opdracht2.php");
    }
    if (isset($_POST["submit2"])) {
        header("location: opdracht2.php");
    };
?>