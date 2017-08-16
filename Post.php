<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Post</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <h3>Ingrese dos numero a sumar:</h3>
      <form  method="post" >
        <br><br>
        <label for="">Ingrese numero 1</label>
        <input type="number" id="num1" ><br><br>
        <label for="">Ingrese numero 2</label>
        <input type="number" id="num2" ><br><br>
        <input type="submit" name="" value="Sumar">
      </form>
      <?php
       $N1[]=$_POST[num1];
       $N2[]=$_POST[num1];
       $suma=$N1+$N2;
       echo "Resultado: $suma";

       ?>

    </div>


  </body>
</html>
