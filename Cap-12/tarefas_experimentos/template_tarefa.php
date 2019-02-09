<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gerenciador de tarefas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="tarefas.css" />
</head>
<body>

    <div class="bloco_principal">

        <H1>Tarefa: <?php echo $tarefa["nome"]; ?></H1>

        <p>
            <a href="tarefas.php">Voltar para a lista de tarefas</a>
        </p>

        <p>
            <strong>Concluída:</strong>
            <?php echo traduz_concluida($tarefa['concluida']);?>
        </p>
        
        <p>
            <strong>Descrição:</strong>
            <?php echo nl2br($tarefa['descricao']);?>
        </p>

        <p>
            <strong>Prazo:</strong>
            <?php echo traduz_data_para_exibir($tarefa['prazo']);?>
        </p>

        <p>
            <strong>Prioridade:</strong>
            <?php echo traduz_prioridade($tarefa['prioridade']);?>
        </p>
         
         

        <h2>Anexos</h2>
           
        <!-- lista de anexos -->
            <?php if (count($anexos) > 0) : ?>
                <table>
                    <tr>
                        <th>Arquivo</th>
                        <th>Opções</th>
                    </tr>

                    <?php foreach ($anexos as $anexo) : ?>

                        <tr>
                            <td><?php echo $anexo['nome'];?></td>
                            <td>
                                <a href="anexos/<?php echo $anexo['arquivo'];?>">Download</a>
                                <a href="remover_anexo.php?id=<?php echo $anexo['id'];?>">Remover</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            
            <?php else :?>
                <p>Não há anexos para esta tarefa</p>
            <?php endif; ?>    


        <!-- formulário para um novo anexo -->

        <form action="" method="post" enctype="multipart/form-data">

            <fieldset>

                <legend>Novo Anexo</legend>

                <input type="hidden" name="tarefa_id" value="<?php echo $tarefa['id'];?>">

                <label for="">
                
                    <?php if($tem_erros && array_key_exists('anexo', $erros_validacao) ): ?>

                        <span class="erro">
                            <?php echo $erros_validacao['anexo'];?>
                        </span>
                    <?php endif ?>

                </label>

                <input type="file" name="anexo">

                <input type="submit" value="Cadastrar">

            </fieldset>
        
        
        </form>

    </div>
    
</body>
</html>