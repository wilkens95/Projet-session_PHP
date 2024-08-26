<!DOCTYPE html>
<?php 
    session_start();
    $sid = session_id();
    session_destroy();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Détruire une session</h1>

    <?php
        echo "Variables de la session $sid détruites !";
    ?>
    </br><a href="session.php">Retour au menu</a>
</body>
</html>