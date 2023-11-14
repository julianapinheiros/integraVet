<?php
    if (isset($_POST['submit']))
    {

        if ( !empty($_POST['CNPJ'])) 
        {
            include_once('C:\xampp\htdocs\integraVet\app\config.php');

            $instituicao_cnpj = $_POST['CNPJ'];
            $instituicao_nome = $_POST['nome_instituicao'];
            $instituicao_email = $_POST['email_instituicao'];
            $instituicao_senha = $_POST['senha_instituicao'];
            $cep = $_POST['cep'];
            $logradouro = $_POST['logradouro'];
            $numero = $_POST['numero'];
            $bairro = $_POST['bairro'];
            $localidade = $_POST['localidade'];
            $uf = $_POST['uf'];
            $telefone = $_POST['telefone'];
            $trabalhamos_com = $_POST['trabalhamos_com'];
    
            $result = mysqli_query($mysql,
                "INSERT INTO instituicao_cadastro
                (
                    instituicao_cnpj,
                    instituicao_nome,
                    instituicao_email,
                    instituicao_senha,
                    cep,
                    logradouro,
                    numero,
                    bairro,
                    localidade,
                    uf,
                    telefone,
                    trabalhamos_com
                ) VALUES (
                    '$instituicao_cnpj',
                    '$instituicao_nome',
                    '$instituicao_email',
                    '$instituicao_senha',
                    '$cep',
                    '$logradouro',
                    '$numero',
                    '$bairro',
                    '$localidade',
                    '$uf',
                    '$telefone',
                    '$trabalhamos_com'
                )"
            );

            if ($result) 
            {
                header('Location: Login.php');
            } 
        }


       
    }
?>

<!DOCTYPE html>
<html>

<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>IntegraVet</title>
    <link href="../cssPadrao/cadastro.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/header.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/geral.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script defer="defer" src="js/slider.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <script defer="defer" src="../jsPadrao/menu.js"></script>
    <script defer="defer" src="../jsPadrao/cadastro.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>
    <div class="terco-da-tela">
        <img src="../imagens/pets_cadastro.png" class="img-fluid" alt="campanha">
    </div>
    <div class="bg-light">
        <div class="container menu">
            <div class="row">
                <div class="col-12 mn">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="../tutores/Default.html"><img src="../imagens/Logo_IntegraVET.png" alt="Logo escrito IntegraVet"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="../tutores/Default.html">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../tutores/Contatos.html">Contatos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../tutores/SaibaMais.html">Saiba Mais</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
    
                </div>
            </div>
        </div>
    </div>

    <div class="container cadastro mt-4">
        <div class="row selecao mt-4">

        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary btn-sm"><a href="Cadastro.php" style="text-decoration: none; color: black;">
                Cadastro Veterianário</a></button>
            <button type="button" class="btn btn-primary btn-sm" disabled>Cadastro Instituição</button>
            <button type="button" class="btn btn-light" disabled></button>
        </div><br>

            <div id="formVeterinario" class="form-container">
                <br><form action="CadastroInstituicao.php" method="POST">
                    <!-- Campos do formulário para cadastrar veterinário -->
                    <div class="input-field-group">
                        <label for="CNPJ">CNPJ</label>
                        <input type="text" id="CNPJ" name="CNPJ" autocomplete="off" class="form-control" pattern="[0-9]{2}.[0-9]{3}.[0-9]{3}/[0-9]{4}-[0-9]{2}" placeholder="00.000.000/0000-00"required>
                    </div>
                    
                    <div class="input-field-group">
                        <label for="nome_instituicao">Nome Instituição</label>
                        <input type="text" id="nome_instituicao" name="nome_instituicao" autocomplete="off" class="form-control" required>
                    </div>

                    <div class="input-field-group">
                        <label for="email_instituicao">Email</label>
                        <input type="email_instituicao" id="email_instituicao" name="email_instituicao" autocomplete="off" class="form-control" required>
                    </div>

                    <div class="input-field-group">
                        <label for="senha_instituicao">Senha</label>
                        <input type="password" id="senha_instituicao" name="senha_instituicao" autocomplete="off" class="form-control" required>
                    </div> 

                    <div class="row">
                                <div class="col-3 col-md-3">
                                    <div class="input-field-group">
                                        <label for="cep" >CEP</label>
                                        <input type="text" name="cep" id="cep" placeholder="00000-000"required>
                                    </div>
                                </div>

                                <div class="col-3 col-md-3">
                                    <div class="input-field-group">
                                        <br>
                                        <button class="btn btn-primary" type="button" onclick="buscarEndereco()">Buscar</button>
                                    </div>
                                </div>
                                <div class="col-7 col-md-7">
                                    <div class="input-field-group">
                                        <label for="logradouro" >Endereço</label>
                                        <input type="text" id="logradouro" name="logradouro" class="form-control" required>
                                    </div>  
                                </div>
                                <div class="col-2 col-md-2">
                                    <div class="input-field-group">
                                        <label for="numero" >Número</label>
                                        <input type="text" id="numero" name="numero" class="form-control" required>
                                    </div>                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-4 col-md-4">
                                    <div class="input-field-group">
                                        <label for="bairro" >Bairro</label>
                                        <input type="text" id="bairro" name="bairro" class="form-control" required>
                                    </div>                                                                       
                                </div>
                                <div class="col-4 col-md-4">
                                    <div class="input-field-group">
                                        <label for="localidade" >Cidade</label>
                                        <input type="text" id="localidade" name="localidade" class="form-control" required>
                                    </div>                                                                       
                                </div>
                                <div class="col-4 col-md-4">
                                    <div class="input-field-group">
                                        <label for="uf" >Estado</label>
                                        <input type="text" id="uf" name="uf" class="form-control" required>
                                    </div>                                                                       
                                </div>
                            </div> 
                    </div>
                    <div class="input-field-group">
                        <label for="telefone">Telefone:</label>
                        <input type="tel" id="telefone" name="telefone" pattern="[0-9]{2}[0-9]{4,5}-[0-9]{4}" placeholder="0000000-0000" required>
                    </div> 
                    
                    <div class="input-field-group">
                        <label for="trabalhamos_com">Trabalhamos com:</label>
                        <select name="trabalhamos_com">
                            <option value="Banco de sangue">Banco de Sangue</option>
                            <option value="Coleta">Coleta</option>
                            <option value="Estoque de Bolsas">Estoque de Bolsa</option>
                            <option value="Transfusão">Transfusão</option>
                        </select><br>
                    </div> 

                    <div class="botao col-12 text-center mt-4">
                        <input type="submit" id="submit" name="submit" value="Cadastrar Instituição" class="btn btn-primary">
                    </div>

                    <br><br>

        <script>
            function buscarEndereco() {
                var cep = document.getElementById('cep').value;

                // Faz a requisição AJAX para o arquivo PHP local que encaminha a requisição à API do ViaCEP
                fetch(`buscarEndereco.php?cep=${cep}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.erro) {
                            console.error('Erro ao buscar endereço:', data.erro);
                            alert('Erro ao buscar endereço. Verifique o CEP e tente novamente.');
                        } else {
                            // Preenche os campos de endereço com os dados obtidos
                            document.getElementById('logradouro').value = data.logradouro;
                            document.getElementById('bairro').value = data.bairro;
                            document.getElementById('localidade').value = data.localidade;
                            document.getElementById('uf').value = data.uf;
                        }
                    })
                    .catch(error => {
                        console.error('Erro ao buscar endereço:', error);
                        alert('Erro ao buscar endereço. Verifique o CEP e tente novamente.');
                    });
            }
        </script>


    </div>

                               
              
</body>
</html>
