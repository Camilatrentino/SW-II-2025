<?php

$alunos = array("João" => 7, "Maria" => 8, "José" => 6, "Ana" => 9, "Carlos" => 5);
$soma = 0;

foreach ($alunos as $nome => $nota) {
    $soma += $nota;
}

echo "A média das notas é: " . $soma / count($alunos);
?>