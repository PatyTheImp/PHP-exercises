<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Exercícios Extra Switch 1</title>
</head>
<body>

<?php

$mes = date("m");

switch ($mes) {
    case 1:
        $mes_extenso = "Janeiro";
        break;

    case 2:
        $mes_extenso = "Fevereiro";
        break;

    case 3:
        $mes_extenso = "Março";
        break;

    case 4:
        $mes_extenso = "Abril";
        break;

    case 5:
        $mes_extenso = "Maio";
        break;

    case 6:
        $mes_extenso = "Junho";
        break;

    case 7:
        $mes_extenso = "Julho";
        break;

    case 8:
        $mes_extenso = "Agosto";
        break;

    case 9:
        $mes_extenso = "Setembro";
        break;

    case 10:
        $mes_extenso = "Outubro";
        break;

    case 11:
        $mes_extenso = "Novembro";
        break;
    
    default:
        $mes_extenso = "Dezembro";
        break;
}

echo "<h1>Estamos no mês de $mes_extenso </h1>";

?>
    
<style>

    body {
        padding: 15px;
        text-align: center;
        background-color: rgb(42, 42, 42);
        color: whitesmoke;
    }

</style>

</body>
</html>