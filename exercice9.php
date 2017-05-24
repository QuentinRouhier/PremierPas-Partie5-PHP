<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>exo 9</title>
  <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <ul id="menu_horizontal">
    <li><a href="exercice8.php">Exercice 8</a></li>
    <li><a href="exercice10.php">Exercice 10</a></li>
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
      // on attribu pour chaque element dans la variable departement une variable element
      foreach ($department as $element){
        // on l'affiche
        echo $element ;
        ?>
        <br/>
        <?php
      }
      ?>
    </p>
  </body>
  </html>
