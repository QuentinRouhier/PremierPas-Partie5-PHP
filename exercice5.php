<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 5</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice4.php">Exercice 4</a></li>
            <li><a href="exercice6.php">Exercice 6</a></li>
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
            // verification du tableau
            var_dump($department);
            ?>
        </p>
    </body>
</html>
