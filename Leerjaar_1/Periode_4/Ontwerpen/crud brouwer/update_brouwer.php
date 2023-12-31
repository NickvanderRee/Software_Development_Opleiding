<?php
// functie: Updating an database cell.
// auteur: Nick van der Ree.

    require_once('functions.php');
    echo "<h1>Edit 'Bier'</h1>";
    
    if(isset($_POST) && isset($_POST['edit'])){
        UpdateBier($_POST);
    }

    if(isset($_GET['biercode'])){
        echo "Selected data cell: <br>";
        $biercode = $_GET['biercode'];
        $row = GetBier($biercode);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <form action="#" method="post">
        <input type="number" name="biercode" value="<?php echo $_GET['biercode']?>" id="0" hidden required><br>
        <label for="1">Biernaam: </label><input type="text" name="biernaam" value="<?=$row['naam']?>" id="1" required><br>
        <label for="2">Soort: </label><input type="text" name="soort" value="<?=$row['soort']?>" id="2" required><br>
        <label for="3">Stijl: </label><input type="text" name="stijl" value="<?=$row['stijl']?>" id="3" required><br>
        <label for="4">Alcohol %: </label><input type="number" name="alcohol" value="<?=$row['alcohol']?>" id="4" required><br>
        <label for="5">Brouwcode: </label><select name="brouwcode" id="5">
            <?php
                BrouwerOpties();
            ?>
        </select><br>
        <input type="submit" name="edit" value="Edit" id="edit">
    </form>    

    <a href="crud.php">Return to CRUD</a>
</body>
</html>