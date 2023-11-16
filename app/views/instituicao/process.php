<?php

    session_start();

    $logado = $_SESSION['id'];

    if (isset($_POST['submit']))
    {
        include_once('C:\xampp\htdocs\integraVet\app\config.php');

        $instituicao_cnpj = $_SESSION['id'];
        $bolsa_componente = $_POST['componente'];
        $bolsa_quantidade = $_POST['quantidade'];
        $bolsa_animal = $_POST['animal'];

        $result = mysqli_query($mysql,
                "INSERT INTO cad_bolsa
                (
                  instituicao_cnpj,
                  bolsa_componente,
                  bolsa_quantidade,
                  bolsa_animal  
                ) VALUES (
                  '$instituicao_cnpj',
                  '$bolsa_componente',
                  '$bolsa_quantidade',
                  '$bolsa_animal'
                )"
            );
        
            if ($result) 
            {
                header('Location: Default.php');
            } 
            else 
            {
                echo "vou me matar";
            }
    }

    if (isset($_POST['edit']))
    {
        include_once('C:\xampp\htdocs\integraVet\app\config.php');

        $bolsa_componente = $_POST['componente'];
        $bolsa_quantidade = $_POST['quantidade'];
        $bolsa_animal = $_POST['animal'];
        $id = $_POST['id'];

        $result = mysqli_query($mysql,
                "UPDATE cad_bolsa
                    SET bolsa_componente = '$bolsa_componente', 
                    bolsa_quantidade = '$bolsa_quantidade',
                    bolsa_animal = '$bolsa_animal'
                    WHERE id = $id"
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