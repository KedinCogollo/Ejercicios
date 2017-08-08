<?php
$a="14";
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
       if ($a > 10) {
         echo "El numero es mayor que 10";
       }
       else {
         echo "El numeor es menor que 10";
       }
     ?>

  </body>
</html>
