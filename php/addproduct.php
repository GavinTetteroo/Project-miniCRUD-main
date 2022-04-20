<?php
session_start();
require_once("connect.php");
$sql = "SELECT * FROM gerechten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
if ($_SESSION['name'])
{
    ?>
<body class="admin_panel">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Project-miniCRUD.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        //includes connect.php

        include_once("connect.php");
        //CONNECT TO DATABASE, USE ABOVE IN THE PAGE, ADDiTEM, UPDATE, DELETE
        $sql = "SELECT * FROM gerechten";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $results =$stmt->fetchAll();
    ?>
    <div class="close2"><a href="beveiligdepagina.php">Terug</a></div>

    <div class="product-text">
        <h2>Producten Toevoegen</h2>
    </div>

<div class="producten-tabel">
    Add Product
    <form action="producten.php" method="post">
    <label for="titel">Titel:</label><br>
    <input type="text" id="titel" name="titel" value=""><br>
    <label for="image_link">Afbeelding:</label><br>
    <input type="text" id="image_link" name="image_link" value=""><br><br>
    <label for="prijs">Prijs:</label><br>
    <input type="text" id="prijs" name="prijs" value=""><br><br>
    <label for="categorie">Catergorie:</label><br>
    <input type="text" id="categorie" name="categorie" value=""><br><br>
    <label for="voorraad">Voorraad:</label><br>
    <input type="text" id="voorraad" name="voorraad" value=""><br><br>
    <input type="submit" name="Submit" value="Submit">
    </form>
    <br>
    <br>
    <br> 
    Update and Delete
    <?php  foreach($result as $gerechten){
        ?> 
        <br>
    <form action= "updateanddelete.php" method="post">
    <label for="titel">ID:</label><br>
    <input type="text" id="ID" readonly name="ID" value="<?php echo $gerechten['ID']; ?>"><br>
    <label for="titel">Titel:</label><br>
    <input type="text" id="titel" name="titel" value="<?php echo $gerechten['titel']; ?>"><br>
    <label for="image_link">Afbeelding:</label><br>
    <input type="text" id="image_link" name="image_link" value="<?php echo $gerechten['image_link']; ?>"><br>
    <label for="prijs">Prijs:</label><br>
    <input type="text" id="prijs" name="prijs" value="<?php echo $gerechten['prijs']; ?>"><br>
    <label for="categorie">Catergorie:</label><br>
    <input type="text" id="categorie" name="categorie" value="<?php echo $gerechten['categorie']; ?>"><br>
    <label for="voorraad">Voorraad:</label><br>
    <input type="text" id="voorraad" name="voorraad" value="<?php echo $gerechten['voorraad']; ?>"><br>
    <input type="submit" name="Update" value="Update"><input type="submit" name="Delete" value="Delete">
    </form>
    <br>
    <?php }?> 
</div>        


</body>
</html>
<?php
    }
?>
