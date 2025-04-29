<?php

// Passo a: Criar um array associativo com os produtos
$pessoas = [
    ["id" => 1,"nome" => "Camila", "idade" => 17, "sexo" => "Feminino"],
    ["id" => 2, "nome" => "Suzete", "idade" => 54, "sexo" => "Feminino"],
    ["id" => 3, "nome" => "Flavia", "idade" => 20, "sexo" => "Feminino"]
];

// Passo b: Converter para JSON
$json = json_encode($pessoas, JSON_PRETTY_PRINT);

// Passo c: Salvar o JSON em um arquivo
file_put_contents("pessoas.json", $json);

?>