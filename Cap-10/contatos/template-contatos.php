<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista Telefônica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <h1>Lista de Contatos</h1>

        <?php require "formulario_contatos.php"; ?>
    

    <?php if($exibir_tabela) : ?>

        <?php require "tabela_contatos.php"; ?>
    <?php endif; ?> 
        
</body>
</html>