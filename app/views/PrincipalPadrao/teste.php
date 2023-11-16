<?php
    
    session_start();

    if (isset($_POST['submit']) && 
       !empty($_POST['id']) && 
       !empty($_POST['senha']))
    {
        //acessa
        include_once('C:\xampp\htdocs\integraVet\app\config.php');

       //acessar login vet
        $id = $_POST['id'];
        $senha = $_POST['senha'];

        $sql = "SELECT crmv, senha_vet 
            FROM cadastroveterinario 
            WHERE crmv = '$id' 
            AND senha_vet = '$senha'";

        $result = $mysql->query($sql);

        // n achei, procura por CNPJ
        if (mysqli_num_rows($result) < 1) 
        {

            $sql = "SELECT instituicao_cnpj, instituicao_senha
            FROM instituicao_cadastro 
            WHERE instituicao_cnpj = '$id' 
            AND instituicao_senha = '$senha'";

            $result = $mysql->query($sql);

            if (mysqli_num_rows($result) < 1)
            {
                unset($_SESSION['id']);
                unset($_SESSION['senha']);
            
                //retorna login
                header('Location: Login.php');
            }
            else
            {
                $_SESSION['id'] = $id;
                $_SESSION['senha'] = $senha;
    
                header('Location: ../instituicao/Default.php');
            }

        } 
        else 
        {
            $_SESSION['id'] = $id;
            $_SESSION['senha'] = $senha;

            header('Location: ../veterinario/Default.php');
        }

    } 
    else 
    {
        //retonar para login
        header('Location: Login.php');
    }

?>