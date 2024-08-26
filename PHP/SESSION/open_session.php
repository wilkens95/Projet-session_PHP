<!DOCTYPE html>
<?php session_start();
$_SESSION['nom'] = $_REQUEST['nom'];
$_SESSION['prenom'] = $_REQUEST['prenom'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ouvrir une session</h1>

    <form action="open_session.php" method="get">
        Nom :
        <input type="text" name="nom"> 
        Prénom :
        <input type="text" name="prenom">
        <input type="submit">
    </form>

    <h2>Mes Variables de Sessions</h2>
    <?php 
        echo "ID SESSION : " . session_id();
        echo "</br> NOM SESSION : " . session_name();
        echo "</br> Nom : " . $_SESSION['nom'];
        echo "</br> Prénom : " . $_SESSION['prenom'];

    ?>
    </br><a href="session.php">Retour au menu</a>
</body>
</html>