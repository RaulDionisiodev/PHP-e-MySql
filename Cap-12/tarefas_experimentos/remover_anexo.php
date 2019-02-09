<?php session_start();

if(!isset($_SESSION['usuario']) || !isset($_SESSION['senha'])){
    header('location:login.php');
}

require 'config.php';
include 'banco.php';

$anexo = buscar_anexo($conexao, $_GET['id']);

remover_anexo($conexao, $anexo['id']);
unlink('anexos/'.$anexo['arquivo']);

header('location: tarefa.php?id='.$anexo['tarefa_id']);




?>