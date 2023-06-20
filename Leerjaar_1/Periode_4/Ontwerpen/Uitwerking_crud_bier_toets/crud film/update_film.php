<?php
    // auteur: Nick van der Ree
    echo "<h1>Update Film</h1>";
    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST['btn_wzg'])){
        UpdateFilm($_POST);

        //header("location: crud_bieren.php");
    }

    if(isset($_GET['filmid'])){  
        // Haal alle info van de betreffende biercode $_GET['biercode']
        $filmid = $_GET['filmid'];
        $row = GetFilm($filmid);
    
?>

<html>
    <body>
        <form method="post">
        <br>
        <input type="hidden" name="filmid" value="<?php echo $row['filmid'];?>"><br>
        filmnaam:<input type="" name="filmnaam" value="<?php echo $row['filmnaam'];?>"><br> 
        <!-- genreid: <input type="text" name="genreid" value="<?= $row['genreid']?>"><br> -->
        <?php
        dropDownDistinct("Genre id: ", -1, "genreid");
        echo "<br>";
         ?>
        releasejaar: <input type="text" name="releasejaar" value="<?= $row['releasejaar']?>"><br>
        regisseur: <input type="text" name="regisseur" value="<?= $row['regisseur']?>"><br>
        landherkomst: <input type="text" name="landherkomst" value="<?= $row['landherkomst']?>"><br>
        duur: <input type="text" name="duur" value="<?= $row['duur']?>"><br>
        <?php
            //dropDownBrouwer('brouwcode', $row['brouwcode'] );
        ?>

        <!---Brouwcode: <input type="text" name="brouwcode" value="<?= $row['brouwcode']?>">-->
        <br><br>
         <input type="submit" name="btn_wzg" value="Wijzigen"><br>
        </form>
        <br><br>
        <a href='crud_films.php'>Home</a>
    </body>
</html>

<?php
    } else {
        "Geen Film opgegeven<br>";
    }
?>