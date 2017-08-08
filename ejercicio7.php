<?php
$a="10";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Numero : <?php echo $a ?></h2>
     <?php
       if ($a >= 10 && $a <= 100 ) {
         echo "El numero esta entre 10 y 100";
       }
       else {
         echo "El numero no esta entre 10 y 100";
       }
     ?>

  </body>
</html>
