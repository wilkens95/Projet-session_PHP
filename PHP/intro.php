<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <!-- SCRIPT DU COTE SERVEUR-->

    <!--Afficher la chaîne de caractère "Bienvenue dans ce cours PHP. Nous sommes le"
    suivi de la date du jour. -->
    
    Bienvenue dans ce cours PHP. Nous sommes le <?php  echo Date("j/m/Y") ;?>. </br>

    <!-- Ensuite, afficher le message "Bonjour", ou "Bon après-midi"
    en fonction de l'heure sur le serveur.
    Bonjour avant midi, Bon après-midi après midi -->
    <?php
    date_default_timezone_set('Europe/Paris');

    echo "Il est " . Date("H:i:s") . "</br> ";
    if (Date("H")<12){
        echo "Bonjour" . "<br>";
    } else {
        echo "Bon après-midi" . "<br>";
    }
    ?>
    <!--  -->
    <?php
    $heure = date('H:i:s');

    if($heure < 12) {
        echo "Bonjour" . "<br>";
    }else {
        echo "Bon après-midi" . "<br>";
    };

    ?>


    <!-- Dans un tableau, afficher la signification et la valeur des variables d'environnements 
    suivantes :
    $_SERVER
    $SERVER_ADDR
    $HTTP_HOST
    $REMOTE_ADDR
    gethostbyAddr($REMOTE_ADDR)
    $HTTP_USER_AGENT  -->
    <table border="1" style="width:100%">
        <tr>
            <td align="center">Variable</td>
            <td align="center">Valeur</td>
        </tr>
        <tr> 
            <td>$SERVER_ADDR </br>Adresse Ip du serveur</td>
            <td><?php echo $_SERVER['SERVER_ADDR']; ?></td>
        </tr>
        <tr> 
            <td>$HTTP_HOST </br>Nom du serveur</td>
            <td><?php echo $_SERVER['HTTP_HOST']; ?></td>
        </tr>
        <tr> 
            <td>$REMOTE_ADDR </br> Adresse Ip du client</td>
            <td><?php echo $_SERVER['REMOTE_ADDR']; ?></td>
        </tr>
        <tr> 
            <td>gethostbyAddr($REMOTE_ADDR) </br>Nom de la machine cliente</td>
            <td><?php echo gethostbyAddr($_SERVER['REMOTE_ADDR']) ;?></td>
        </tr>
        <tr> 
            <td>$HTTP_USER_AGENT </br> Navigateur du client</td>
            <td><?php echo $_SERVER['HTTP_USER_AGENT']; ?></td>
        </tr>
    </table>


    <!-- Dans un autre fichier .php, créer une page regroupant toutes la doc PHP 
    grâce à la fonction : phpInfo(); -->
  
</body>
</html>