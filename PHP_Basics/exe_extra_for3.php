<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Exercícios Extra For 3</title>
</head>
<body>

<?php

for ($i = 1; $i <= 10; $i++)
    echo "*";

echo "<br>";

for ($i = 1; $i <= 10; $i++)
{
    echo "*";
    for ($j = 1; $j <= 12; $j++)
        echo "&nbsp";
    echo "*<br>";
}

for ($i = 1; $i <= 10; $i++)
    echo "*";

?>

<style>

    body {
        padding: 15px;
        background-color: rgb(42, 42, 42);
        color: whitesmoke;
        line-height: 7px;
    }

</style>

</body>
</html>