<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
</head>

<body>

    <?php

    $x = 5;
    $y = 1;

    if ($x > $y)
        echo "$x é maior que $y";
    else
        echo "$y é maior que $x";

    echo "<br>";

    if ($x % 2 == 0)
        echo "$x é par";
    else
        echo "$x é impar";

    echo "<br>";

    if ($y != 0)
        echo "$x / $y = " . $x / $y;
    else
        echo "Impossível dividir por 0";

    echo "<br>" . date("d/m/Y") . "<br>";

    $idade = 1100;
    switch ($idade) {
        case $idade < 0:
            echo "Ainda não nasceu!";
            break;

        case $idade >= 0 && $idade <= 100:
            echo "Idade entre 0 a 100";
            break;

        default:
            echo "Idade superior a 100";
            break;
    }

    ?>

</body>

</html>