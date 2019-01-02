<?php

$bdServidor = '127.0.0.1';
$bdUsuario = 'sistemacontatos';
$bdSenha = 'sistema2';
$bdBanco = 'contatos';


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

// criei a função gravar contato. Falta usar a função no contatos.php e depois criar o arquivo ajudandtes_contatos.php
?>