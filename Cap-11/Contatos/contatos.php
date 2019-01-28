<?php session_start();
      require "banco_contatos.php";
      require "ajudantes_contato.php";   

      $exibir_tabela = true;
      $exibir_favoritos = false;
      $tem_erros = false;
      $erros_validacao = [];


   if(tem_post()){
     
      $contato = [];
    
      if(array_key_exists('nome', $_POST) && strlen($_POST['nome'] != "")){
         
         $contato['nome'] = $_POST['nome'];
         }else{
            $tem_erros = true;
            $erros_validacao['nome'] = "O nome é obrigatório";    
         }
      

         if(array_key_exists('tel', $_POST) && strlen($_POST['tel']) > 0 ){
            if(validar_telefone($_POST['tel'])){
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

         if(array_key_exists('nascimento', $_POST) && strlen($_POST['nascimento']) > 0 ){
            if(validar_data($_POST["nascimento"])){
               $contato['nascimento'] = traduz_data_para_banco($_POST['nascimento']);
            }else{
               $tem_erros = true;
               $erros_validacao['nascimento'] = "Data inválida";
         }
         }else{
            $contato['nascimento'] = "";
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
            gravar_contato($conexao, $contato);
            header('location: contatos.php');
            die();
         }   
      

   }          
         $lista_contatos =  buscar_contatos($conexao);

      $contato = [
         'id' => 0,
         'nome' => (array_key_exists('nome', $_POST)) ? $_POST['nome']   : '',
         'tel' => (array_key_exists('tel', $_POST)) ? $_POST['tel']   : '',
         'email' => (array_key_exists('email', $_POST)) ? $_POST['email']   : '',
         'nascimento' => (array_key_exists('nascimento', $_POST)) ? traduz_data_para_banco($_POST['nascimento'])  : '',
         'descricao' => (array_key_exists('descricao', $_POST)) ? $_POST['descricao']   : '',
         'favorito' => (array_key_exists('favorito', $_POST)) ? $_POST['favorito']   : 1,
      ];

       

   require "template-contatos.php";
   
?>
