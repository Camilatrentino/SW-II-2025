<?php
    function somaarray($array){
        $soma = 0;
        foreach($array as $valor){
            $soma += $valor;
        }
        return $soma;
    }

    $numeros = array(1, 2, 3, 4, 5);
    echo "A soma dos elementos do array é: " . somaarray($numeros);
?>