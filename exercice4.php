<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 4</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice3.php">Exercice 3</a></li>
            <li><a href="exercice5.php">Exercice 5</a></li>
        </ul>
        <p>
            <?php
            // cretion d'un tableau
            $mois = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
            // modifie la 8 ieme valeur
            $mois[7]='août';
            // veriefie si la modif a etais pris en compte
            var_dump($mois);
            ?>
        </p>
    </body>
</html>
