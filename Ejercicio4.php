<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio4</title>
  </head>
  <body>
    <h4>Algoritmo que rellene un array con los numeros pares comprendidos entre 1 y 10 ny los muestre en pantalla en orden ascendente: </h4>

    <?php
     $Pares = array(8, 10 , 6, 2, 4);
     $Orden= sort($Pares);
     foreach ($Pares as $Orden) {
        echo "$Orden, ";
     }







     ?>

  </body>
</html>
