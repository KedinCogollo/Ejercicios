<?php
$i="8";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>El numero ingresado es : <?php echo $i ?></h2>
    <?php
     switch ($i) {
       case '1':
         echo "El numero ingresado corresponde el día Lunes";
         break;
         case '2':
           echo "El numero ingresado corresponde el día Martes";
           break;
           case '3':
             echo "El numero ingresado corresponde el día Miercoles";
             break;
             case '4':
               echo "El numero ingresado corresponde el día Jueves";
               break;
               case '5':
                 echo "El numero ingresado corresponde el día Viernes";
                 break;
                 case '6':
                   echo "El numero ingresado corresponde el día Sabado";
                   break;
                   case '7':
                     echo "El numero ingresado corresponde el día Domingo";
                     break;
       default:
         echo "Numero fuera de rango";
         break;
     }
    ?>
  </body>
</html>
