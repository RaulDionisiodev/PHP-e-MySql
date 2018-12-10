
<?php  // Desafio do capítulo 3 
 
   $data = date('N');

   $sabado = ($data == 7) ? ($data + 6) - 7 : 6 - $data;
 
    echo "Hoje é dia " . date('d/m/Y N F') ."<br>"; 
    echo "Agora são " . date('ha:i:s')."<br>"; 
    echo "Faltam " . $sabado . " dias para sábado "; ?>