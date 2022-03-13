<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 19</title>
</head>
<body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <p><input type="text" name="altura"></p>
            <p><select name="seleccion">
                <option selected value="Sol.png">&#128142;&nbsp;Solana</option>
                <option value="Ada.png">&#10036;&nbsp;Cardano</option>
                <option value="Eth.png">&#128181;&nbsp;Ethereum</option>
                <option value="Bit.png">&#9889;&nbsp;Bitcoin</option>
                <option value="Polis.png">&#128304;&nbsp;Polis</option>
            </select></p>
            <p><input type="submit" value="Calcular"></p>
        </form>

        <?php
        $altura=$_REQUEST['altura'];
        $seleccion=$_REQUEST['seleccion'];
        $cadena = "";
            for ($i=1; $i <= $altura ; $i++) { 
                for ($j= $i; $j <= $i ; $j++) { 
                    $cadena.= "<img src='img/".$seleccion."'>";
                }
                echo $cadena."<br />";
            }


        ?>
</body>
</html>