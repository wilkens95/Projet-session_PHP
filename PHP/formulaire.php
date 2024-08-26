<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
   <!-- FORMULAIRES  -->

   <!-- Créer un formulaire comportant 
    : 2 champs de texte ; nom et prénom
    : une option sexe (M ou F)
    : un choix multiple pour le type de repas choisi : viande, poisson, végétarien 
    Les données seront envoyées via la méthode GET -->

<form action="http://localhost/PHP/formulaire.php" method="get">
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
        <input type="submit" value="Soumettre mon invitation">
        
    </form>

    <h1>Mes informations saisies</h1>

    <ul>
        <li>Nom : <?php print $_REQUEST['name'] ?> </li>
        <li>Prénom : <?php print $_REQUEST['firstname'] ?></li>
        <li>Sexe : <?php print $_REQUEST['sexe'] ?></li>
    </ul>
    <ul>
    Nourriture choisie : 
            <?php 
            if (isset($_REQUEST['food'])){
                foreach($_REQUEST['food'] as $foods)
                print "<li>$foods</li>";
            }
            ?>
        </li>
    </ul>
</ul>

    
</body>
</html>