<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Project-miniCRUD.css" />
</head>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<body class="admin_panel">
<?php 

include_once("header.php");


?>


    
        <form class="inlogscherm" method="post" action="check.php">
            <label for=""> Gebruikersnaam</label>

             <input type="text" name="username" placeholder="username..."><br />
            
             <label for="">Wachtwoord</label>

            <input type="password" name="wachtwoord" placeholder="password..."><br /><br />
            
            <input class = "inlog-knop" type="submit" value="Log in" />
        </form><br /><br />
    </body>
</body>
</html>

