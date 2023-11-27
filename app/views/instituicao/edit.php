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
    <title>IntegraVet</title>
    <link href="css/cadBolsa.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/header.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/geral.css" rel="stylesheet" type="text/css" />
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
    <div class="terco-da-tela">
        <img src="../imagens/pets_cadastro.png" class="img-fluid" alt="campanha">
    </div>
    <div class="bg-light">
        <div class="container menu">
            <div class="row">
                <div class="col-12 mn">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
 
    <div class="container">
        <div class="row titulo">
            <div>
                <h1>Editar Estoque de Bolsas</h1>
            </div>
        </div>
    </div>

    <?php
        if (isset($_GET['id'])) 
        {
            $id = $_GET['id'];
            include_once('C:\xampp\htdocs\integraVet\app\config.php');

            $sql = "SELECT * FROM cad_bolsa 
                    WHERE id = '$id'";
            
            $result = $mysql->query($sql);
            $row = mysqli_fetch_array($result);

            ?>

                <div class="container cadBolsa">
                    <div class="row selecao">
                        <div class="col-12 formulario">
                            <form action="process.php" method="POST">
                                <label for="componente">Componente</label>
                                <select id="componente" name="componente" required>
                                    <option value="" selected disabled>Selecione o componente</option>                        
                                    <option value="Concentrado Hemácias" <?php if($row['bolsa_componente']=="Concentrado Hemácias"){echo "selected";} ?> >Concentrado Hemácias</option>
                                    <option value="Plaquetas" <?php if($row['bolsa_componente']=="Plaquetas"){echo "selected";} ?> >Plaquetas</option>
                                    <option value="Plasmas" <?php if($row['bolsa_componente']=="Plasmas"){echo "selected";} ?> >Plasmas</option>
                                    <option value="Sangue total" <?php if($row['bolsa_componente']=="Sangue Total"){echo "selected";} ?> >Sangue Total</option>
                                </select>

                                <label for="quantidade">Quantidade</label>
                                <input type="number" id="quantidade" name="quantidade" value= <?php echo $row['bolsa_quantidade']; ?> min="1" required>

                                <label for="animal">Animal</label>
                                <select id="animal" name="animal" required>
                                    <option value="" selected disabled>Selecione o animal</option>
                                    <option value="Gato" <?php if($row['bolsa_animal']=="Gato"){echo "selected";} ?> >Gato</option>
                                    <option value="Cachorro" <?php if($row['bolsa_animal']=="Cachorro"){echo "selected";} ?> >Cachorro</option>
                                </select>

                                <input type="hidden" name="id" value= <?php echo $row['id']; ?>>

                                <div class="botao col-12 text-center mt-4">
                                <div class="row">
                                    <div class="botao col-6 mt-4" style="text-align: left">
                                        <a class="btn btn-secondary" aria-current="page" href="Default.php">Voltar</a>
                                    </div>
                                
                                    <div class="botao col-6 mt-4" style="text-align: right">
                                        <input type="submit" class="btn btn-primary" aria-current="page" name='edit' value='Salvar edição'>
                                    </div>  
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>        
                </div>
                
            <?php
        }
    ?>
</body>
</html>