<?php
    $nota1= 8;
    $nota2= 9;
    $nota3= 7;
    $media= ($nota1 + $nota2 + $nota3)/3;
    
    if($media > 5){
        $status = "Aprovado" ;
    } else {
        $status = "Reprovado" ;
    }

    echo "Nota 1: " . $nota1 . "<br>";
    echo "Nota 2: " . $nota2 . "<br>";
    echo "Nota 3: " . $nota3 . "<br><br>";

    echo "A média do aluno é: " . $media . " - " . $status .  "<br>";
?>