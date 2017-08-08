<?php
$a="8";
$b="6";
$c="4";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Numero 1: <?php echo $a ?></h2>
    <h2>Numero 2: <?php echo $b ?></h2>
    <h2>Numero 3: <?php echo $c ?></h2>

     <?php
       if ($a > $b && $b > $c) {
         echo "Los numeros estan en orden descendente"  ;
       }
       else {
        echo "Los numeros no estan en orden descendente";
       }
      ?>

  </body>
</html>
