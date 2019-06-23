<form method="POST">

    <input type="hidden" name="id" value="<?php echo $tarefa->getId();?>">

    
    <fieldset>Nova tarefa</fieldset>
    
    <label for="">Tarefa:
       <?php if($tem_erros && isset($erros_validacao['nome'])) : ?>
            <span class ="erro">
                <?php echo $erros_validacao['nome']; ?>
            </span>
        <?php endif; ?> 
             <input type="text" name="nome" value="<?php echo $tarefa->getNome(); ?>"/>
    </label>

    <label for="">Descrição: (Opcional)
        <textarea name="descricao"><?php echo $tarefa->getDescricao(); ?></textarea>
    </label>

    <label for="">
        Prazo (Opcional)
        <?php if($tem_erros  && isset($erros_validacao['prazo']) ) :?>
        
            <span class="erro">
                <?php echo $erros_validacao['prazo'];?>
            </span>
        
        <?php endif;?>

            <input type="text" name="prazo" value="<?php echo traduz_data_para_exibir($tarefa->getPrazo()); ?>">
    </label>
    
    <fieldset>
        <legend>Prioridade</legend>
        
        <label for="">
                <input type="radio" name="prioridade" id="" value="1" <?php echo ($tarefa->getPrioridade() == 1) ? 'checked' : ''; ?>/>
                    Baixa
                <input type="radio" name="prioridade" id="" value="2" <?php echo ($tarefa->getPrioridade() == 2) ? 'checked' : ''; ?>/>
                    Média
                <input type="radio" name="prioridade" id="" value="3" <?php echo ($tarefa->getPrioridade() == 3) ? 'checked' : ''; ?>/>
                    Alta
            </label>
    
    </fieldset>

    <label for="">
        Tarefa concluída:
        <input type="checkbox" name="concluida" value="1" <?php echo ($tarefa->getConcluida() == 1) ? 'checked' : ''; ?>>
    </label>

    <label for="">
        Lembrete por email:
        <input type="checkbox" name="lembrete" value="1">
    </label>
        
        <input type="submit" value="<?php echo $tarefa->getId() > 0 ? 'Atualizar' : 'Cadastrar'; ?>" class="botao">

</form>

