<body class="admin_panel">
<?php 

include_once("uitlog.php");


?>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div class="uitloggen">
<?php
//zet de variabele zo dat het script het herkent als niet-ingelogd
$_SESSION['login'] = "0";

echo "Je bent nu uitgelogd<br /><br />";

?>
    <div class="close">
        <a href="inlog.php">close</a>
    </div>
</div>


    </body>
</html>