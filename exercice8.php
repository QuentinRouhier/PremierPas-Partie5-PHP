<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 8</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice7.php">Exercice 7</a></li>
            <li><a href="exercice9.php">Exercice 9</a></li>
        </ul>
        <p>
            <?php
            // creation d'un tableau
            $mois = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
           // creation d'un boucle for
            foreach($mois as $moi) {
                // affiche tout ce qu'il y a dans le tableau
                echo $moi . '<br/>';
            }
            ?>
        </p>

    </body>
</html>
