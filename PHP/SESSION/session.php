<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- SESSIONS PHP -->
    <h1>Test de variable de session</h1>
    <a href="open_session.php">Ouvrir une session</a></br>
    <a href="display_session.php">Afficher les variables de session</a></br>
    <a href="destroy_session.php">Détruire les variables de sessions</a>

    <!-- Créer un script pour :
    - créer une nouvelle session si aucune session n'existe 
        (SID est créé et transmis dans un cookie)
    - restaurer la session en cours (connue par son id de session SID) 
    Il faut donc appeler en début de script la fonction PHP session_start()
    On affiche ensuite un formulaire pour saisir le nom et prénom de l'utilisateur.
    On conserve ces infos dans des variables de session lorsque le formulaire est envoyé.-->

    <!-- On créé le script open_session.php  qui enregistre les données du formulaire
        en variable de session
        Ce script renvoie une page HTML affichant les variables de session-->

    <!-- On créé le script display_session.php qui affiche les variables de sessions.
        On ajoutera un compteur en variable de session pour afficher le nombre de fois que la page a été vue. -->

    <!-- On créé le script destroy_session.php qui détruit les variables de session.
        On utilisera ici la fonction PHP session_destroy()-->

</body>
</html>