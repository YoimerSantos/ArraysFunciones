<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio5</title>
  </head>
  <body>
    <h4>Algoritmo que almacene 10 numeros en un array y muestre la suma, resta, multipliacion y division de todos:</h4>
    <?php
     $Numeros  = array(3, 6, 8, 2, 9, 12, 10, 4, 1, 5);
     $Suma= $Numeros[0]+$Numeros[1]+$Numeros[2]+$Numeros[3]+$Numeros[4]+$Numeros[5]+$Numeros[6]+$Numeros[7]+$Numeros[8]+$Numeros[9];
     $Resta= $Numeros[0]-$Numeros[1]-$Numeros[2]-$Numeros[3]-$Numeros[4]-$Numeros[5]-$Numeros[6]-$Numeros[7]-$Numeros[8]-$Numeros[9];
     $Multiplicacion= $Numeros[0]*$Numeros[1]*$Numeros[2]*$Numeros[3]*$Numeros[4]*$Numeros[5]*$Numeros[6]*$Numeros[7]*$Numeros[8]*$Numeros[9];
     $Division= $Numeros[0]/$Numeros[1]/$Numeros[2]/$Numeros[3]/$Numeros[4]/$Numeros[5]/$Numeros[6]/$Numeros[7]/$Numeros[8]/$Numeros[9];
     echo "Suma: $Suma <br> <br> Resta: $Resta <br> <br> Multiplicacion: $Multiplicacion <br> <br> Division: $Division";




     ?>
  </body>
</html>
