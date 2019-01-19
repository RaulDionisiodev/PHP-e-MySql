<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Validação de CPF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>


<body>
    
<?php
        $erro = false;
        $mensagem_acerto = "CPF Válido";
        $mensagem_erro = "CPF Inválido";

        array_key_exists('CPF', $_POST) ? $CPF = $_POST['CPF'] : $CPF = '';
        
        function validar_CPF($CPF){
            $padrao = '/^[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$/';
            $resultado = preg_match($padrao, $CPF);

            if($resultado){
                return true;
            }else{
                $erro = true; 
                return false;}

            }
        
    ?>  

    <form action="" method="post">
        <label for="">
           
            Insira seu CPF:
            <input type="text" name="CPF">
        </label>

        <input type="submit" value=" Validar">

        <?php if ($CPF != ''){
               if (validar_CPF($CPF)) { 
                   echo $mensagem_acerto; 
                }else{ 
                    echo $mensagem_erro;}
            } ?>

    </form>  

</body>
</html>