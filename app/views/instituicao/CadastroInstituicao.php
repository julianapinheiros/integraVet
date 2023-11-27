<?php
    session_start();

    $logado = $_SESSION['id'];

    if (isset($_POST['edit']))
    {
        include_once('C:\xampp\htdocs\integraVet\app\config.php');

        $instituicao_cnpj = $_POST['instituicao_cnpj'];
        $nome_instituicao = $_POST['nome_instituicao'];
        $email_instituicao = $_POST['email_instituicao'];
        $telefone = $_POST['telefone'];
        $senha_instituicao = $_POST['senha_instituicao'];
        $cep = $_POST['cep'];
        $logradouro = $_POST['logradouro'];
        $bairro = $_POST['bairro'];
        $localidade = $_POST['localidade'];
        $uf = $_POST['uf'];
        $trabalhamos_com = $_POST['trabalhamos_com'];

        $result = mysqli_query($mysql,
            "UPDATE instituicao_cadastro
                SET instituicao_cnpj = '$instituicao_cnpj',
                instituicao_nome = '$nome_instituicao',
                instituicao_email = '$email_instituicao', 
                telefone = '$telefone',
                instituicao_senha = '$senha_instituicao',
                cep = '$cep',
                logradouro = '$logradouro',
                bairro = '$bairro',
                localidade = '$localidade',
                uf = '$uf',
                trabalhamos_com = '$trabalhamos_com'
                WHERE instituicao_cnpj = '$instituicao_cnpj'"
            );

        if ($result) 
        {
            header('Location: Default.php');
        } 
        else 
        {
            echo "ERRO AO SALVAR OS DADOS - POR FAVOR CONTATE O SUPORTE";
        }
       
    }
?>


