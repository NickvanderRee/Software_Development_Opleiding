<?php
    // auteur: Nick van der Ree
    // functie: wijzig een film
    
    echo "<h1>Update Bier</h1>";
    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST) && isset($_POST['btn_wzg'])){
        UpdateBier($_POST);

        //header("location: update.php?$_POST[NR]");
    }

    if(isset($_GET['biercode'])){  
        echo "Data uit het vorige formulier:<br>";
        // Haal alle info van de betreffende biercode $_GET['biercode']
        $biercode = $_GET['biercode'];
        $row = GetBier($biercode);
    }
   ?>

<html>
    <<head>
       <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <form method="post">
        <br>
        Biercode:<input type="" name="biercode" value="<?php echo $row['biercode'];?>"><br>
        <label for="naam">Naam</label>
        <input type="" name="naam" id="naam"value="<?php echo $row['naam'];?>"><br> 
        <label for="soort">Soort</label>
        <input type="text" name="soort" id="soort" value="<?= $row['soort']?>"><br>
        <label for="stijl">Stijl</label>
        <input type="text" name="stijl" id="stijl" value="<?= $row['stijl']?>"><br>
        <label for="alcohol">Alcohol</label>
        <input type="text" name="alcohol"id="alcohol" value="<?= $row['alcohol']?>"><br>
        <label for="brouwcode">Brouwcode</label>
        <input type="text" name="brouwcode" value="<?= $row['brouwcode']?>"><br><br>
         <input type="submit" name="btn_wzg" value="Wijzigen"><br>
        </form>
    </body>
</html>