<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Exercícios Extra For 1</title>
</head>
<body>

<h1>Números</h1>
<br>
    
<?php

for ($i = 1; $i <= 30; $i++)
{
    $par_ou_impar = $i % 2 == 0 ? "par" : "ímpar";
    echo "<p> $i é $par_ou_impar </p>";
}
    
?>

<style>

    body {
        text-align: center;
        background-color: rgb(42, 42, 42);
        color: whitesmoke;
    }

    p {
        line-height: 10px;
    }

</style>

</body>
</html>