<?php

function traduz_data_para_banco($data){

    if($data == ""){
        return "";
    }

    $partes = explode('/', $data);

    if(count($partes) != 3){
        return $data;
    }

   
    $objeto_data = DateTime :: createFromFormat ('d/m/Y', $data);

    return $objeto_data -> format('Y-m-d');

}

function traduz_data_para_exibir($data){

    if($data == "" OR $data == "0000-00-00" ){
        return "";
    }

    $partes = explode('-', $data);

    if(count($partes) != 3){
        return $data;
    }

    $objeto_data = DateTime :: createFromFormat ('Y-m-d', $data);
    return $objeto_data -> format('d/m/Y');

}

function traduz_favorito($favorito){

    if($favorito == 1){
        return 'Sim';
    }

    return 'Não';
}

function tem_post(){
    if(count($_POST) > 0){
        return true;
    }

    return false;
}

function validar_data($data){
    $padrao = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/';
    $resultado = preg_match($padrao, $data);

    if($resultado == 0 ){
        return false;
    }

    $dados = explode('/', $data);
    $dia = $dados[0];
    $mes = $dados[1];
    $ano = $dados[2];

    $resultado = checkdate($mes,$dia,$ano);

    return $resultado;
}

function validar_telefone($tel){
 
    $padrao = '/^(\([0-9]{2}\)[0-9]{4,5}\-[0-9]{4})|(\([0-9]{2}\)[0-9]{4}\-[0-9]{4})$/';
    $resultado = preg_match($padrao, $tel);

    if($resultado == 0 ){
        return false;
    }
}

function validar_email($email){

    $resultado = filter_var($email, FILTER_VALIDATE_EMAIL);

    return $resultado;

}

function tratar_anexo($anexo){
    $padrao = '/^.+(\.jpeg|\.jpg)$/';
    $resultado = preg_match($padrao, $anexo['name']);   

    if($resultado == 0){
        return false;
    }

    move_uploaded_file(
        $anexo['tmp_name'],
        "anexos/{$anexo['name']}"
    );

    return true;

}


?>