<?php
// functie: CRUD Systeem.
// auteur: Nick van der Ree.

// Initialisatie
include 'functions.php';

// Main
echo "<h1>CRUD BIEREN</h1>";

echo "<form method='post' action='insert_bier.php'> 
      <button name='btn_insert'>Insert New Bier</button></form>";

// Print Crud Bieren
CrudBieren();

?>