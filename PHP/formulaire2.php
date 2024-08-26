<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <!-- FORMULAIRE ++

    On va créer un script nous permettant de créer et traiter le formulaire créé précédemment.
    Si le script est appelé sans paramètre, le formulaire sera créé.
    S'il est appelé par l'envoi de données (btn submit), il traitera les données.
    On utilisera ici un champ caché qui permet de tester si le script est appelé par l'envoi de données ou non.
    Champ nécessaire dans le cas où le script est appelé par envoi du formulaire avec les champs laissés vide. -->

    <?php

    if (array_key_exists('action', $_REQUEST) && $_REQUEST['action'] == 'envoyee') {         
        print "<h1>Mes informations saisies</h1>";
        print "<ul>";
        print "<li>Nom :" . $_REQUEST['name'] . "</li>";
        print "<li>Prénom :" . $_REQUEST['firstname'] . "</li>";
        print "<li>Sexe :" . $_REQUEST['sexe'] . "</li>";
        print "</ul>";
        print "<ul> Nourriture choisie :";
            if (isset($_REQUEST['food'])){
                foreach($_REQUEST['food'] as $foods){
                print "<li>$foods</li>";
                }
            }
        print "</ul>";
    } else { 
        ?>  
        <form action="http://localhost/PHP/formulaire2.php" method="get">
            <div>
                <label for="name">Nom</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" >
            </div>
            <label for="sexe">Sexe</label>
            <select name="sexe">
                <option value="M">M</option>
                <option value="F">F</option>
            </select></br>
            <label for="food">Nourriture</label>
            <select multiple name="food[]">
                <option value="Viande">viande</option>
                <option value="Poisson">poisson</option>
                <option value="Végétarien">végétarien</option>
            </select> </br>
            <!-- <label for="presence">Sera présent au mariage</label>
            <input type="checkbox"> -->
            <input type="hidden" name="action" value="envoyee">
            <input type="submit" value="Soumettre mon invitation">
            
        </form>
        <?php
        }

        ?>
    
</body>
</html>