<?php
    // feito por Camila, Flavia, José, Suzete e Lily :)

    header("Content-Type: application/json"); // resposta em JSON

    $metodo = $_SERVER['REQUEST_METHOD'];
    $arquivo = 'pessoas.json'; // agora o nome do arquivo está certo

    // cria o arquivo vazio se ainda não existir
    if (!file_exists($arquivo)) {
        file_put_contents($arquivo, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    // lê as pessoas salvas
    $pessoas = json_decode(file_get_contents($arquivo), true);

    switch ($metodo) {
        case 'GET':
            if (isset($_GET['id'])) {
                $id = intval($_GET['id']);
                $pessoa_encontrada = null;

                foreach ($pessoas as $pessoa) {
                    if ($pessoa['id'] == $id) {
                        $pessoa_encontrada = $pessoa;
                        break;
                    }
                }

                if ($pessoa_encontrada) {
                    echo json_encode($pessoa_encontrada, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
                } else {
                    http_response_code(404);
                    echo json_encode(["erro" => "Pessoa não encontrada"], JSON_UNESCAPED_UNICODE);
                }
            } else {
                echo json_encode($pessoas, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            }
            break;

        case 'POST':
            $dados = json_decode(file_get_contents('php://input'), true);

            if (!isset($dados["nome"]) || !isset($dados["email"])) {
                http_response_code(400);
                echo json_encode(["erro" => "Nome e email são obrigatórios"], JSON_UNESCAPED_UNICODE);
                exit;
            }

            $novo_id = 1;
            if (!empty($pessoas)) {
                $ids = array_column($pessoas, 'id');
                $novo_id = max($ids) + 1;
            }

            $novaPessoa = [
                "id" => $novo_id,
                "nome" => $dados["nome"],
                "email" => $dados["email"]
            ];

            $pessoas[] = $novaPessoa;

            file_put_contents($arquivo, json_encode($pessoas, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

            echo json_encode([
                "mensagem" => "Pessoa inserida com sucesso",
                "pessoa" => $novaPessoa
            ], JSON_UNESCAPED_UNICODE);

            break;

        default:
            http_response_code(405);
            echo json_encode(["erro" => "Método não permitido"], JSON_UNESCAPED_UNICODE);
            break;
    }
?>
