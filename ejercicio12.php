<?php
$a="5";
$b="5";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Numero 1:<?php echo $a ?></h2>
    <h2>Numero 2:<?php echo $b ?></h2>
     <?php
       if ($a%2 == 0 && $b%2 == 0) {
         echo "Ambos numeros son pares";
       }
       elseif ($a%2 != 0 && $b%2 == 0) {
         echo "El primero es impar y el segundo es par";
       }
       elseif ($a%2 == 0 && $b%2 != 0) {
         echo "El primero es par y el segundo es impar";
       }
       else {
         echo "Ambos numeros son impares";
       }
     ?>

  </body>
</html>
