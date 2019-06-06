<?php
date_default_timezone_set("Europe/Brussels");
error_reporting(E_ALL);
ini_set('display_errors', 'On');

include('../script/database.php');
if (isset($_POST["submit"]) == 'true') {
    // bekijk wat er in de superglobal $_post zit
    //echo "<pre>".print_r($_POST,true)."</pre>";

    // maak een statement en bind de variabelen
    $stmt = $mysqli->prepare("INSERT INTO `tickets`( `voornaam`, `naam`, `email`, `telefoon`, `ticketAantal`) VALUES (?,?,?,?,?)");

    if($mysqli->error){
        echo"<p>prepared statement failed: ".$mysqli->error."</p>";
        die;
    }

    // statement variabelen verbinden
    $stmt->bind_param("sssii",$firstname,$name,$email,$phone,$ticketnumber);

    // geef de variabelen een waarde
    $firstname=$_POST['voornaam'];
    $name=$_POST['naam'];
    $email=$_POST['email'];
    $phone=$_POST['telefoon'];
    $ticketnumber=$_POST['ticketAantal'];

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
            header("location: ../../tickets.php");
        }else{
            echo "Did not insert any data.";
        }
    }

    // statement sluiten
    $stmt->close();
}
?>
