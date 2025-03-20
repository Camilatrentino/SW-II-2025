<?php

// Ler o arquivo JSON existente
$conteudo = file_get_contents("pessoas.json");

// Converter JSON para array PHP
$pessoas = json_decode($conteudo, true);

// Nome a ser buscado (pode ser passado via GET)
$nomeBuscado = isset($_GET['nome']) ? $_GET['nome'] : "Camila";

// Buscar pessoa pelo nome
$pessoaEncontrada = null;
foreach ($pessoas as $pessoa) {
    if ($pessoa["nome"] === $nomeBuscado) {
        $pessoaEncontrada = $pessoa;
        break;
    }
}

// Exibir o resultado
if ($pessoaEncontrada) {
    echo "Pessoa encontrada:\n";
    print_r($pessoaEncontrada);
} else {
    echo "Pessoa não encontrada.";
}

?>