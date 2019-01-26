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

    <h1>Gerenciador de tarefas</h1>

    <?php require "formulario.php"; ?>

    <?php if ($exibir_tabela): ?>
        <?php require "tabela.php"; ?>
    <?php endif; ?>

</body>

</html>