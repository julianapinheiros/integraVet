<?php

    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        include_once('C:\xampp\htdocs\integraVet\app\config.php');

        $sql = "DELETE FROM cad_bolsa 
                WHERE id = '$id'";
            
        $result = $mysql->query($sql);
        if ($result)
        {
            header('Location: Default.php');
        }
   
    }

?>