<!DOCTYPE html>
    <?php
    session_start();
    //Nombre de fois que la page a été vue.
    if (!isset($_SESSION['compteur'])){
        $_SESSION['compteur'] = 1;
    } else {
        $_SESSION['compteur']++;
    }
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mes données de sessions :</h1>
    <?php
        echo "</br> Cette page a été vue " . $_SESSION['compteur'] . " fois.";
        echo "</br> ID SESSION : " . session_id();
        echo "</br> NOM SESSION : " . session_name();
        echo "</br> Nom : " . $_SESSION['nom'];
        echo "</br> Prénom : " . $_SESSION['prenom'];
    ?>
    </br><a href="session.php">Retour au menu</a>
</body>
</html>