<?php session_start();

    if(!isset($_SESSION['usuario']) || !isset($_SESSION['senha'])){
        header('location:login.php');
    }

    require 'config.php';
    require "banco.php";

    remover_tarefa($conexao, $_GET['id']);

    header('location: tarefas.php');

    
?>  