<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 18</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    Numero 1: <input type="text" name="n" autofocus/><br/>
    Numero 2: <input type="text" name="n1" autofocus/><br/>
    <input type="submit" name="Enviar">
    </form>

    <?php
    
    $numero=$_REQUEST['n'];
    $numero1=$_REQUEST['n1'];

    if ($numero < $numero1) {

        $inicio=$numero1;
        $final=$numero;
        for ($i=$inicio; $i < $final ; $i=i + 7) { 
            echo "$i";
        }

    }elseif ($numero > $numero1) {
        $inicio=$numero;
        $final=$numero1;
        for ($i=$inicio; $i < $final; $i=i + 7) { 
            echo "<p>$i</p>";
        }

    }else{
        echo "Los numeros introducidos son iguales, introduce unos distintos";
    }

    //preguntar na clase//

    ?>
</body>
</html>