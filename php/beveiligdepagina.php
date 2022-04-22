
<?php
session_start();
if ($_SESSION['name'])
    {
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
<html>
<head>
<title>User Login</title>
</head>
<body>

<body>
        
    
    <div class="terug">
        <a href="../HTML/index.html">terug</a>
    </div>
    
    
    
  
    <div class="add-product">
        <a href="addproduct.php">Voeg product toe</a>
    </div>


    <div class="bedrijfsnaam">
        <p>ShoarEnJeMa</p>
    </div>
    <img class="inlog-logo" src="../media/logo-shoarma-mexico.gif" alt="">
</div>
    <form class="in-systeem" >
    <?php echo "Je bent ingelogd als " . $_SESSION['name'] . "."; ?>
    <footer>
        
    <div class="uitlog1">
    <a href="uitloggen.php">Uitloggen</a></footer>   
    </div> 
    </form>
    
    
        
        
    </body>
</html>
<?php
    }
?>