
<div class="login">
<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','minicrud') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        } else {
         $message = "Gebruikersnaam of Wachtwoord is fout!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:beveiligdepagina.php");
    }
?>
</div>

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
        
    
    <div class="terug">
        <a href="../HTML/index.html">terug</a>
    </div>
    
    
    
  



    <div class="bedrijfsnaam">
        <p>ShoarEnJeMa</p>
    </div>
    <img class="inlog-logo" src="../media/logo-shoarma-mexico.gif" alt="">
</div>
<div class="login1">
    <form name="frmUser" method="post" action="" align="center">
    <div class="message"><?php if($message!="") { echo $message; } ?></div>
    <h3 align="center">Vul uw logingegevens in</h3>
    Gebruikersnaam:<br>
    <input type="text" name="user_name">
    <br>
    Wachtwoord:<br>
    <input type="password" name="password">
    <br><br>
    <input type="submit" name="submit" value="Login">
    </form>
</div>
</div>
        </body>
    </html>
    
    