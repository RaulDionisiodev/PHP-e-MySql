<form action="">

    <input type="hidden" name="id" value="<?php echo $contato['id'];?>">

    <fieldset>
        <legend>Novo contato</legend>
       
        <label for="">Nome
            <input type="text" name="nome" value="<?php echo $contato['nome'];?>">
        </label>

        
        <label for="">Telefone
            <input type="text" name="tel" value="<?php echo $contato['tel'];?>">
        </label>

        
        <label for="">Email
            <input type="email" name="email" value="<?php echo $contato['email'];?>">
        </label>

        
        <label for="">Data de nascimento
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

