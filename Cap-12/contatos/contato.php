<?php
 
 require "config.php";
 include "banco_contatos.php";
 include "ajudantes_contato.php";

 $tem_erros = false;
 $erros_validacao = [];

 if(tem_post()){
     // upload dos anexos
     $contato_id = $_POST['contato_id'];

     if(!array_key_exists('anexo', $_FILES)){
         $tem_erros =true;
         $erros_validacao['anexo'] = "Selecione uma foto para anexar";
     }else{
         if(tratar_anexo($_FILES['anexo'])){
            
            $nome = $_FILES['anexo']['name'];
            $anexo = [
                'contato_id' => $contato_id,
                'nome' => substr($nome, 0, -4),
                'arquivo' => $nome,
            ];

         }else{
             
            $tem_erros = true;
            $erros_validacao['anexo'] = "Envie fotos no formato JPEG ou JPG";
         }
     }

     if(!$tem_erros){
         gravar_anexo($conexao, $anexo);
     }
 }

 $contato = buscar_contato($conexao, $_GET['id']);
 $anexos = buscar_anexos($conexao, $_GET['id']);
 include 'template_contato.php';
?>