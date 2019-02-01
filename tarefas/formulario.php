<form method="POST">

    <input type="hidden" name="id" value="<?php echo $tarefa['id'];?>">
    
    <fieldset>Nova tarefa</fieldset>
    
    <label for="">Tarefa:
       <?php if($tem_erros && array_key_exists('nome', $erros_validacao)) : ?>
            <span class ="erro">
                <?php echo $erros_validacao['nome']; ?>
            </span>
        <?php endif; ?> 
             <input type="text" name="nome" value="<?php echo $tarefa['nome']; ?>"/>
    </label>

    <label for="">Descrição: (Opcional)
        <textarea name="descricao"><?php echo $tarefa['descricao']; ?></textarea>
    </label>

    <label for="">
        Prazo (Opcional)
        <?php if($tem_erros  && array_key_exists('prazo', $erros_validacao) ) :?>
        
            <span class="erro">
                <?php echo $erros_validacao['prazo'];?>
            </span>
        
        <?php endif;?>

            <input type="text" name="prazo" value="<?php echo traduz_data_para_exibir($tarefa['prazo']); ?>">
    </label>
    
    <fieldset>
        <legend>Prioridade</legend>
        
        <label for="">
                <input type="radio" name="prioridade" id="" value="1" <?php echo ($tarefa['prioridade'] == 1) ? 'checked' : ''; ?>/>
                    Baixa
                <input type="radio" name="prioridade" id="" value="2" <?php echo ($tarefa['prioridade'] == 2) ? 'checked' : ''; ?>/>
                    Média
                <input type="radio" name="prioridade" id="" value="3" <?php echo ($tarefa['prioridade'] == 3) ? 'checked' : ''; ?>/>
                    Alta
            </label>
    
    </fieldset>

    <label for="">
        Tarefa concluída:
        <input type="checkbox" name="concluida" value="1" <?php echo ($tarefa['concluida'] == 1) ? 'checked' : ''; ?>>
    </label>

    <label for="">
        Lembrete por email:
        <input type="checkbox" name="lembrete" value="1">
    </label>
        
        <input type="submit" value="<?php echo $tarefa['id']>0 ? 'Atualizar' : 'Cadastrar'; ?>">

</form>

