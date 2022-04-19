<?php

require_once ("connect.php");
if(isset( $_POST['Submit'])) {

    
    $sql = 
    'INSERT INTO gerechten (titel, image_link, prijs, categorie)
    VALUES (:titel, :image_link, :prijs, :categorie, :voorraad)';
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":titel", $_POST["titel"]);
    $stmt->bindParam(":image_link", $_POST["afbeelding"]);
    $stmt->bindParam(":prijs", $_POST["prijs"]);
    $stmt->bindParam(":categorie", $_POST["categorie"]);
    $stmt->bindParam(":voorraad", $_POST["voorrraad"]);
    $result = $stmt->execute();


    header('Location: addproduct.php');
    exit();

} else {
    header('Location: addproduct.php');
    exit();
}

?>