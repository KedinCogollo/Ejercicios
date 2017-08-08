<?php
$a="4";
$b="6";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Ingrese dos numeros entre 1 y 5</h2>
    <h2>Numero 1:<?php echo $a ?></h2>
    <h2>Numero 2:<?php echo $b ?></h2>
     <?php
       if (($a == 1 or $a == 2 or $a == 3 or $a == 5) && ($b == 1 or $b == 2 or $b == 3 or $b == 5)) {
         echo "Ambos numeros son primos";
       }
       elseif (($a == 1 or $a == 2 or $a == 3 or $a == 5) && ($b == 4)) {
         echo "El primer numero es primo y el segundo no";
       }
       elseif (($a == 4) && ($b == 1 or $b == 2 or $b == 3 or $b == 5)) {
         echo "El primer numero no es primo y en segundo si";
       }
       elseif($a>5 or $b>5) {
         echo "Numero fuera de rango";
       }
       else {
         echo "Ambos numeros no son primos";
       }
     ?>

  </body>
</html>
