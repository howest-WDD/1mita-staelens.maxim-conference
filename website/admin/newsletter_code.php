<?php
date_default_timezone_set("Europe/Brussels");
error_reporting(E_ALL);
ini_set('display_errors', 'On');

include('../script/database.php');
if (isset($_POST["submit"]) == 'true') {
    // bekijk wat er in de superglobal $_post zit
    //echo "<pre>".print_r($_POST,true)."</pre>";

    // maak een statement en bind de variabelen
    $stmt = $mysqli->prepare("INSERT INTO `nieuwsbrief`(`email`) VALUES (?)");

    if($mysqli->error){
        echo"<p>prepared statement failed: ".$mysqli->error."</p>";
        die;
    }

    $newsemail=$_POST['email'];

    // statement variabelen verbinden
    $stmt->bind_param("s",$newsemail);

    // geef de variabelen een waarde
    

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
            header("location: ../../newsletter.php");
        }else{
            echo "Did not insert any data.";
        }
    }

    // statement sluiten
    $stmt->close();
}
?>
