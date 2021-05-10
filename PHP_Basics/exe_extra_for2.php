<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Exercícios Extra For 2</title>
</head>
<body>

<?php

$tabuada = 3;

echo "<h3>Tabuada dos $tabuada </h3><br>";

for ($i = 1; $i <= 10; $i++)
{
    echo "<p>{$tabuada} x ";
    if ($i < 10) echo "0";       
    echo $i . " = ";
    if ($i * $tabuada < 10) echo "0";
    echo ($i * $tabuada) . "</p>";
}

?>
    
<style>

    body {
        padding: 15px;
        background-color: rgb(42, 42, 42);
        color: whitesmoke;
    }

    p {
        line-height: 10px;
        text-indent: 40px;
    }

</style>

</body>
</html>