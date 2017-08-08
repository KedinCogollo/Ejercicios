<?php
$i="3";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Opciones: <br> 1:Añadir <br> 2:Editar <br> 3:Eliminar</h2>
    <h2>El numero ingresado es : <?php echo $i ?></h2>
    <?php
     switch ($i) {
       case '1':
         echo "Usted a elegido AÑADIR";
         break;
         case '2':
           echo "Usted a elegido EDITAR";
           break;
           case '3':
             echo "Usted a elegido ELIMINAR";
             break;
       default:
         echo "Opcion incorrecta";
         break;
     }
    ?>
  </body>
</html>
