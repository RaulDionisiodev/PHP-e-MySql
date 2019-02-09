<table>

    <tr>
        <th>Tarefas</th>
    </tr>
     <?php foreach($lista_contatos as $contato) : ?>

    <tr>
        <td>
            <a href="contato.php?id=<?php echo $contato['id'];?>">
                <?php echo  $contato['nome']; ?>
            </a>
        </td>
        <td><?php echo  $contato['tel']; ?></td>
        <td><?php echo  $contato['email']; ?></td>
        <td><?php echo  traduz_data_para_exibir($contato['nascimento']); ?></td>
        <td><?php echo  $contato['descricao']; ?></td>
        <td><?php echo  traduz_favorito($contato['favorito']); ?></td>
        <td>
            <a href="editar_contato.php?id=<?php echo $contato['id'];?>">Editar</a>
            <a href="remover_contato.php?id=<?php echo $contato['id'];?>">Remover</a>
        </td>    
    </tr>
 
    <?php endforeach?>

   
</table>