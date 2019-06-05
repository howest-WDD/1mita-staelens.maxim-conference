<?php
date_default_timezone_set('Europe/Brussels');
error_reporting(E_ALL);
ini_set('display_errors', 'On');

include('../script/database.php');

if(isset($_POST["submit"])==true){
    $stmt = $mysqli->prepare("UPDATE sessies SET titel=?, omschrijving=?, zaalID=?, sprekerID=? WHERE idsessie=?");
 
    if($mysqli->error!==""){
        print("<p>Error: ".$mysqli->error."</p>");
    }
    $stmt->bind_param("ssiii", $title, $description, $zaal, $spreker, $sessie);

    $title=$_POST['titel'];  
    $description=$_POST['omschrijving'];
    $zaal=$_POST['zaalID'];
    $spreker=$_POST['sprekerID'];

    $sessie=$_POST['idsessie'];

    $stmt->execute();
    //controleer op errors bij het uitvoeren van het statement

    if(count($stmt->error_list)){
        print("<pre>");
        print_r($stmt->error_list);
        print("</pre>");
    }
    $stmt->close();
    //print("gelukt");
    header("location: ../../overzicht_zalen.php");
}else{
    print("error: u kwam niet via het formulier");
}

?>

