<?php
    session_start();

    unset($_SESSION['id']);
    unset($_SESSION['senha']);

    header('Location: ../tutores/Default.html');
?>
