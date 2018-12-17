
<?php

    if(array_key_exists('nome', $_GET)){
        setcookie('cookie[0]',$_GET['nome'] );
    }

    if(array_key_exists('tel', $_GET)){
        setcookie('cookie[1]',$_GET['tel'] );
    }

    if(array_key_exists('email', $_GET)){
       setcookie('cookie[2]',$_GET['email'] );
    }

    if(array_key_exists('nascimento', $_GET)){
        setcookie('cookie[3]',$_GET['nascimento'] );
     }

     if(array_key_exists('descricao', $_GET)){
        setcookie('cookie[4]',$_GET['descricao'] );
     }

     if(array_key_exists('favorito', $_GET)){
        setcookie('cookie[5]',$_GET['favorito'] );
     }


   include "template-contatos.php";
   
?>
