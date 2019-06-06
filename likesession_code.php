<?php 

require_once('website/script/database.php');

if(isset($_GET['idsessie'])){
    //Ophalen waarde idsprekers
    $id = $_GET['idsessie'];

    //Voorbereiden query
    $sql = "UPDATE sessies SET likecounter=likecounter+1 WHERE idsessie=?";

    //$stmt = statement
    $stmt = $mysqli->prepare($sql);

    //Parameter koppelen
    $stmt->bind_param("i", $id);

    //Query uitvoeren
    $stmt->execute();

    
}

header("location:detail_sessie.php?idsessie=$id");

?>