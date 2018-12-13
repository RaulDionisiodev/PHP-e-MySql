<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calendário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
       .red{color:red;}
    
    </style>
    
</head>
<body>

        <?php

        if (date("G") <= 12 ){
            echo "<h1>Bom dia</h1>";
        } elseif (date("G") <= 18){
            echo "<h1>Boa tarde</h1>";

        }else{
            echo "<h1>Boa noite</h1>";
        }
        $hoje = date('d/m/y');

        echo "<h2><b>{$hoje}</b></h2>";


        function linha ($semana){
            $linha = '<tr>';
            
            for($i = 0; $i <=6; $i++){
                if(array_key_exists($i,$semana) && $i == 0){
                    $linha .= "<td class = red>{$semana[$i]}</td>";  
                }else if(array_key_exists($i,$semana) && $i == 6){
                    $linha .= "<td><b>{$semana[$i]}</b></td>";  
                }else    
                  if(array_key_exists($i,$semana)){
                     $linha .= "<td>{$semana[$i]}</td>";}
                     else{
                     $linha .= "<td></td>";
                }
            }
            
            $linha .= '<tr>';
            
            return $linha;
        }
  
                 

        function calendario($total_dias){
            $calendario = "";
            $dia = 1;
            $semana = [];
            static $contador = 0;
                   
                 
                if ($contador > 1){
                    for($y=0; $y <= ($contador - 1); $y++){
                    array_push($semana, " ");
                    }
                }
           
                while($dia <= $total_dias){
                    array_push($semana,$dia);

                    if(count ($semana) == 7){
                        $calendario .=linha($semana);
                        $semana = [];
                    } else {
                        $contador = count($semana);
                        
                    }

                    $dia++;
                }
                    
                    $calendario .=linha($semana);  
                    //echo $contador;
                    
                   

                    return $calendario;     
            }
        
        ?>

        <?php
          function criaMes(){ 
          Echo  "<table border='1'>
        
            <tr>
                            
                <th class = red>Dom</th>
                <th>Seg</th>
                <th>Ter</th>
                <th>Qua</th>
                <th>Qui</th>
                <th>Sex</th>
                <th><b>Sab</b></th>

            <tr>";
             
           
        }
        ?>


        <?php

         $mes = new DateTime('01-01-2018');
       
         for($x=0; $x <= 11 ; $x++){
             
             echo criaMes();
             if($x == 3 || $x == 5 || $x == 8 || $x == 10 ){
                echo calendario(30);
             }else if($x == 1) {
                echo calendario(28);
             }else{
                 echo calendario(31);
             }
                 
             echo $mes -> format('F');
             $mes -> modify('+ 1 month'); 
         }
        
        
        ?>
        
</body>
</html>
