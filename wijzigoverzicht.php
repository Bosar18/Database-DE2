<?php
        $servername = "localhost";
        $databasename = "database eindopdracht";
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
    </head>
    <body>
        <form method='POST'>
            <?php
                $id = explode(" ", $_POST["id"]);

                if($id[0]=="wijzig"){
                    
                echo "<input type='text' name='id' value='$id[1]' readonly>";
                echo "<input type='text' name='naam'>";
                echo "<input type='date' name='geboortedatum'>";
                echo "<input type='submit' name='submit' value='verzend'>";
                echo "<input type='submit' name='submit2' value='terug'>";
                }elseif($id[0]=="verwijder"){
                        $query = $conn -> query("DELETE FROM leeftijd WHERE id = '$id[1]'");
                        header("location: eindopdrachtoverzicht.php");
                };
            
            ?>
        </form>
    </body>
</html>
<?php
    if (isset($_POST["submit"])) {

        $id = $_POST["id"];
        $naam = $_POST["naam"];
        $geboortedatum = $_POST["geboortedatum"];
        

        $query = "UPDATE `songs` SET `id` = '$id', `naam` = '$naam', `geboortedatum` = '$geboortedatum' WHERE `leeftijd`.`id` = $id";
        $query_run = mysqli_query($conn,$query);
        header("Location: eindopdrachtoverzicht.php");
    }
    if (isset($_POST["submit2"])) {
        header("location: eindopdrachtoverzicht.php");
    };
?>