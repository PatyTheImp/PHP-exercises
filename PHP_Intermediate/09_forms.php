<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Formulário</title>
</head>
<body>
    
    <!-- Form para abrir em outra página -->
    <!-- <form method="post" action="resposta.php"> -->

    <form method="post">

        Insira o seu nome:
        <input type="text" name="nome">
        <br>
        Insira o apelido:
        <input type="text" name="apelido">
        <br><br>
        <input type="submit" value="Submeter">

    </form>
    <br><br>
    <?php

        if (isset($_POST["nome"], $_POST["apelido"]))
        {
            echo "<p>Olá " . $_POST["nome"] . " " . $_POST["apelido"] ."</p>";

            //Usando variáveis
            $nome = $_POST["nome"];
            $apelido = $_POST["apelido"];

            echo "<p>Olá $nome $apelido </p>";
        }
        else
            echo "Preencha os campos";
    ?>

</body>
</html>