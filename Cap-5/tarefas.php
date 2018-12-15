<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gerenciador de tarefas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>

<h1>Gerenciador de tarefas</h1>

<form action="">
    <fieldset>
        <legend>Nova Tarefa</legend>
       
        <label for="">Tarefa
            <input type="text" name="nome">
        </label>
       
            <input type="submit" value="Cadastrar">
     </fieldset>
</form>

<?php

    if(array_key_exists('nome',$_GET)){
        $_SESSION['lista_tarefas'][] = $_GET['nome'];
    }

    $lista_tarefas = [];

    if(array_key_exists('lista_tarefas', $_SESSION)){
        $lista_tarefas = $_SESSION['lista_tarefas'];
    }
?>

<table>
    <tr>
        <th>Tarefas</th>
    </tr>

    <?php foreach($lista_tarefas as $tarefa) : ?>

    <tr>
        <td><?php echo $tarefa ?></td>
    </tr>
 
    <?php endforeach?>
</table>
    
</body>
</html>

<!--Parei na página 67 ítem 5.6 desafio 1 -->