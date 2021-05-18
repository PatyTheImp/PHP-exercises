<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

    <h1>.:Calculadora:.</h1>

    <form method="post">

        <input type="text" name="num1" size="2">
        <input type="text" name="num2" size="2">
        <input type="submit" value="somar">

    </form>

    <?php

        

        if (!isset($_POST["num1"], $_POST["num2"]) || trim($_POST["num1"]) == "" || trim($_POST["num2"]) == "")
        echo "<p>Preencha os campos</p>";
        else if (is_numeric($_POST["num1"]) && is_numeric($_POST["num1"]))
        {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            echo "<p>Resultado: " . ($num1 + $num2) . "</p>";
        }
        else
            echo "<p>Introduza valores numéricos.</p>";  

    ?>

    <style>
    
        body {
            padding: 30px;
        }

    </style>
</body>
</html> 