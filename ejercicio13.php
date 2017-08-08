<?php
$a="4";
$b="6";
$c="8";
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
       if ($a < $b && $b < $c) {
         echo "Los nomeros estan en orden ascendente"  ;
       }
       else {
        echo "Los numeros no estan en orden ascendente";
       }

      ?>

  </body>
</html>
