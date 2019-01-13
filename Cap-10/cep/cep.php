<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Validação de CEP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>


<body>
    
<?php
        $erro = false;
        $mensagem_acerto = "CEP Válido";
        $mensagem_erro = "CEP Inválido";

        array_key_exists('cep', $_POST) ? $cep = $_POST['cep'] : $cep = '';
        
        function validar_cep($cep){
            $padrao = '/^[0-9]{5}-[0-9]{3}$/';
            $resultado = preg_match($padrao, $cep);

            if($resultado){
                return true;
            }else{
                $erro = true; 
                return false;}

            }
        
    ?>  

    <form action="" method="post">
        <label for="">
           
            Insira seu cep:
            <input type="text" name="cep">
        </label>

        <input type="submit" value=" Validar">

        <?php if ($cep != ''){
               if (validar_cep($cep)) { 
                   echo $mensagem_acerto; 
                }else{ 
                    echo $mensagem_erro;}
            } ?>

    </form>  

</body>
</html>