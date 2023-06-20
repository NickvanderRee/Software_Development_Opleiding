<?php
// auteur: Nick van der Ree
    echo "<h1>Insert Film</h1>";

    require_once('functions.php');
	 
	 

    // Test of er op de insert-knop is gedrukt 
    if(isset($_POST) && isset($_POST['btn_ins'])){
		 
        InsertFilm($_POST);
        echo '<script>alert("Film: ' . $_POST['filmnaam'] . ' is toegevoegd")</script>';
        //echo "<script> location.replace('crud_bieren.php'); </script>";
    }
?>

<html>
    <body>
        <form method="post">
        <br>
        Film naam:<input type="" name="filmnaam"><br> 
        <!-- Genre id: <input type="number" name="genreid"><br> -->
        <?php
        dropDownDistinct("Genre id: ", -1, "genreid");
        echo "<br>";
         ?>
        Release jaar: <input type="text" name="releasejaar"><br>
        Regisseur: <input type="text" name="regisseur"><br>
        Landherkomst: <input type="text" name="landherkomst"><br>
        Duur: <input type="text" name="duur"><br>
        <br>
        <input type="submit" name="btn_ins" value="Insert"><br>
        </form>
        <br><br>
        <a href='crud_films.php'>Home</a>
    </body>
</html>
