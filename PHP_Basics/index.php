<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&family=Open+Sans&display=swap" rel="stylesheet">
    <!-- Meu CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Aulas de PHP</title>
</head>

<body>

<h1>Menu</h1>


<?php

//Array com o nome dos ficheiros php contendo os exercicios 
$exe_names = 
[
    '01_texto', 
    '02_variaveis', 
    '03_calculos', 
    '04_estruturas_decisao', 
    '05_estruturas_repicao', 
    'Ex1_for',
    'Ex2_rand', 
    'exe_extra_for1', 
    'exe_extra_for2', 
    'exe_extra_for3', 
    'exe_extra_if1', 
    'exe_extra_if2', 
    'exe_extra_switch1'
];

foreach ($exe_names as $name)
    echo "<a href='{$name}.php' target='_blank'>{$name}</a><br>";

?>

<img class="tuna" src="imagens/cat-walk.gif">

</body>

</html>