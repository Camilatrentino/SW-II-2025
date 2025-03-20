<?php

// Ler o arquivo JSON existente
$conteudo = file_get_contents("pessoas.json");

// Converter JSON para array PHP
$pessoas = json_decode($conteudo, true);

// Nome do produto a ser removido (pode ser passado via GET)
$nomeRemover = isset($_GET['nome']) ? $_GET['nome'] : "Flavia";

// Filtrar produtos, removendo o que tem o nome especificado
$pessoasFiltrados = array_filter($pessoas, function ($pessoas) use ($nomeRemover) {
    return $pessoas["nome"] !== $nomeRemover;
});

// Reindexar o array
$pessoasFiltrados = array_values($pessoasFiltrados);

// Converter o array atualizado para JSON
$jsonAtualizado = json_encode($pessoasFiltrados, JSON_PRETTY_PRINT);

// Salvar o JSON atualizado no arquivo
file_put_contents("pessoas.json", $jsonAtualizado);

?>