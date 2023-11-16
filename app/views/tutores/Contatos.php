<!DOCTYPE html>
<html>

<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>IntegraVet - Contatos</title>
    <!-- <link href="css/contatos.css" rel="stylesheet" type="text/css" /> -->
    <link href="../cssPadrao/header.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/contatos.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/geral.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/rodape.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <script defer="defer" src="../jsPadrao/menu.js"></script>

</head>
<body>
    <div class="bg-light">
        <div class="container menu">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="../tutores/Default.html"><img src="../imagens/Logo_IntegraVET.png" alt="Logo escrito IntegraVet"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="Default.html">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="Contatos.php">Contatos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="SaibaMais.html">Saiba Mais</a>
                                    </li>
                                </ul>
                                <ul class="navbar-nav login" aling="text-rigt">
                                    <li class="nav-item">
                                        <a class="nav-link active login" aria-current="page" href="../PrincipalPadrao/Login.php">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
    
                </div>
            </div>
        </div>
    </div>

    <div class="container introducao mt-5">
        <div class="row apresentacao">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <div class="col-12 mb-3 mt-4">
                    <h1>Seja um Hemocentro Cadastrado!</h1>
                </div>
                <div class="col-12 mb-4">
                    <h3>Integração e Incentivo a Doação Sanguínea para Cães e Gatos.</h3>
                </div>
                <div class="col-12">
                    <span>Encontre instituições cadastradas e agende a doação de sangue do seu pet.<br>
                        Seu pet pode salvar vidas!</span>
                </div>
                <div class="col-12 mt-4">
                    <span>Possui estoque de bolsas de sangue? Atua na área de transfusão de sangue animal?<br>
                    Clique em "Acessar" e cadastre-se para acessar nossos recursos.</span>
                </div>
                <div class="col-12 mt-3">
                    <a href="../PrincipalPadrao/Cadastro.php" class="button__apresentacao">Acessar</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <div class="apresentacao__image">
                    <img src="../imagens/imagem_apresentacao1.png" />
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row titulo">
            <div class="col-12 text-center">
                <h1>Faça a diferença hoje. Entre em contato com uma instituição!</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row apresentacao">     
            <form action=""  method="GET">  
                <div class="row">     
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 filtro">
                        <label for="Procedimento">Procedimento</label>
                        <select id="Procedimento" name="Procedimento">
                            <option value="" selected disabled>Selecione o procedimento</option>
                            <option value="Banco de sangue" <?= isset($_GET['Procedimento']) == true ? ($_GET['Procedimento'] == 'Banco de sangue' ? 'selected': '') :''  ?>>Banco de Sangue</option>
                            <option value="Coleta" <?= isset($_GET['Procedimento']) == true ? ($_GET['Procedimento'] == 'Coleta' ? 'selected': '') :''  ?>>Coleta de Sangue</option>
                            <option value="Estoque de Bolsas" <?= isset($_GET['Procedimento']) == true ? ($_GET['Procedimento'] == 'Estoque de Bolsas' ? 'selected': '') :''  ?>>Estoque de Bolsa</option>
                            <option value="Transfusão" <?= isset($_GET['Procedimento']) == true ? ($_GET['Procedimento'] == 'Transfusão' ? 'selected': '') :''  ?>>Transfusão</option>
                        </select>                
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 filtro">
                        <label for="uf">Estado  </label>
                        <select id="uf" name="uf">
                            <option value="" selected disabled>Selecione o estado</option>                    
                            <option value="SP" <?= isset($_GET['uf']) == true ? ($_GET['uf'] == 'SP' ? 'selected': '') :''  ?>>São Paulo</option>
                            <option value="RJ" <?= isset($_GET['uf']) == true ? ($_GET['uf'] == 'RJ' ? 'selected': '') :''  ?>>Rio de Janeiro</option>
                            <option value="ES" <?= isset($_GET['uf']) == true ? ($_GET['uf'] == 'ES' ? 'selected': '') :''  ?>>Espirito Santo</option>
                            <option value="MG" <?= isset($_GET['uf']) == true ? ($_GET['uf'] == 'MG' ? 'selected': '') :''  ?>>Minas Gerais</option>         
                        </select>
                    </div>
                </div>

                <div class="botao col-12 text-center mt-4">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </div>   
            </form>          
        </div>        
    </div>

    <div class="container tabela mt-2">
        <div class="row apresentacao">
            <div class="col-12">
                <?php

                    if (isset($_GET['uf']) && $_GET['Procedimento'] != '')
                    {
                        include_once('C:\xampp\htdocs\integraVet\app\config.php');

                        $uf = $_GET['uf'];
                        $procedimento = $_GET['Procedimento'];
                        
                        $result = mysqli_query($mysql,
                        "SELECT 
                            ic.instituicao_nome,
                            ic.trabalhamos_com,
                            ic.telefone,
                            ic.logradouro,
                            ic.numero,
                            ic.bairro
                        FROM 
                            instituicao_cadastro AS ic
                        WHERE 
                            ic.trabalhamos_com = '$procedimento' AND ic.uf = '$uf'
                        ORDER BY 
                            ic.instituicao_cnpj DESC;"
                        );
                            

                        if ($result) 
                        {
                            if ($row = mysqli_num_rows($result) > 0) 
                            {
                                ?>

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Instituição</th>
                                                <th>Procedimento</th>
                                                <th>Telefone</th>
                                                <th>Endereço</th>
                                                <th>Numero</th>
                                                <th>Bairro</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                    
                                <?php
                                    foreach ($result as $item)
                                    {
                                ?>
                                    <tr>
                                        <td><?php echo $item["instituicao_nome"]; ?></td>
                                        <td><?php echo $item["trabalhamos_com"]; ?></td>
                                        <td><?php echo $item["telefone"]; ?></td>
                                        <td><?php echo $item["logradouro"]; ?></td>
                                        <td><?php echo $item["numero"]; ?></td>
                                        <td><?php echo $item["bairro"]; ?></td>
                                    </tr>
                                <?php
                                    }
                                ?>
                                <?php
                                ?>
                                        </tbody>
                                    </table>
                                <?php
                                    }
                                                
                            }
                        }
                ?>
            </div>
        </div>
    </div>

    </div>
    <div class="bg-light">       
        <footer>
            <div class="row dados">
                <div class="info">
                    <span><a href="">Política de Privacidade</a> | <a href="">Termos e condições de uso</a></span>
                </div>
                <div class="suporte">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                        <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                        <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
                      </svg><a href="">suporte@integravet.com</a>

                </div>
            </div>            
        </footer>
    </div>
</body>
</html>