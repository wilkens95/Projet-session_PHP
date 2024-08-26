<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- FONCTIONS ET CLASSES -->

    <!-- Définir une classe Personne possédant les propriétés nom, prénom,
    et une méthode presenter qui renvoie "Je m'appelle" suivi du nom et prénom. -->
    <?php
        class Personne {
            //Propriétés
            var $nom ;
            var $prenom ;
            var $date_naissance ;

            //Constructeur 
            function __construct($nom, $prenom, $date_naissance){
                $this->nom = $nom ;
                $this->prenom = $prenom ;
                $this->date_naissance = $date_naissance ;
            }

            //Méthode 
            function presenter(){
                return "Je m'appelle $this->nom $this->prenom. Et j'ai " . $this->age() . " ans." ;
            }

            function age(){
                $date_chiffre = explode("/", $this->date_naissance);
                $temps_ecoule = mktime(0,0,0, $date_chiffre[1], $date_chiffre[0], $date_chiffre[2] );
                return (int)((time() - $temps_ecoule )/ (365*24*3600));
            }

        }
    ?>

    <!-- Créer un programme de test qui instancie 2 personnes, puis affiche leur description -->

    <?php
    $personne1 = new Personne("Messmer", "Lucie", "13/12/1997");
    $personne2 = new Personne("Villalobos", "Aramis", "23/10/1995" );

    echo $personne1->presenter() . "</br>" ;
    echo $personne2->presenter();

    

    ?>
    <!-- Dans la classe Personne, ajouter une date de naissance ainsi qu'une méthode age() pour renvoyer 
    l'âge de la personne. -->

    <!-- Tester la classe Personne avec ses infos personnelles. -->


</body>
</html>