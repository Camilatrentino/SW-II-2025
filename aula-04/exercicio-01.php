<?php

    $pessoa = array("nome" => "Carolina", "idade" => 17, "cidade" => "Ribeirão Pires");
    $pessoa["profissao"] = "Advogada";
    $amigos = array("Dora", "Ale", "Isa");
    $dados = array_merge($pessoa, $amigos);
    print_r($dados);

?>