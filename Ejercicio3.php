<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio3</title>
  </head>
  <body>
  <h4>Algoritmo que rellene los 10 primeros numeros enteros y los muestre en pantalla en orden ascendente:</h4>
  <?php
    $Numeros = array(1, 7, 3, 4, 6, 5, 2, 9, 8, 10 );
    $Orden=sort($Numeros);
    foreach ($Numeros as $Orden) {
      echo "$Orden, ";
    }



   ?>
  </body>
</html>
