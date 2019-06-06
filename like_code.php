<?php 

require_once('website/script/database.php');

if(isset($_GET['idsprekers'])){
    //Ophalen waarde idsprekers
    $id = $_GET['idsprekers'];
 
    $a = "1";
    $liked = $row['likecounter'];
    $liked = $liked + $a;

    //Voorbereiden query
    $sql = "UPDATE sprekers SET likecounter=$liked WHERE idsprekers=?";

    //$stmt = statement
    $stmt = $mysqli->prepare($sql);

    //Parameter koppelen
    $stmt->bind_param("i", $id);

    //Query uitvoeren
    $stmt->execute();

    
}

header("location:detail_spreker.php");

?>