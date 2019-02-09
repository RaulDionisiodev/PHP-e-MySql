<?php
require "config.php";
include 'banco_contatos.php';

$anexo = buscar_anexo($conexao, $_GET['id']);
remover_anexo($conexao, $anexo['id']);
unlink('anexos/'.$anexo['arquivo']);


header('Location: contato.php?id='.$anexo['contato_id']);
?>