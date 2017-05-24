<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 6</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice5.php">Exercice 5</a></li>
            <li><a href="exercice7.php">Exercice 7</a></li>
        </ul>
        <p>
            <?php
            // creation d'un tableau associatif
            $department = array(
                // avec le numeros et les departements
                '02' => 'Aisne',
                '59' => 'Nord',
                '60' => 'Oise',
                '62' => 'Pas-de-Calais',
                '80' => 'Somme');
            // affiche le contenu de valeur 59
            echo $department['59'];
            ?>
        </p>
    </body>
</html>
