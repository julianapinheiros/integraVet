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
    <link href="css/default.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/header.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/geral.css" rel="stylesheet" type="text/css" />
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
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="../veterinario/Default.html"><img src="../imagens/Logo_IntegraVET.png" alt="Logo escrito IntegraVet"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="Default.html">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="SaibaMais.html">Saiba Mais</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="EncontrarBolsa.php">Encontrar Bolsas</a>
                                    </li>
                                </ul>
                                <ul class="navbar-nav sair" aling="text-rigt">
                                    <li class="nav-item">
                                        <a class="nav-link active sair" aria-current="page" href="logout.php">Sair</a>
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
                <div class="col-12 mb-3">
                    <h1>IntegraVET</h1>
                </div>
                <div class="col-12 mb-4">
                    <h3>Integração e Incentivo a Doação Sanguínea para Cães e Gatos.</h3>
                </div>
                <div class="col-12">
                    <span>Nosso propósito é facilitar a integração e a comunicação entre Médicos Veterinários, além de incentivar a doação de sangue para cães e gatos. 
                        Com essa iniciativa, esperamos facilitar o processo de doação e salvar vidas de nossos queridos companheiros de quatro patas de forma mais eficiente e 
                        colaborativa.</span>
                </div>
                <div class="col-12 mt-4">
                    <span>É profissional da área e gostaria de acessar os recursos? Clique em "Acessar" e cadastre-se.</span>
                </div>
                <div class="col-12 mt-3">
                    <a href="../instituicao/cadastro.html" class="button__apresentacao">Acessar</a>
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
        <div class="row">
            <div class="col-12">                
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../imagens/Frame 1.png" class="d-block w-100" alt="Eles podem salvar vidas mas depende de você!">
                        </div>
                        <div class="carousel-item">
                            <img src="../imagens/Frame 3.png" class="d-block w-100" alt="A doação de sangue em gatos dura em média somente 20 minutos.">
                        </div>
                        <div class="carousel-item">
                            <img src="../imagens/Frame 4.png" class="d-block w-100" alt="A quantidade de sangue retirada em gatos é de apenas 60ml.">                            
                        </div>
                        <div class="carousel-item">
                            <img src="../imagens/Frame 5.png" class="d-block w-100" alt="Acompanhe a saúde do seu Pet ao realizar a doação de sangue.">                            
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row titulo">
            <div class="col-12 text-center">
                <h1>Doação Salvando Vidas!</h1>
            </div>
        </div>
    </div>
  
    <div class="container">
        <div class="row campanhas">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 campanha-card">
                <figure class="campanha-card__img">
                    <img src="../imagens/campanha01.jpeg" />
                </figure>
                <div class="campanha-card__content">
                    <h3>Bartolomeu, 2 anos</h3>
                    <p>Púrpura Trombocitopênica Imune</p>
                    <div class="campanha-card__action">
                        <div class="botao col-12 text-center">
                            <a class="btn btn-primary" aria-current="page" href="SaibaMais.html">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 campanha-card">
                <figure class="campanha-card__img">
                    <img src="../imagens/campanha02.jpeg" />
                </figure>
                <div class="campanha-card__content">
                    <h3>Bento, 6 meses</h3>
                    <p>Anemia Congênita</p>
                    <div class="campanha-card__action">
                        <div class="botao col-12 text-center">
                            <a class="btn btn-primary" aria-current="page" href="SaibaMais.html">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 campanha-card">
                <figure class="campanha-card__img">
                    <img src="../imagens/campanha03.jpg" />
                </figure>
                <div class="campanha-card__content">
                    <h3>Amora, 4 anos</h3>
                    <p>Hemorragia</p>
                    <div class="campanha-card__action">
                        <div class="botao col-12 text-center">
                            <a class="btn btn-primary" aria-current="page" href="SaibaMais.html">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>