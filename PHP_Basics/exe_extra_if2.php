<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Exercícios Extra If 2</title>
</head>
<body>
    
<?php

date_default_timezone_set("Europe/Lisbon");
$dia_da_semana = date("D");

switch ($dia_da_semana) 
{
    case "Mon":
        $dia_da_semana_pt = "segunda-feira";
        break;

    case "Tue":
        $dia_da_semana_pt = "terça-feira";
        break;

    case "Wed":
        $dia_da_semana_pt = "quarta-feira";
        break;

    case "Thu":
        $dia_da_semana_pt = "quinta-feira";
        break;

    case "Fri":
        $dia_da_semana_pt = "sexta-feira";
        break;

    case "Sat":
        $dia_da_semana_pt = "sábado";
        break;
    
    default:
        $dia_da_semana_pt = "domingo";
        break;
}

echo "Hoje é $dia_da_semana_pt";

if ($dia_da_semana == "Sat" || $dia_da_semana == "Sun")
    echo "<p>Bom fim de semana!</p>";
else
    echo "<p>Boa semana!</p>";

?>

<style>

    body {
        text-align: center;
        background-color: rgb(42, 42, 42);
        color: whitesmoke;
    }

</style>

</body>
</html>