<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista telefonica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>

<h1>Gerenciador de tarefas</h1>

<form action="">
    <fieldset>
        <legend>Novo contato</legend>
       
        <label for="">Nome
            <input type="text" name="nome">
        </label>

        
        <label for="">Telefone
            <input type="text" name="tel">
        </label>

        
        <label for="">Email
            <input type="email" name="email">
        </label>
       
            <input type="submit" value="Cadastrar">
     </fieldset>
</form>

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



   
?>

<table>
    <tr>
        <th>Tarefas</th>
    </tr>
    <?php  if (isset($_COOKIE['cookie'])) : ?>
    <?php foreach( $_COOKIE['cookie'] as  $nome => $valor) : ?>

    <tr>
        <td><?php echo $valor ?></td>
    </tr>
 
    <?php endforeach?>
    <?php endif?>
</table>
    
</body>
</html>