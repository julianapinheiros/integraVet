 <!DOCTYPE html>
<html>

<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>SIS IntegraVet-Login</title>
    <link href="../cssPadrao/header.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/login.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/geral.css" rel="stylesheet" type="text/css" />    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script defer="defer" src="js/slider.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <script defer="defer" src="js/instituicao.js"></script>

</head>

<body>
    <!-- Menu -->
    <div class="topnav" id="myTopnav">
        <a href="../tutores/Default.html" class="active">Home</a>
        <a href="../tutores/Contatos.php">Contatos</a>
        <a href="../tutores/SaibaMais.html">Saiba Mais</a>
        <a href="../PrincipalPadrao/Login.php" id="login">Login</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>

    <div class="container login">
        <div class="row">
            <div class="col-12">
                <form class="login-form" action="teste.php" method="POST">
                    <div class="input-group">
                        <label for="id">CRMV ou CNPJ:</label>
                        <input type="text" id="id" name="id" autocomplete="off" required>
                    </div>
                    <div class="input-group">
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" name="senha" autocomplete="off" required>
                        <span class="show-password-icon" onclick="togglePasswordVisibility()">
                            <!-- Ícone de olho fechado -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                                <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
                                <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
                                <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>
                            </svg>
                        </span>
                        <span><a href="../PrincipalPadrao/Cadastro.php" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Primeiro Acesso?</a></span>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary " value="Acessar" />
                </form>
            </div>        
    </div>
    <div class="imagem">
        <img src="../imagens/Login1.png" class="img-fluid" alt="campanha">
    </div>
</body>
</html>