<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- FORM

    Créer un formulaire avec une zone de texte, puis un script qui renvoie le texte saisi 
    en remplaçant les caractères "retour à la ligne" par des balises <br>. -->

    <form action="http://localhost/PHP/formulaire3.php" method="get">
        <textarea name="espaceTest" cols="50" rows="10" placeholder="Ecrire votre commentaire ici"></textarea>
        </br>
        <input type="submit">
    </form>

    <h2>Données saisies</h2>
    <?php
        print nl2br($_REQUEST['espaceTest']);
    ?>
</body>
</html>