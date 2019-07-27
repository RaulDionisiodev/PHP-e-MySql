<?php

require 'config.php';
require 'banco.php';
require "Classes/RepositorioTarefas.php";
require "Classes/Anexos.php";

$repositorio_tarefas = new RepositorioTarefas($conexao);
$anexo = $repositorio_tarefas->buscar_anexo($_GET['id']);
$repositorio_tarefas->remover_anexo($anexo->getId());


unlink('anexos/'.$anexo->getArquivo());

header('location: tarefa.php?id='.$anexo->getTarefaId());




?>