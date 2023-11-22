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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>IntegraVet</title>
    <link href="css/Default.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/header.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/geral.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/rodape.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script defer="defer" src="js/slider.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <script defer="defer" src="../jsPadrao/menu.js"></script>
</head>
<body>
    <!-- Menu -->
    <div class="topnav" id="myTopnav">
        <a href="Default.php">Meu Estoque</a>
        <a href="CadBolsa.php">Cadastrar Bolsas</a>
        <a href="EncontraBolsa.php">Encontrar Bolsas</a>
        <a href="../tutores/Default.html" id="logout">Sair
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                 <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg>
        </a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>

    <div class="container">
        <div class="row titulo">
            <div class="col-12 text-center">
                <h1>Estoque de bolsas</h1>
            </div>
        </div>
    </div>
    <div class="container pesquisa">
        <div class="row apresentacao">

            <form action=""  method="GET">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                        <label for="animal">Animal:</label>
                        <select id="animal" name="animal" class="form-select">
                            <option value="" selected disabled>Selecione o animal</option>
                            <option value="Gato">Gato</option>
                            <option value="Cachorro">Cachorro</option>
                        </select>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                        <label for="componente">Componente:</label>
                        <select id="componente" name="componente"  class="form-select">
                            <option value="" selected disabled>Selecione o componente</option>                    
                            <option value="">Concentrado Hemácias</option>
                            <option value="">Plaquetas</option>
                            <option value="">Plasmas</option>
                            <option value="">Sangue Total</option>
                        </select>
                    </div>

                    <div class="botao col-12 text-center mt-4">
                        <button type="submit" class="btn btn-secondary">Buscar</button>
                    </div>
                </div>
            </form>
        </div>     
    </div>

    <div class='container mt-4'>
        <div class="row selecao" style="overflow-x:auto;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Animal</th>
                        <th>Componente</th>
                        <th>Quantidade</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        include_once('C:\xampp\htdocs\integraVet\app\config.php');

                        $instituicao_cnpj = $_SESSION['id'];

                        $sql = "SELECT * FROM cad_bolsa 
                        WHERE instituicao_cnpj = '$instituicao_cnpj'";
            
                        $result = $mysql->query($sql);

                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                                <td><?php echo $row["bolsa_animal"]; ?></td>
                                <td><?php echo $row["bolsa_componente"]; ?></td>
                                <td><?php echo $row["bolsa_quantidade"]; ?></td>
                                
                                <td>
                                    <a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-success">Editar</a>
                                    <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Excluir</a>
                                </td>
                        </tr>
                        <?php
                        }
                        
                    ?>
                </tbody>
            </table>

            <div class="botao col-12 text-center mt-4">
                <a class="btn btn-primary" aria-current="page" href="CadBolsa.php">Cadastrar Bolsa</a>
            </div>
        </div>
    </div>
    <div class="bg-light">       
        <footer>
            <div class="row dados">
                <div class="info">
                    <span><a href="">Política de Privacidade</a> | <a href="">Termos e condições de uso</a> | <a href="Perfil.html">Meu perfil</a></span>
                </div>
                <div class="suporte">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                        <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                        <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
                    </svg>
                    <a href="">suporte@integravet.com</a>
                </div>
            </div>            
        </footer>
    </div>
</body>
</html>