<?php
$a="8";
$b="6";
$c="14";
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
       if ($a*$b == $c) {
         echo "El producto de los dos primeros numeros es igual el tercero"  ;
       }
       else {
        echo "El producto de los dos primeros numeros NO es igual el tercero";
       }
      ?>

  </body>
</html>
