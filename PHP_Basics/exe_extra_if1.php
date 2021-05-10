<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Exercícios Extra If 1</title>
</head>
<body>
    
<?php

date_default_timezone_set("Europe/Lisbon");
$hora = date("H");

echo "<p>Hora atual: " . date("H:i") . "</p>";

if ($hora < 12)
    echo "<p>Bom dia!</p>";
else if ($hora < 20)
    echo "<p>Boa tarde!</p>";
else
    echo "<p>Boa noite!</p>";

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