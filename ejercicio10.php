<?php
$i="18";
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
         echo "El numero ingresado corresponde el mes de Enero";
         break;
         case '2':
           echo "El numero ingresado corresponde el mes de Febrero";
           break;
           case '3':
             echo "El numero ingresado corresponde el mes de Marzo";
             break;
             case '4':
               echo "El numero ingresado corresponde el mes de Abril";
               break;
               case '5':
                 echo "El numero ingresado corresponde el mes de Mayo";
                 break;
                 case '6':
                   echo "El numero ingresado corresponde el mes de Junio";
                   break;
                   case '7':
                     echo "El numero ingresado corresponde el mes de Julio";
                     break;
                     case '8':
                       echo "El numero ingresado corresponde el mes de Agosto";
                       break;
                       case '9':
                         echo "El numero ingresado corresponde el mes de Septiembre";
                         break;
                         case '10':
                           echo "El numero ingresado corresponde el mes de Octubre";
                           break;
                           case '11':
                             echo "El numero ingresado corresponde el mes de Noviembre";
                             break;
                             case '12':
                               echo "El numero ingresado corresponde el mes de Diciembre";
                               break;
       default:
         echo "Numero fuera de rango";
         break;
     }
    ?>
  </body>
</html>
