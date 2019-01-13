<?php
    
    require "banco_contatos.php";

    remover_contato($conexao, $_GET['id']);

    header('location: contatos.php');

    
?>
