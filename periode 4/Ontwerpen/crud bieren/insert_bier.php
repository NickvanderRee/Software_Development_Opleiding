<?php
// functie: Inserting an database cell.
// auteur: Nick van der Ree.

    require_once('functions.php');
    echo "<h1>Insert 'Bier'</h1>";
    
    if(isset($_POST) && isset($_POST['insert'])){
        CreateBier($_POST);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert Bier</title>
    </head>
    <body>
        <form action="#" method="post">
            <input type="number" name="biercode" id="0" hidden><br>
            <label for="1">Biernaam: </label><input type="text" name="biernaam" value="" id="1" required><br>
            <label for="2">Soort: </label><input type="text" name="soort" value="" id="2" required><br>
            <label for="3">Stijl: </label><input type="text" name="stijl" value="" id="3" required><br>
            <label for="4">Alcohol %: </label><input type="number" name="alcohol" value="" id="4" required><br>
            <label for="5">Brouwcode: </label><select name="brouwcode" id="5">
            <?php
                BrouwerOpties();
            ?>
            </select><br>
            <br><input type="submit" name="insert" value="Insert" id="insert">
        </form>
    <a href="crud.php">Return to CRUD</a>
    </body>
</html>