<?php
   require 'banco.php';

    $tarefa = buscar_tarefa($conexao, $_GET['id']);

    gravar_tarefa($conexao, $tarefa);

    header('location: tarefas.php');


?>