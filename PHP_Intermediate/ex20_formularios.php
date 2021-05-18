<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boostrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@700&display=swap" rel="stylesheet">

    <title>Formulários</title>
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col formulario my-4 p-4">

                <form method="POST" action="formulario_sucesso.php" class="form">

                    <h1>Formulário</h1>
                    <hr>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="txt-nome" name="txt-nome" placeholder="Nome">
                        <label for="txt-nome">Nome</label>
                    </div>

                    <div class="row gx-2">

                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="num-peso" name="num-peso" min="0" max="150" placeholder="Peso (0-150 kg)">
                                <label for="num-peso">Peso (0-150 kg)</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="dt-data-nasc" name="dt-data-nasc">
                                <label for="dt-data-nasc">Data de nascimento</label>
                            </div>
                        </div>

                    </div>

                    <div class="form-floating mb-3 col-md-6">
                        <input type="text" class="form-control" id="num-telefone" name="num-telefone" placeholder="Telefone (limitado a 9 números)" maxlength="9">
                        <label for="num-telefone">Telefone (limitado a 9 números)</label>
                    </div>

                    <hr>

                    <fieldset class="row mb-3">
                        <legend class="col-form-label pt-0"><b>Género:</b></legend>

                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rb-genero" id="rb-masculino" value="rb-masculino" checked>
                                <label class="form-check-label" for="rb-masculino">
                                Masculino
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rb-genero" id="rb-feminino" value="rb-feminino">
                                <label class="form-check-label" for="rb-feminino">
                                Feminino
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rb-genero" id="rb-outro" value="rb-outro">
                                <label class="form-check-label" for="rb-outro">
                                Outro
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="row mb-3">
                        <legend class="col-form-label pt-0"><b>Estado Civil:</b></legend>

                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rb-std-civil" id="rb-solteiro" value="rb-solteiro" checked>
                                <label class="form-check-label" for="rb-solteiro">
                                Solteiro
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rb-std-civil" id="rb-casado" value="rb-casado">
                                <label class="form-check-label" for="rb-casado">
                                Casado
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rb-std-civil" id="rb-divorciado" value="rb-divorciado">
                                <label class="form-check-label" for="rb-divorciado">
                                Divorciado
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rb-std-civil" id="rb-viuvo" value="rb-viuvo">
                                <label class="form-check-label" for="rb-viuvo">
                                Viúvo
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="row mb-3">
                        <legend class="col-form-label pt-0"><b>Tem Filhos:</b></legend>

                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rb-filhos" id="rb-filhos-sim" value="rb-filhos-sim" checked>
                                <label class="form-check-label" for="rb-filhos-sim">
                                Sim
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rb-filhos" id="rb-filhos-nao" value="rb-filhos-nao">
                                <label class="form-check-label" for="rb-filhos-nao">
                                Não
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="row mb-3">
                        <legend class="col-form-label pt-0"><b>Veículo utilizado (escolha 1 ou mais):</b></legend>

                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="cb-bicicleta" id="cb-bicicleta" value="cb-bicicleta">
                                <label class="form-check-label" for="cb-bicicleta">
                                <b>Bicicleta</b>
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="cb-carro" id="cb-carro" value="cb-carro">
                                <label class="form-check-label" for="cb-carro">
                                <b>Carro</b>
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="cb-aviao" id="cb-aviao" value="cb-aviao">
                                <label class="form-check-label" for="cb-aviao"">
                                <b>Bicicleta</b>
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="row mb-3">
                        <legend class="col-form-label pt-0"><b>Escolha as opções que lhe interessam:</b></legend>

                        <div class="col-sm-3 col-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"  id="cb-livros">
                                <label class="form-check-label" for="cb-livros">
                                Livros
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"  id="cb-jogos">
                                <label class="form-check-label" for="cb-jogos">
                                Video jogos
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"  id="cb-filmes">
                                <label class="form-check-label" for="cb-filmes">
                                Filmes
                                </label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"  id="cb-comida">
                                <label class="form-check-label" for="cb-comida">
                                Comida
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"  id="cb-musica">
                                <label class="form-check-label" for="cb-musica">
                                Música
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"  id="cb-praia">
                                <label class="form-check-label" for="cb-praia">
                                Praia
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <hr>

                    <div class="form-floating mb-3 col-md-6">
                        <select class="form-select" id="cmb-prog-fav">
                            <option selected></option>
                            <option value="1">VS Code</option>
                            <option value="2">Visual Studio</option>
                            <option value="3">Excel</option>
                            <option value="4">Word</option>
                        </select>
                        <label for="cmb-prog-fav">Seleccione o seu programa favorito</label>
                    </div>

                    <div class="form mb-3">
                        <label for="cmb-prog-fav" class="mb-3"><b>Seleccione a sua linguagem favorita:</b></label>

                        <div class="col-sm-4 col-6">
                            <select class="form-select" id="cmb-prog-fav" size="3">
                                <option value="1">C++</option>
                                <option value="2">C#</option>
                                <option value="3">Java</option>
                                <option value="4">JavaScript</option>
                                <option value="5">HTML</option>
                                <option value="6">CSS</option>
                                <option value="7">Python</option>
                            </select>
                        </div>
                        
                    </div>

                    <button type="submit" class="btn btn-grad">Enviar</button>
                    <button type="submit" class="btn btn-grad">Limpar</button>

                </form>

            </div><!--formulario-->
        </div><!--row-->
    </div><!--container-->
    
    <style>

        body {
            background-image: linear-gradient(to bottom right, #240b36, #c31432);
        }

        h1 {
            text-align: center;
            font-family: 'Grenze Gotisch', cursive;
            font-weight: bold;
            color: #240b36;
        }

        .formulario {
            background-color: white;
            box-shadow: 5px 5px rgba(0, 0, 0, .5);
        }

        
        .btn-grad {background-image: linear-gradient(to right, #240b36 0%, #c31432  51%, #240b36 100%)}
         .btn-grad {

            transition: 0.5s;
            background-size: 200% auto;
            color: white;            

          }

          .btn-grad:hover {
            background-position: right center; 
            color: #fff;

          }

    </style>

</body>
</html>