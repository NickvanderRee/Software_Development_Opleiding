<?php
// functie: Algemene functies voor 'crud.php'.
// auteur: Nick van der Ree.

// Connect Database.
 function ConnectDb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bieren";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        //echo "Connected successfully";
        return $conn;
    } 
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

// Get data from requested table.
function GetData($table){
    $conn = ConnectDb();
    $query = $conn->prepare("SELECT * FROM $table");
    $query->execute();
    $result = $query->fetchAll();   
    return $result;
}

// Select specific data from the table.
function GetBier($biercode){
    $conn = ConnectDb();
    $query = $conn->prepare("SELECT * FROM bier WHERE biercode = $biercode");
    $query->execute();
    $result = $query->fetch();
    return $result;
}

// Prints result.
function OvzBieren(){
    $result = GetData("bier");
    PrintTable($result);
}

// Prints result.
function OvzBrouwers(){
   $result = GetData("brouwer");
   PrintTable($result);  
}

// Prints result in a table.
function PrintTableTest($result){
   $table = "<table border = 1px>";
   foreach ($result as $row) {
       echo "<br> rij:";

       foreach ($row as  $value) {
           echo "kolom" . "$value";
       }          
   }
}

// Function 'GetBrouwercode' zorgt voor de data die nodig is voor de dropdown.
function BrouwerOpties(){
    $result = GetData("bier");

    foreach($result as &$data){
        echo'<option value="'.$data['brouwcode'].'">'.$data['naam'].'</option>';            
    }
}

// Function 'PrintTable' print een HTML-table met data uit $result.
function PrintTable($result){
    $table = "<table border = 1px>";
    $headers = array_keys($result[0]);
    $table .= "<tr>";
    foreach($headers as $header){
        $table .= "<th bgcolor=gray>" . $header . "</th>";   
    }

    foreach ($result as $row) {  
        $table .= "<tr>";
        
        foreach ($row as $cell) {
            $table .= "<td>" . $cell . "</td>";
        }
        $table .= "</tr>";
    }
    $table.= "</table>";
    echo $table;
}

// Function 'CrudBieren' shows the table of bieren.
function CrudBieren(){
    $result = GetData("bier");
    PrintCrudBier($result);
}

function PrintCrudBier($result){
    $table = "<table border = 1px>";
    $headers = array_keys($result[0]);
    $table .= "<tr>";
    foreach($headers as $header){
        $table .= "<th bgcolor=gray>" . $header . "</th>";   
    }

    foreach ($result as $row) {
        
        $table .= "<tr>";
        foreach ($row as $cell) {
            $table .= "<td>" . $cell . "</td>";
        }
        
        $table .= "<td>". 
            "<form method='post' action='update_bier.php?biercode=$row[biercode]' >       
                    <button name='btn_edit'>Edit</button>	 
            </form>" . "</td>";

        $table .= "<td>". 
        "<form method='post' action='delete_bier.php?biercode=$row[biercode]' >       
                <button name='btn_del'>Delete</button>	 
        </form>" . "</td>";
    }
    $table.= "</table>";

    echo $table;
}

// Function 'CreateBier' allows the user to create a new bier.
function CreateBier($row){
    echo '<h3> Insert row. </h3>';
    echo '<br>';
    try {
        $conn = ConnectDb();

        $biercode = $_POST['biercode'];
        $naam = $_POST['biernaam'];
        $soort = $_POST['soort'];
        $stijl = $_POST['stijl'];
        $alcohol = $_POST['alcohol'];
        $brouwcode = $_POST['brouwcode'];
        
        $sql = "INSERT INTO `bier` 
        (`biercode`, `naam`, `soort`, `stijl`, `alcohol`, `brouwcode`) 
        VALUES ('$biercode', '$naam', '$soort', '$stijl', '$alcohol', '$brouwcode')";

        $query = $conn->prepare($sql);
        $query->execute();
    } 
    catch(PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
}

// Function 'UpdateBier' allows the user to update an existing bier's data.
function UpdateBier($row){
    echo '<h3> Update row. </h3>';
    echo '<br>';
    try {
        $conn = ConnectDb();
        $sql = "UPDATE `bier` 
                SET 
                    `naam` = '$row[biernaam]', 
                    `soort` = '$row[soort]', 
                    `stijl` = '$row[stijl]', 
                    `alcohol` = '$row[alcohol]' 
                    `brouwcode` = '$row[naam]'
                WHERE `bier`.`biercode` = $row[biercode]";
        $query = $conn->prepare($sql);
        $query->execute();
    } 
    catch(PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
}

function DeleteBier($biercode){
    echo 'Deleted row. <br>';
    try {
        $conn = ConnectDb();
        $sql = "DELETE FROM bier WHERE `bier`.`biercode` = :biercode";
        $query = $conn->prepare($sql);
        $query->bindParam(':biercode', $biercode);
        $query->execute();
    } 
    catch(PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
}

?>