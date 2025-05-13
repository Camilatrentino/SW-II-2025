<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consulta de CEP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Consulta de CEP</h1>

        <form method="POST" class="form-cep">
            <label for="cep">Digite o CEP:</label><br> 
            <!-- maximo de 8 caracters -->
            <input type="text" name="cep" id="cep" maxlength="8" required><br> 
            <button type="submit">Buscar</button>
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") { //Verifica se o formulário foi enviado
                $cep = preg_replace("/[^0-9]/", "", $_POST["cep"]);

                if (strlen($cep) == 8) { //Verifica se o CEP tem exatamente 8 números
                    $url = "https://viacep.com.br/ws/$cep/json/"; // Monta a URL da API ViaCEP com o número digitado, pedindo o retorno em formato JSON.
                    $response = file_get_contents($url); // Usa file_get_contents para fazer a consulta na internet e pegar os dados da API.

                    if ($response !== false) { //Verifica se a resposta foi recebida
                        $data = json_decode($response, true); //Converte o JSON da API em um array PHP associativo

                        if (isset($data["erro"])) {
                            echo "<p class='erro'>CEP não encontrado.</p>";
                        } else {
                            echo "<h3>Resultado:</h3>";
                            echo "<p><strong>CEP:</strong> " . $data["cep"] . "</p>";
                            echo "<p><strong>Logradouro:</strong> " . $data["logradouro"] . "</p>";
                            echo "<p><strong>Bairro:</strong> " . $data["bairro"] . "</p>";
                            echo "<p><strong>Cidade:</strong> " . $data["localidade"] . "</p>";
                            echo "<p><strong>Estado:</strong> " . $data["uf"] . "</p>";
                        }
                    } else {
                        echo "<p class='erro'>Erro ao consultar o webservice.</p>";
                    }
                } else {
                    echo "<p class='erro'>CEP inválido. Digite exatamente 8 números.</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>

