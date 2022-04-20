<?php
session_start();
if($_SESSION["name"]) {
require_once ("connect.php");
if(isset( $_POST['Update'])) {
    $sql = "UPDATE gerechten SET titel = :titel, categorie = :categorie, image_link = :image_link, prijs = :prijs, voorraad = :voorraad
     WHERE ID = :ID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":ID", $_POST['ID']);
    $stmt->bindParam(":titel", $_POST['titel']);
    $stmt->bindParam(":categorie", $_POST['categorie']);
    $stmt->bindParam(":image_link", $_POST['image_link']);
    $stmt->bindParam(":prijs", $_POST['prijs']);
    $stmt->bindParam(":voorraad", $_POST['voorraad']);
    $stmt->execute();

    header('Location: addproduct.php');
    exit();
}
else if(isset($_POST['Delete'])) {
    $sql = "DELETE FROM gerechten 
     WHERE ID = :ID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":ID", $_POST['ID']);
    $stmt->execute();

    header('Location: addproduct.php');
    exit();
} else {
    header('Location: inlog.php');
    exit();
}
}else header('Location: inlog.php');
?>