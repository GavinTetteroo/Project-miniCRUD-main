<?php

require_once ("connect.php");
if(isset( $_POST['Submit'])) {

    
    $sql = 
    "INSERT INTO gerechten (titel,categorie, image_link, prijs, voorraad )
    VALUES (:titel, :categorie, :image_link, :prijs, :voorraad)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":titel", $_POST["titel"]);
    $stmt->bindParam(":categorie", $_POST["categorie"]);
    $stmt->bindParam(":image_link", $_POST["image_link"]);
    $stmt->bindParam(":prijs", $_POST["prijs"]);
    $stmt->bindParam(":voorraad", $_POST["voorraad"]);
    $result = $stmt->execute();


    header('Location: addproduct.php');
    exit();

} else {
    header('Location: addproduct.php');
    exit();
}

?>