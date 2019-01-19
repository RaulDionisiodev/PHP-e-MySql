<form method = "POST">

    <input type="hidden" name="id" value="<?php echo $contato['id'];?>">

    <fieldset>
        <legend>Novo contato</legend>
       
        <label for="">Nome (Obrigatório):
            <?php if($tem_erros && array_key_exists('nome', $erros_validacao)) : ?>
                <span><?php echo $erros_validacao['nome']; ?></span>
             <?php endif; ?>    
            <input type="text" name="nome" value="<?php echo $contato['nome'];?>">
        </label>

        
        <label for="">Telefone
            <?php if($tem_erros && array_key_exists('tel', $erros_validacao)) : ?>
                <span><?php echo $erros_validacao['tel']; ?></span>
            <?php endif; ?>    
            
            <input type="text" name="tel" placeholder = "(xx)xxxx-xxxx" value="<?php echo $contato['tel'];?>">
        </label>

        
        <label for="">Email

            <?php if($tem_erros && array_key_exists('email', $erros_validacao)) : ?>
                <span><?php echo $erros_validacao['email']; ?></span>
            <?php endif; ?>   

            <input type="email" name="email"  value="<?php echo $contato['email'];?>">
        </label>

        
        <label for="">Data de nascimento
            <?php if($tem_erros && array_key_exists('nascimento', $erros_validacao)) : ?>
                <span><?php echo $erros_validacao['nascimento']; ?></span>
            <?php endif; ?>    
            
                <input type="text" name="nascimento" value="<?php echo traduz_data_para_exibir($contato['nascimento']);?>">
        </label>

        <label for="">Descrição
            <textarea name="descricao"><?php echo $contato['descricao'];?></textarea>
        </label>

        <label for="">Contato favorito:
           <input type="checkbox" name="favorito" value="Sim" <?php echo ($contato['favorito'] == 1) ? 'checked' : '';?>>
        </label>
       
            <input type="submit" value="<?php echo $contato['id']>0 ? 'Atualizar' : 'Cadastrar'; ?>">
     </fieldset>
        <?php if(!$exibir_favoritos) {  
            echo   "<a href='mostrar_favorito.php'>Mostrar Contatos favoritos</a>";
        }else{

            echo "<a href='contatos.php'>voltar</a>";

        }
        ?>
</form>

