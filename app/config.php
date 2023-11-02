    <?php

    $hostName = 'localhost';
    $userName = 'root';
    $password = '';
    $dataBase = 'integravet';

    $mysql = new mysqli (
        $hostName, 
        $userName, 
        $password, 
        $dataBase
    );

    // Teste para verificar conexao com banco
   
    /*if ($mysql->connect_errno)
    {
        echo "!ERRO! - Ao conectar ao banco de dados :("
        . $mysqli->connect_errno;
    } else
        echo "Conectado ao banco integravet";
    */

?>