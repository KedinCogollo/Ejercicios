<?php
$a="4";
$b="6";
$c="1";
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
         echo " El orden es: $a $b $c"  ;
       }
       elseif ($b > $c && $c > $a) {
         echo " El orden es: $b $c $a"  ;
       }
       elseif ($c > $a && $a > $b) {
         echo " El orden es: $c $a $b"  ;
       }
       elseif ($c > $b && $b > $a) {
         echo " El orden es: $c $b $a"  ;
       }
       elseif ($a > $c && $c > $b) {
         echo " El orden es: $a $c $b"  ;
       }
       elseif ($b > $a && $a > $c) {
         echo " El orden es: $b $a $c"  ;
       }
     ?>

  </body>
</html>
