<?php

$bdServidor = ''; //Inserir servidor entre as aspas
$bdUsuario = ''; // inserir usuário entre as aspas
$bdSenha = ''; //inserir a senha entre as aspas
$bdBanco = ''; // inserir nome do banco entre as aspas


$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

mysqli_set_charset($conexao, "utf8");

if(mysqli_connect_errno($conexao)){
    echo "Problemas para conectar no banco. Erro: ";
    echo mysqli_connect_error();
    die();
}


function buscar_contatos($conexao){

    $sqlBusca = 'SELECT * FROM contatos';
    $resultado = mysqli_query($conexao, $sqlBusca);

    $contatos = [];

    while($contato = mysqli_fetch_assoc($resultado)){
        $contatos[] = $contato;
    }

    return $contatos;
}

function gravar_contato($conexao, $contato){
         $sqlGravar = "INSERT INTO contatos (nome, tel, email, nascimento, descricao, favorito)
                       VALUES ('{$contato['nome']}',
                       '{$contato['tel']}',
                       '{$contato['email']}',
                       '{$contato['nascimento']}',
                       '{$contato['descricao']}',
                        {$contato['favorito']})";

        mysqli_query($conexao, $sqlGravar);             

}


function buscar_contato($conexao, $id){
    $sqlBusca = 'SELECT * FROM contatos WHERE ID = '.$id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}

function editar_contato($conexao, $contato){
    $sqlEditar = "UPDATE contatos SET 
                nome = '{$contato['nome']}',
                tel =  '{$contato['tel']}',
                email = '{$contato['email']}',
                nascimento = '{$contato['nascimento']}',
                descricao = '{$contato['descricao']}',
                favorito = {$contato['favorito']}
                WHERE id = {$contato['id']}";

    mysqli_query($conexao, $sqlEditar);
}


function remover_contato($conexao, $id){

    $sqlRemover = "DELETE FROM contatos WHERE id = {$id}";
    mysqli_query($conexao, $sqlRemover);

}

function mostrar_favoritos($conexao){

    $sqlFavorito ="SELECT * FROM contatos WHERE favorito = 1" ;
    $resultado = mysqli_query($conexao, $sqlFavorito);
    
    $contatos = [];

    while($contato = mysqli_fetch_assoc($resultado)){
        $contatos[] = $contato;
    }

    return $contatos;

}

?>