<?php  

require_once('website/script/database.php');

$sqlLikeSession = "SELECT idsessie, likecounter FROM sessies";

if(isset($_GET["idsessie"], $_GET["likecounter"]))  
 {  
      $sessie = $_GET["idsessie"];  
      $likes = (int)$_GET["likecounter"];  
      if($sessie == "sessies")  
      {  
        $sqlInsertLikes = "INSERT INTO likecounter (idsessie) SELECT likecounter FROM sessies WHERE idsessie = {$_GET['idsessie']} LIMIT 1";
         
        header("location:detail_sessie.php");
      }  
 }  



?>  