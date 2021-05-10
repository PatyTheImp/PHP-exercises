<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculos</title>
</head>
<body>
    
    <?php

        $num1 = 3;
        $num2 = 4;

        echo ((1 + 2 + $num1) * $num2) / 2 - 5;

        echo "<br><br>";
        echo "Funções<br>";
        echo "2 elevado a 3 = ";
        echo pow(2, 3);

        echo "<br>A raíz quadrada de 4 é ";
        echo sqrt(4);

        echo "<br>O resto da divisão de 4 por 2 é : ";
        echo fmod(4, 2);

        echo "<br>Número aleatório: ";
        echo rand();

        echo "<br>Número aleatório entre 1 e 10: ";
        echo rand(1, 10);

        $num2++;
        $num1--;
        echo "<br>num1 = $num1 | num2 = $num2";

        //Arredondamentos
        $var3 = 3.14;
        echo "<br>Arredondar: " . round($var3, 1);
        echo "<br>Ceiling: " . ceil($var3);
        echo "<br>Floor: " . floor($var3);
    ?>

</body>
</html>