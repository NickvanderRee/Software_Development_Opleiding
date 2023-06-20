<?php
// auteur: Nick van der Ree
// functie: verwijder een bier op basis van de biercode
include 'functions.php';

// Haal bier uit de database
if(isset($_GET['filmid'])){
    DeleteFilm($_GET['filmid']);

    echo '<script>alert("Filmid: ' . $_GET['filmid'] . ' is verwijderd")</script>';
    echo "<script> location.replace('crud_films.php'); </script>";
}
?>

