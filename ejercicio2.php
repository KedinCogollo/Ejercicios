<?php
$a="5";
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
       if ($a%2 == 0) {
         echo "El numero es par";
       }
       else {
         echo "El numero es impar";
       }
     ?>

  </body>
</html>
