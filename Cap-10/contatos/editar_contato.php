<?php
    session_start();
    require "banco_contatos.php";
    require "ajudantes_contato.php";  
    
    $exibir_tabela = false;
    $tem_erros = false;
    $erros_validacao = [];

   
  if(tem_post()){

      $contato = [];
      $contato['id'] = $_POST["id"];

  

      if(array_key_exists('nome', $_POST) && strlen($_POST['nome'])>0){
         
         $contato['nome'] = $_POST['nome'];
         
      }else{
         $tem_erros = true;
         $erros_validacao['nome'] = "O nome do contato é obrigatório"; 
      }   
  

      if(array_key_exists('tel', $_POST) && strlen($_POST['tel']) ){
         if(validar_telefone()){
         $contato['tel'] = $_POST['tel'];
         }else{
            $erros_validacao['tel'] = "telefone inválido";
            $tem_erros = true;    
         }
      }else{
         $contato['tel'] = "";
      }

      if(array_key_exists('email', $_POST) && strlen($_POST['email']) > 0){
         if(validar_email($_POST['email'])){
            $contato['email'] = $_POST['email'];  
         } else {
            $erros_validacao['email'] = "Email inválido";
            $tem_erros = true; 
         }
      }else{
         $contato['email'] = "";
      }

      if(array_key_exists('nascimento', $_POST) && strlen($_POST['nascimento']) > 0){
         $contato['nascimento'] = traduz_data_para_banco($_POST['nascimento']);
      }else{
         $tem_erros = true;
         $erros_validacao['nascimento'] = "Data Invállida";

      }

      if(array_key_exists('descricao', $_POST)){
         $contato['descricao'] = $_POST['descricao'];
      }else{
         $contato['descricao'] = "";
      }

      if(array_key_exists('favorito', $_POST)){
         $contato['favorito'] = 1;
      }else{
         $contato['favorito'] = 0;
      }

      if(!$tem_erros){
      editar_contato($conexao, $contato);
      header('location: contatos.php');
      die();}

 }

  $contato = buscar_contato($conexao, $_GET['id']);

  $contato['nome'] = (array_key_exists('nome', $_POST)) ? $_POST['nome'] : $contato['nome'];
  $contato['tel'] = (array_key_exists('tel', $_POST)) ? $_POST['tel'] : $contato['tel'];
  $contato['email'] = (array_key_exists('email', $_POST)) ? $_POST['email'] : $contato['email'];
  $contato['nascimento'] = (array_key_exists('nascimento', $_POST)) ? $_POST['nascimento'] : $contato['nascimento'];
  $contato['descricao'] = (array_key_exists('descricao', $_POST)) ? $_POST['descricao'] : $contato['descricao'];
  $contato['favorito'] = (array_key_exists('favorito', $_POST)) ? $_POST['favorito'] : $contato['favorito']; 
  
  require "template-contatos.php";

?>