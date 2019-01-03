<?php

$bdServidor = '127.0.0.1';
$bdUsuario = 'sistematarefa';
$bdSenha = 'sistema';
$bdBanco = 'tarefas';


$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

mysqli_set_charset($conexao, "utf8");

if(mysqli_connect_errno($conexao)){
    echo "Problemas para conectar no banco. Erro: ";
    echo mysqli_connect_error();
    die();
}


function buscar_tarefas($conexao){

    $sqlBusca = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao, $sqlBusca);

    $tarefas = [];

    while($tarefa = mysqli_fetch_assoc($resultado)){
        $tarefas[] = $tarefa;
    }

    return $tarefas;
}


function gravar_tarefa($conexao, $tarefa){
    $sqlGravar = "INSERT INTO tarefas (nome, descricao, prioridade, prazo, concluida) 
                    VALUES ('{$tarefa['nome']}', 
                    '{$tarefa['descricao']}', 
                    {$tarefa['prioridade']}, 
                    '{$tarefa['prazo']}',
                    {$tarefa['concluida']})";

    mysqli_query($conexao, $sqlGravar);                
}


function buscar_tarefa($conexao, $id){
    $sqlBusca = 'SELECT * FROM tarefas WHERE ID = '.$id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}


function editar_tarefa($conexao, $tarefa){
    $sqlEditar = "UPDATE tarefas SET
                    nome = '{$tarefa['nome']}', 
                    descricao = '{$tarefa['descricao']}',
                    prioridade = {$tarefa['prioridade']},
                    prazo = '{$tarefa['prazo']}',
                    concluida = {$tarefa['concluida']}
                 WHERE id = {$tarefa['id']}";

     mysqli_query($conexao, $sqlEditar);            

}


function remover_tarefa($conexao, $id){

    $sqlRemover = "DELETE FROM tarefas WHERE id = {$id}";
    mysqli_query($conexao, $sqlRemover);

}


function remover_tarefa_concluida($conexao, $concluida ){

    $sqlRemover = "DELETE FROM tarefas WHERE concluida = 1";
    mysqli_query($conexao, $sqlRemover);

}

?>