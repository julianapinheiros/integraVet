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
    <link href="../cssPadrao/Perfil.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/cadastro.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/header.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/geral.css" rel="stylesheet" type="text/css" />
    <link href="../cssPadrao/rodape.css" rel="stylesheet" type="text/css" /> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
    
    <div class="container">
        <div class="row titulo">
            <div class="col-12 text-center">
                <h1>Editar Perfil</h1>
            </div>
        </div>
    </div>

    <?php
        if (isset($_SESSION['id'])) 
        {
            $id = $_SESSION['id'];
            include_once('C:\xampp\htdocs\integraVet\app\config.php');

            $sql = "SELECT * FROM instituicao_cadastro 
                    WHERE instituicao_cnpj = '$id'";
            
            $result = $mysql->query($sql);
            $row = mysqli_fetch_array($result);

        ?>
            <div class="container">
                <div id="formVeterinario" class="form-container mt-4">
                    <form action="CadastroInstituicao.php" method="POST">
                        <div class="row mt-2">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="input-field-group">
                                <label for="instituicao_cnpj">CNPJ</label>
                                <input type="text" id="instituicao_cnpj" name="instituicao_cnpj" autocomplete="off" class="form-control" pattern="[0-9]{2}.[0-9]{3}.[0-9]{3}/[0-9]{4}-[0-9]{2}" placeholder="00.000.000/0000-00" value= <?php echo $row['instituicao_cnpj']; ?> required>
                                </div>
                            </div>                    
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="input-field-group">
                                    <label for="nome_instituicao">Nome Instituição</label>
                                    <input type="text" id="nome_instituicao" name="nome_instituicao" autocomplete="off" class="form-control"  value= <?php echo $row['instituicao_nome']; ?> required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 input-field-group">
                                <label for="email_instituicao">Email</label>
                                <input type="email_instituicao" id="email_instituicao" name="email_instituicao" autocomplete="off" class="form-control"  value= <?php echo $row['instituicao_email']; ?> required>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 col-xl-4 input-field-group">
                                <label for="telefone">Telefone:</label>
                                <input type="tel" id="telefone" name="telefone" pattern="[0-9]{2}[0-9]{4,5}-[0-9]{4}" placeholder="0000000-0000" class="form-control"  value= <?php echo $row['telefone']; ?> required>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7 col-xl-3 input-field-group">
                                <label for="senha_instituicao">Senha</label>
                                <input type="text" id="senha_instituicao" name="senha_instituicao" autocomplete="off" class="form-control"  value= <?php echo $row['instituicao_senha']; ?> required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-5 col-xl-5">
                                <div class="input-field-group">
                                    <label for="cep" >CEP</label>
                                    <input type="text" name="cep" id="cep" placeholder="00000-000" class="form-control"  value= <?php echo $row['cep']; ?> required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 mt-3">
                                <div class="input-field-group">
                                    <label for="logradouro" >Endereço</label>
                                    <input type="text" id="logradouro" name="logradouro" class="form-control"  value= <?php echo $row['logradouro']; ?> required>
                                </div>  
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3">
                                <div class="input-field-group">
                                    <label for="numero" >Número</label>
                                    <input type="text" id="numero" name="numero" class="form-control" value= <?php echo $row['numero']; ?> required>
                                </div>                                    
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="input-field-group">
                                    <label for="bairro" >Bairro</label>
                                    <input type="text" id="bairro" name="bairro" class="form-control"  value= <?php echo $row['bairro']; ?> required>
                                </div>                                                                       
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="input-field-group">
                                    <label for="localidade" >Cidade</label>
                                    <input type="text" id="localidade" name="localidade" class="form-control"  value= <?php echo $row['localidade']; ?> required>
                                </div>                                                                       
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="input-field-group">
                                    <label for="uf" >Estado</label>
                                    <input type="text" id="uf" name="uf" class="form-control"  value= <?php echo $row['uf']; ?> required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-4">
                                <label for="trabalhamos_com">Trabalhamos com:</label>
                                <select id="trabalhamos_com" name="trabalhamos_com" required>
                                    <option value="Selecione a opcao">Selecione a opção</option>
                                    <option value="Banco de sangue" <?php if($row['trabalhamos_com']=="Banco de sangue"){echo "selected";} ?>>Banco de Sangue</option>
                                    <option value="Coleta" <?php if($row['trabalhamos_com']=="Coleta"){echo "selected";} ?>>Coleta</option>
                                    <option value="Estoque de Bolsas" <?php if($row['trabalhamos_com']=="Estoque de Bolsas"){echo "selected";} ?>>Estoque de Bolsa</option>
                                    <option value="Transfusão" <?php if($row['trabalhamos_com']=="Transfusão"){echo "selected";} ?>>Transfusão</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                        <div class="botao col-6 mt-4" style="text-align: left">
                            <a class="btn btn-secondary" aria-current="page" href="Default.php">Voltar</a>
                        </div>
                    
                        <div class="botao col-6 mt-4" style="text-align: right">
                            <input type="submit" class="btn btn-primary" aria-current="page" name='edit' value='Salvar edição'>
                        </div>  
                        </div>
                    </form>
                </div>   
            </div>

        <?php
        }
    ?>

</body>
</html>