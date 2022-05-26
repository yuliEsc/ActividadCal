<?php
$Valor1= $_GET['Valor_1'];
$Valor2= $_GET['Valor_2'];
$Operacion=$_GET['operacion'];
$resultado=0;

if ($Operacion=='Suma'){
    $resultado= $Valor1+$Valor2;
        
    }
elseif ($Operacion=='Resta') {
        $resultado= $Valor1-$Valor2;
        
    }
else if ($Operacion=='División'){
    $resultado= $Valor1/$Valor2;
        
    }
else{
    $resultado=$Valor1*$Valor2;
    } 
    
echo 'El resultado es:', $resultado;

?>