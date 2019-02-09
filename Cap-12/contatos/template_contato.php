<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agenda telefônica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>

    <div class="bloco_principal">
        <?php if(isset($anexo['arquivo'])) : ?>    
            <img src="anexos/<?php echo $anexo['arquivo']; ?>" width="150px">
        <?php endif; ?>

        <h1>Contato: <?php echo $contato['nome']; ?></h1>

        <p>
            <a href="contatos.php">Voltar para a lista de contatos</a>
        </p>

        <p>
            <strong>Telefone:</strong>
            <?php echo $contato['tel'];?>

        </p>

        <p>
            <strong>Email:</strong>
            <?php echo $contato['email'];?>
            
        </p>

        <p>
            <strong>Data de nascimento:</strong>
            <?php echo  traduz_data_para_exibir($contato['nascimento']);?>
            
        </p>

        <p>
            <strong>Descrição:</strong>
            <?php echo $contato['descricao'];?>
            
        </p>

        <p>
            <strong>Contato Favorito:</strong>
            <?php echo traduz_favorito($contato['favorito']);?>
            
        </p>
            
        <h2>Anexos</h2>

        <!-- Lista de anexos -->

        

            <?php if(count($anexos) > 0) : ?>
                <table>
                    <tr>
                        <th>Foto</th>
                        <th>Opções</th>
                    </tr>

                    <?php foreach($anexos as $anexo) : ?>

                        <tr>
                            <td><?php echo $anexo['nome']; ?></td>
                            <td>
                                <a href="anexos/<?php echo $anexo['arquivo']; ?>">Download</a>
                            </td>
                            <td>
                                <a href="remover_anexo.php?id=<?php echo $anexo['id']; ?>">Remover</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>               
                 
                </table>
            <?php else : ?>

                <p>Não há fotos para esse contato</p>
            <?php endif; ?>
                   
        <!-- Formulário para um novo anexo -->

        <form method="post" enctype="multipart/form-data">

            <fieldset>
                <legend>Nova foto</legend>

                <input type="hidden" name="contato_id" value="<?php echo $contato['id'];?>">

                <label>
                
                    <?php if($tem_erros && array_key_exists('anexo', $erros_validacao)) : ?>
                        <span><?php $erros_validacao['anexo']; ?></span>
                    <?php endif; ?>

                    <input type="file" name="anexo">

                </label>

                <input type="submit" value="Cadastrar">
            </fieldset>
        </form>
    </div>


</body>
</html>