<?php

// Passo a: Criar um array associativo com os produtos
$pessoas = [
    ["nome" => "Camila", "idade" => 17, "sexo" => "Feminino"],
    ["nome" => "Suzete", "idade" => 54, "sexo" => "Feminino"],
    ["nome" => "Flavia", "idade" => 20, "sexo" => "Feminino"]
];

// Passo b: Converter para JSON
$json = json_encode($pessoas, JSON_PRETTY_PRINT);

// Passo c: Salvar o JSON em um arquivo
file_put_contents("pessoas.json", $json);

?>