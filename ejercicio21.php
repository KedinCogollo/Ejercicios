<?php
$vb="260000";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>El precio</h2>
    <?php
      if ($vb > 250000) {
        $vn=$vb-($vb*0.10);
        echo "El valor neto es: $vn";
      }
      else {
        $vn=$vb-($vb*0.5);
        echo "El valor neto es: $vn";
      }


    ?>
  </body>
</html>
