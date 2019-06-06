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

$likeoverzicht = print('<div class="col-2"><a href="like_code.php?idsprekers=' . $tempId .'" class="btn" id="likeoverzicht"><i class="far fa-heart"></i></a></div>');
$likedetail = print('<a href="like_code.php?idsprekers=' . $tempId .'" class="" id="likedetail"><i class="far fa-heart"></i></a>&nbsp;');

if ($likeoverzicht == true){
    header("location:overzicht_spreker.php");
}else if($likedetail == true){
    header("location:detail_spreker.php?idsprekers=$id");
}



?>