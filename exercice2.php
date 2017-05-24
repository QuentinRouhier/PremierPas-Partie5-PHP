<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice1.php">Exercice 1</a></li>
            <li><a href="exercice3.php">Exercice 3</a></li>
        </ul>
        <p>
            <?php
            // creation d'un tableau
            $mois = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
            // affiche la 3 ieme valeur
            echo $mois[2];
            ?>
        </p>
    </body>
</html>