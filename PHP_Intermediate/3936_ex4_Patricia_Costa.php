<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
    <h1>LOGIN</h1>

    <!-- Estas classes são do bootstrap -->
    <div class="container">
        <form method="POST">

            <div class="row justify-content-center">
                <div class="col-2 col-lg-1">
                    <label for="nome" class="form-label">Nome: </label>
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-2 col-lg-1">
                    <label for="pass" class="form-label">Password: </label>
                </div>
                <div class="col-6">
                    <input type="password" class="form-control" id="pass" name="pass">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-1">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
            </div>

        </form>
    </div>


    <?php

        $nome = "Patrícia Costa";
        $pass = "password123";

        if (!isset($_POST["nome"], $_POST["pass"]) || trim($_POST["nome"]) == "" || trim($_POST["pass"]) == "")
            echo "<p class='incompleto'>Insira o seu nome e password!</p>";
        else if ($_POST["pass"] != $pass || $_POST["nome"] != $nome)
            echo "<p class='incorreto'>Nome ou password incorreto!</p>";
        else
            echo "<p class='sucesso'>Login com sucesso! Bem-vinda <b>{$nome}</b></p>";

    ?>

    <style>

        h1, p {
            margin: 50px;
            text-align: center;
        }

        .incompleto {
            background-color: yellow;
        }

        .incorreto {
            color: red;
            font-weight: bold;
        }

        .sucesso {
            color: limegreen;
        }

        .row {
            margin-bottom:  10px;
        }

        .col-2 {
            text-align: right;
        }

    </style>
</body>
</html>