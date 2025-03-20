<?php

// Ler o arquivo JSON
$conteudo = file_get_contents("pessoas.json");

// Converter JSON para array PHP
$dados = json_decode($conteudo, true);

// Exibir os dados
print_r($dados);

?>
