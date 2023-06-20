<?php
// Functie: Deleting data from the selected database.
// Auteur: Nick van der Ree.

// Initialisatie
require_once('functions.php');

// Print ->
echo '<h1> Delete Data </h1>';

if(isset($_GET['biercode'])){
    echo '<br> Data uit het vorige formulier: <br>';
    $biercode = $_GET['biercode'];
    $row = GetBier($biercode);
    echo '<table border = 1px>';
        echo '<tr>';
            foreach ($row as  $value) {
                echo '<td>' . $value . '</td>';
            } 
        echo '</tr>';
    echo '</table>';
} else {
    echo 'Geen biercode opgegeven';
}

// Tests if the delete button is pressed.
if(isset($_POST) && isset($_POST['delete'])){
    DeleteBier($biercode);
    header("location:crud.php"); 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
</head>
<body>
    <form action="#" method="post">
        <input type="number" name="biercode" value="<?php echo $_GET['biercode']?>" id="0" hidden required><br>
        <input type="submit" name="delete" value="Delete" id="delete">
        <a href="crud.php">Return to CRUD</a>
    </form>    
</body>
</html>