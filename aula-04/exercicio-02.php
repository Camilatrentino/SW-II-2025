<?php
    $numeros = [0,1,2,3,4,5,6,7,8,9];
    $soma = 0;
    for ($i=0; $i < 9; $i++) { 
        $soma += $numeros[$i];
    }

    echo "A soma é: $soma";
?>