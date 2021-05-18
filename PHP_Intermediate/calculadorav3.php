<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Calculadora v3</title>
</head>
<body>

    <h1>.: Calculadora v3.0 :.</h1>
    <h4>Introduza dois números: </h3>

    <form method="post">

        <input type="text" name="num1" size="2">
        <input type="text" name="num2" size="2">
        <br><br>
        <input type="radio" name="rb" value="soma" id="soma" checked>
        <label for="soma">Soma</label>
        <br>
        <input type="radio" name="rb" value="subtracao" id="subtracao">
        <label for="subtracao">Subtração</label>
        <br>
        <input type="radio" name="rb" value="multiplicacao" id="multiplicacao">
        <label for="multiplicacao">Multiplicação</label>
        <br>
        <input type="radio" name="rb" value="divisao" id="divisao">
        <label for="divisao">Divisão</label>
        <br><br>
        <button type="submit" class="btn btn-outline-dark">Calcular</button>

    </form>

    <?php

        

        if (!isset($_POST["num1"], $_POST["num2"]) || trim($_POST["num1"]) == "" || trim($_POST["num2"]) == "")
            echo "<p>Preencha os campos</p>";
        else if (is_numeric($_POST["num1"]) && is_numeric($_POST["num2"]))
        {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $resultado = null;

            if (isset($_POST["rb"]))
            {
                if ($_POST["rb"] == "soma")
                {
                    $resultado = ($num1 + $num2);
                    echo "<p><b>Resultado:</b> " . $resultado . "</p>";
                }
                elseif ($_POST["rb"] == "subtracao")
                {
                    $resultado = ($num1 - $num2);
                    echo "<p><b>Resultado:</b> " . $resultado . "</p>";
                }
                elseif ($_POST["rb"] == "multiplicacao")
                {
                    $resultado = ($num1 * $num2);
                    echo "<p><b>Resultado:</b> " . $resultado . "</p>";
                }
                else
                {
                    if ($num2 == 0)
                        echo "<p>Impossível dividir por zero!</p>";
                    else
                    {
                        $resultado = ($num1 / $num2);
                        echo "<p><b>Resultado:</b> " . $resultado . "</p>";
                    }
                }

                if (isset($resultado))
                {
                    echo "<p><b>Resultado ao quadrado:</b> " . pow($resultado, 2) . "</p>";

                    if ($resultado >= 0)
                        echo "<p><b>Raiz quadrado do resultado:</b> " . sqrt($resultado) . "</p>";

                    if (!is_int($resultado))
                        echo "<p>O resultado é uma fração!";
                    elseif ($resultado % 2 == 0)
                        echo "<p>O resultado é par!</p>";
                    else
                        echo "<p>O resultado é impar!</p>";
                }
            }
            else
                echo "<p>Seleccione uma operação.</p>";               
        }
        else
            echo "<p>Introduza valores numéricos.</p>";  

    ?>

    <style type="text/css">
    
        body {
            padding: 30px;
        }

        h1 {
            margin-bottom: 40px;
        }

        h4 {
            margin-bottom: 30px;
        }

        p {
            margin-top: 20px;
        }

    </style>
</body>
</html> 