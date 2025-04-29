<?php
// Ler o arquivo JSON existente
$conteudo = file_get_contents("pessoas.json");

// Converter JSON para array PHP
$pessoas = json_decode($conteudo, true);

// Novo produto a ser adicionado
$novoPessoas = [
    
    "nome" => "Jose Maria", 
    "idade" => 55, 
    "sexo" => "Masculino"
];

// Adicionar o novo produto ao array
$pessoas[] = $novoPessoas;

// Converter o array atualizado para JSON
$jsonAtualizado = json_encode($pessoas, JSON_PRETTY_PRINT);

// Salvar o JSON atualizado no arquivo
file_put_contents("pessoas.json", $jsonAtualizado);

?>