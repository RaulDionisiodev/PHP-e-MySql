<?php
session_start();

require 'config.php';
include 'banco.php';

if(array_key_exists('usuario', $_POST) && strlen($_POST['usuario'])){
  
    $_SESSION['usuario'] = $_POST['usuario'];
    
}

if(array_key_exists('senha', $_POST) && strlen($_POST['senha'])){
  
    $_SESSION['senha'] = $_POST['senha'];
    
}

if(array_key_exists('usuario', $_SESSION) && array_key_exists('senha', $_SESSION)){
    
    header('location:tarefas.php');
    
}


?>

<h1>Agendador de Tarefas</h1>

<form action="login.php" method="post">

    <label for="">Usuário:
        <input type="text" name='usuario'>
    </label>

    <label for=""> Senha:
        <input type="password" name="senha">
    </label>

    <input type="submit" value='Entrar'>

</form>

