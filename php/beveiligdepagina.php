
<?php
if ($_SESSION['login'] != "1")
    {
        header('Location: login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPage</title>
</head>
<body>
    <form class="in-systeem" >
    <?php echo "Je bent ingelogd als " . $_SESSION['login-naam'] . "."; ?>
    <footer><a href="uitloggen.php">Uitloggen</a></footer>    
    </form>
    
    <div class="add-product">
        <a href="addproduct.php">Voeg product toe</a>
    </div>
        
        
    </body>
</html>