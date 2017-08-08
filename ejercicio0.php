<?php
$a="-4";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Numero <?php echo $a ?></h2>
     <?php
       if ($a > 0) {
         echo "El numero es positivo";
       }
       else {
         echo "El numeor es negativo";
       }
     ?>

  </body>
</html>
