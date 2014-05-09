<?php
$pacientes= file ("upload/paciente.csv");
    foreach($pacientes as $indice=>$paciente){
        if($indice == 0) continue;
        $pac = explode(";" , $paciente);
        
         echo $indice . "<br>";        
        }
?>

