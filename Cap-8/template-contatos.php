<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista Telefônica</title>
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

        
        <label for="">Data de nascimento
            <input type="text" name="nascimento">
        </label>

        <label for="">Descrição
            <textarea name="descricao"></textarea>
        </label>

        <label for="">Contato favorito:
           <input type="checkbox" name="favorito" value="Sim">
        </label>
       
            <input type="submit" value="Cadastrar">
     </fieldset>
</form>


<table>

    <tr>
        <th>Tarefas</th>
    </tr>
     <?php foreach($lista_contatos as $contato) : ?>

    <tr>
        <td><?php echo  $contato['nome']; ?></td>
        <td><?php echo  $contato['tel']; ?></td>
        <td><?php echo  $contato['email']; ?></td>
        <td><?php echo  traduz_data_para_exibir($contato['nascimento']); ?></td>
        <td><?php echo  $contato['descricao']; ?></td>
        <td><?php echo  traduz_favorito($contato['favorito']); ?></td>
            
    </tr>
 
    <?php endforeach?>

   
</table>
        
</body>
</html>