<body class="admin_panel">
<?php

?>

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
        
    <div class="close2"><a href="check.php">Terug</a></div>

    <div class="product-text">
        <h2>Producten Toevoegen</h2>
    </div>

<div class="producten-tabel">
    <form action="producten.php">
    <label for="fname">Titel:</label><br>
    <input type="text" id="fname" name="fname" value=""><br>
    <label for="lname">Afbeelding:</label><br>
    <input type="text" id="lname" name="lname" value=""><br><br>
    <label for="lname">Prijs:</label><br>
    <input type="text" id="lname" name="lname" value=""><br><br>
    <label for="lname">Voorraad:</label><br>
    <input type="text" id="lname" name="lname" value=""><br><br>
    <input type="submit" value="Submit">
    </form> 

        <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
</div>        
</body>
</html>