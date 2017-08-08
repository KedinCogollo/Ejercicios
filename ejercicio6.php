<?php
$a="a";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Caracter Ingresado :  <?php echo $a ?></h2>
     <?php
       if ($a == "A" or $a == "D" or $a == "S" or $a == "I" ) {
         echo "Caracter correcto";
       }
       else {
         echo "Caracter incorrecto";
       }
     ?>

  </body>
</html>
