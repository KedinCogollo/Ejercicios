<?php
$a="8";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Ingrese un numero entre 1 y 5</h2>
    <h2>Numero :<?php echo $a ?></h2>
     <?php
       if ($a == 1 or $a == 2 or $a == 3 or $a == 5) {
         echo "El numero es primo";
       }
       elseif ($a>5) {
         echo "El numero no es valido";
       }
       else {
         echo "El numero no es primo";
       }
     ?>

  </body>
</html>
