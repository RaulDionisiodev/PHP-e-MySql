<h1>Contato: <strong><?php echo $contato['nome'] ?></strong></h1>

<?php if(isset($anexo['arquivo'])) : ?>    
    <img src="anexos/<?php echo $anexo['arquivo']; ?>" width="150px">
<?php endif; ?>


<p>
    <strong>Telefone</strong>
    <?php echo $contato['tel'] ?>
</p>

<p>
    <strong>Email: </strong>       
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

<?php if (count($anexos) > 0) : ?>
    <p>
        <?php echo $anexos['arquivo'] ?>
    </p>
<?php endif ?>
       
<p>Tenha um bom dia!</p>








