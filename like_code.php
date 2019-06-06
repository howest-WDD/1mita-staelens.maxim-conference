<?php 

require_once('website/script/database.php');

if(isset($_GET['idsprekers'])){
    //Ophalen waarde idsprekers
    $id = $_GET['idsprekers'];

    //Voorbereiden query
    $sql = "UPDATE sprekers SET likecounter=likecounter+1 WHERE idsprekers=?";

    //$stmt = statement
    $stmt = $mysqli->prepare($sql);

    //Parameter koppelen
    $stmt->bind_param("i", $id);

    //Query uitvoeren
    $stmt->execute();

    
}

header("location:overzicht_spreker.php");

?>