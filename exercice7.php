<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo 7</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <ul id="menu_horizontal">
            <li><a href="exercice6.php">Exercice 6</a></li>
            <li><a href="exercice8.php">Exercice 8</a></li>
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
            // ajoue du numeros 51 qui comporte Reims
            $department['51'] = 'Marne';
            // verification
            var_dump($department);
            ?>
        </p>
    </body>
</html>
