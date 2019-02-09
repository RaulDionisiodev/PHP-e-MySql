<?php

    session_start();
    require "config.php";
    require "banco_contatos.php";
    require "ajudantes_contato.php";  
    
    $exibir_tabela = true;
    $exibir_favoritos = true;
    $tem_erros = false;


    if(array_key_exists('nome', $_GET) && $_GET['nome'] != ""){
      
        $contato = [];
       
        $contato['nome'] = $_GET['nome'];
     
 
       if(array_key_exists('tel', $_GET)){
          $contato['tel'] = $_GET['tel'];
       }else{
          $contato['tel'] = "";
       }
 
       if(array_key_exists('email', $_GET)){
          $contato['email'] = $_GET['email'];
       }else{
          $contato['email'] = "";
       }
 
       if(array_key_exists('nascimento', $_GET)){
          $contato['nascimento'] = traduz_data_para_banco($_GET['nascimento']);
       }else{
          $contato['nascimento'] = "";
       }
 
       if(array_key_exists('descricao', $_GET)){
          $contato['descricao'] = $_GET['descricao'];
       }else{
          $contato['descricao'] = "";
       }
 
       if(array_key_exists('favorito', $_GET)){
          $contato['favorito'] = 1;
       }else{
          $contato['favorito'] = 0;
       }
 
       gravar_contato($conexao, $contato);
       header('location: contatos.php');
       die();
 
    }

    $contato = [
        'id' => 0,
        'nome' => '',
        'tel' => '',
        'email' => '',
        'nascimento' => '',
        'descricao' => '',
        'favorito' => 1

         
     ];

  $lista_contatos = mostrar_favoritos($conexao);
 


  
  require "template-contatos.php";

    
?>
