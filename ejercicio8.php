<?php
$a="u";
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
       if ($a == "A" or $a == "E" or $a == "I" or $a == "O" or $a == "U" or $a == "a" or $a == "e" or $a == "i" or $a == "o" or $a == "u" ) {
         echo "Es Una Vocal";
       }
       else {
         echo "No es una vocal";
       }
     ?>

  </body>
</html>
