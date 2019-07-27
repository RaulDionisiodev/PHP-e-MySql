<?php
    require 'config.php';
    require "banco.php";
    require "Classes/RepositorioTarefas.php";

    $repositorio_tarefas = new RepositorioTarefas($conexao);
    $repositorio_tarefas->remover($_GET['id']);

    header('location: tarefas.php');
?>  