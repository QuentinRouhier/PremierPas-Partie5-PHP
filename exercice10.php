<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 10</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice9.php">Exercice 9</a></li>
            <li><a href="index.php">index</a></li>
        </ul>
        <p>
            <?php
            // creation d'un tableau associatif
            $departments = array(
                // avec le numeros et les departements
                '02' => 'Aisne',
                '59' => 'Nord',
                '60' => 'Oise',
                '62' => 'Pas-de-Calais',
                '80' => 'Somme');
            /* on attribu pour chaque element dans la variable departement une
             variable number pour les numeros et une variable department pour les departements */
            foreach ($departments as $number => $department){
                echo 'le département ' . $department . ' a le numéros ' . $number . '<br/>';
            }
            ?>
        </p>
    </body>
</html>
