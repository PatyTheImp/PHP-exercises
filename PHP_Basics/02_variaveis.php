<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>

<body>

    <?php

    //Variáveis iniciam-se por $ 
    $var = 10;
    echo $var . " | " . gettype($var);

    $var = "Paty";
    echo "<br>" . $var . " | " . gettype($var);

    $var = true;
    echo "<br>" . $var . " | " . gettype($var);

    $var = 1.5;
    echo "<br>" . $var . " | " . gettype($var);

    $nome = "Paty";
    $apelido = "Costa";
    $nomeCompleto = $nome . " " . $apelido;
    echo "<br>";
    echo $nomeCompleto;
    echo "<br>";
    echo $nome . " " . $apelido;
    echo "<br>";
    echo "$nome $apelido <br>";
    echo str_repeat($nome, 3);
    echo "<br>";
    echo strtolower($nomeCompleto);
    echo "<br>";
    echo strtoupper($nome);
    echo "<br>";

    $nome = "paty";
    echo $nome;
    echo "<br>";
    echo ucfirst($nome);

    echo "<br><br>CONSTANTES<br>";
    define("VALOR_CONSTANTE", 500);
    echo VALOR_CONSTANTE;
    ?>

</body>

</html>