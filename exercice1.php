<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 1</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice2.php">Exercice 2</a></li>
        </ul>
        <p>
            <?php
            // creation d'un tableau
            $mois = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
            // voir si le tableau fonctionne
            var_dump($mois);
            ?>
        </p>
    </body>
</html>