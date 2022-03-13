<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Calculadora</h1>
    <form action="Repaso_1.php" method="get">
    <input type="text" name="campo1">
    <input type="text" name="campo2">
    <input type="submit" value="Enviar">    
    </form>
<?php

     $n1 = $_GET['campo1'];
     $n2 = $_GET['campo2'];
       $multiplicacion=$n1*$n2;
       $resta=$n1-$n2;
       $dividir=$n1/$n2;
       $suma=$n1+$n2;
        echo "la multiplicación tiene como resultado: $multiplicacion"."</br>";
        echo "la división tiene como resultado: $dividir"."</br>";
        echo "la resta tiene como resultado: $resta"."</br>";
        echo "la suma tiene como resultado: $suma"."</br>";
        


        
    ?>
</body>
</html>