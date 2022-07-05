<?php
        $servername = "localhost";
        $databasename = "db_level2_opdr1";
        $username = "user1";
        $password = "g8bal28";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $databasename);
?>

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
                $id = explode(" ", $_POST["id"]);

                if($id[0]=="wijzig"){
                    
                echo "<input type='text' name='id' value='$id[1]' readonly>";
                echo "<input type='text' name='artist'>";
                echo "<input type='text' name='title'>";
                echo "<input type='submit' name='submit' value='verzend'>";
                echo "<input type='submit' name='submit2' value='terug'>";
                }elseif($id[0]=="verwijder"){
                        $query = $conn -> query("DELETE FROM songs WHERE id = '$id[1]'");
                        header("location: opdracht2.php");
                };
            
            ?>
        </form>
    </body>
</html>
<?php
    if (isset($_POST["submit"])) {

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