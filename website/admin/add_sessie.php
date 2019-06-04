<?php
date_default_timezone_set("Europe/Brussels");
error_reporting(E_ALL);
ini_set('display_errors', 'On');

include('../script/database.php');
if (isset($_POST["submit"]) == 'true') {
    // bekijk wat er in de superglobal $_post zit
    //echo "<pre>".print_r($_POST,true)."</pre>";

    // maak een statement en bind de variabelen
    $stmt = $mysqli->prepare("INSERT INTO `sessies`( `titel`, `start`, `omschrijving`, `zaalID`, `sprekerID`) VALUES (?,?,?,?,?)");

    if($mysqli->error){
        echo"<p>prepared statement failed: ".$mysqli->error."</p>";
        die;
    }

    // statement variabelen verbinden
    $stmt->bind_param("sisis",$title,$start,$description,$zaal,$spreker);

    // geef de variabelen een waarde
    $title=$_POST['titel'];
    $start=$_POST['start'];
    $description=$_POST['omschrijving'];
    $zaal=$_POST['zaalID'];
    $spreker=$_POST['sprekerID'];


    // voer het statement uit
    $stmt->execute();
    // aantal toegevoede rijen bewaren voor foutafhandeling
    $affected_rows = $stmt->affected_rows;


    // uitgebreide foutafhandeling
    if(count($stmt->error_list)){
        print("<pre>");
        print_r($stmt->error_list);
        print("</pre>");
    }else{
        if($affected_rows>0){
            header("location: ../../overzicht_zalen.php");
        }else{
            echo "Did not insert any data.";
        }
    }

    // statement sluiten
    $stmt->close();
}
?>