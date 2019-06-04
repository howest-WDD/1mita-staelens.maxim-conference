<?php

date_default_timezone_set('Europe/Brussels');
error_reporting(E_ALL);
ini_set('display_errors', 'On');

include('../script/database.php');


if(isset($_GET["idsessie"])==true){
    $stmt = $mysqli->prepare("DELETE FROM sessies WHERE idsessie = ?");
    if($mysqli->error!==""){
        print("<p>Error: ".$mysqli->error."</p>");
    }
    $stmt->bind_param("i", $sessie);

    $sessie = $_GET['idsessie'];

    $stmt->execute();
    //Check op errors bij het uitvoeren van het statement
    if(count($stmt->error_list)){
        print("<pre>");
        print_r($stmt->error_list);
        print("</pre>");
    }
    $stmt->close();
    //Als gelukt, ga terug naar overzicht zalen
    header("location: ../../overzicht_zalen.php");
}else{
    print("error: U gaf geen querystring op.");
}

?>
