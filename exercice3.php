<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 3</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice2.php">Exercice 2</a></li>
            <li><a href="exercice4.php">Exercice 4</a></li>
        </ul>
        <p>
            <?php
            // creation d'un tableau
            $mois = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
            // affiche l'index 5
            echo $mois[5];
            ?>
        </p>
    </body>
</html>