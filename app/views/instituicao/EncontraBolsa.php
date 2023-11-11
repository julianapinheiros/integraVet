<?php
    session_start();
    
    if ((!isset($_SESSION['id']) == true) &&
        (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['id']);
        unset($_SESSION['senha']);

        header('Location: ../tutores/Default.html');
    }

    $logado = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>

<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>IntegraVet-Login</title>
    <link href="css/encontraBolsa.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/header.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/geral.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script defer="defer" src="js/slider.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <script defer="defer" src="../jsPadrao/menu.js  "></script>

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
                            <a class="navbar-brand" href="../instituicao/Default.html"><img src="../imagens/Logo_IntegraVET.png" alt="Logo escrito IntegraVet"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="Default.php">Meu estoque</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="CadBolsa.php">Cadastrar Bolsas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="EncontraBolsa.php">Encontrar Bolsas</a>
                                    </li>
                                </ul>
                                <ul class="navbar-nav sair" aling="text-rigt">
                                    <li class="nav-item">
                                        <a class="nav-link active sair" aria-current="page" href="../tutores/Default.html">Sair</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row titulo">
            <div class="col-12 text-center">
                <h1>Encontre Bolsas de Sangue!</h1>
            </div>
        </div>
    </div>

    <div class="container pesquisa">
        <div class="row apresentacao">

            <form action=""  method="GET">
                <div class="row">
                    <div class="col-md-4">
                        <label for="animal">Animal:</label>
                        <select id="animal" name="animal" class="form-select">
                            <option value="" selected disabled>Selecione o animal</option>
                            <option value="Gato" <?= isset($_GET['animal']) == true ? ($_GET['animal'] == 'Gato' ? 'selected': '') :''  ?> >Gato</option>
                            <option value="Cachorro" <?= isset($_GET['animal']) == true ? ($_GET['animal'] == 'Cachorro' ? 'selected': '') :''  ?> >Cachorro</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="componente">Componente:</label>
                        <select id="componente" name="componente"  class="form-select">
                            <option value="" selected disabled>Selecione o componente</option>                    
                            <option value="Concentrado Hemacias"  <?= isset($_GET['componente']) == true ? ($_GET['componente'] == 'Concentrado Hemácias' ? 'selected': '') :''  ?>>Concentrado Hemácias</option>
                            <option value="Plaquetas"  <?= isset($_GET['componente']) == true ? ($_GET['componente'] == 'Plaquetas' ? 'selected': '') :''  ?>>Plaquetas</option>
                            <option value="Plasmas" <?= isset($_GET['componente']) == true ? ($_GET['componente'] == 'Plasmas' ? 'selected': '') :''  ?> >Plasmas</option>
                            <option value="Sangue Total" <?= isset($_GET['componente']) == true ? ($_GET['componente'] == 'Sangue Total' ? 'selected': '') :''  ?> >Sangue Total</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="cidade">Cidade:</label>
                        <select id="cidade" name="cidade"  class="form-select">
                            <option value="" selected disabled>Selecione a cidade</option>                    
                            <option value="São Paulo" <?= isset($_GET['cidade']) == true ? ($_GET['cidade'] == 'São Paulo' ? 'selected': '') :''  ?> >São Paulo</option>
                            <option value="Rio de Janeiro" <?= isset($_GET['cidade']) == true ? ($_GET['cidade'] == 'Rio de Janeiro' ? 'selected': '') :''  ?> >Rio de Janeiro</option>
                            <option value="Vitória" <?= isset($_GET['cidade']) == true ? ($_GET['cidade'] == 'Vitória' ? 'selected': '') :''  ?> >Vitória</option>
                            <option value="Belo Horizonte" <?= isset($_GET['cidade']) == true ? ($_GET['cidade'] == 'Belo Horizonte' ? 'selected': '') :''  ?> >Belo Horizonte</option>         
                        </select>
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

                    if (isset($_GET['animal']) && $_GET['animal'] != '')
                    {
                        include_once('C:\xampp\htdocs\integraVet\app\config.php');

                        $animal = $_GET['animal'];
                        $componente = $_GET['componente'];
                        //$cidade = $_GET['cidade'];

                        $result = mysqli_query($mysql,
                        "SELECT * FROM cad_bolsa
                            WHERE bolsa_animal = '$animal' AND bolsa_componente = '$componente'
                            ORDER BY instituicao_cnpj DESC"
                        );
                    

                        if ($result) 
                        {
                            if ($row = mysqli_num_rows($result) > 0) 
                            {
                                ?>

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Animal</th>
                                            <th>Componente</th>
                                            <th>Quantidade</th>
                                            <th>Instituição</th>
                                            <th>Telefone</th>
                                            <th>Endereço</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                            foreach ($result as $item)
                                                {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $item["bolsa_animal"]; ?></td>
                                                            <td><?php echo $item["bolsa_componente"]; ?></td>
                                                            <td><?php echo $item["bolsa_quantidade"]; ?></td>
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
</body>
</html>