<?php
require 'banco.php';

buscar_tarefas($conexao);

remover_tarefa_concluida($conexao, $_GET['concluida']);

header('location: tarefas.php');



?>