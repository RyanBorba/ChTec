<?php
$arquivo = "alerta.txt";

// Limpar alerta
if (isset($_GET['limpar'])) {
    file_put_contents($arquivo, "");
    echo "Alerta limpo.";
    exit;
}

// Enviar alerta
if (isset($_GET['tipo'])) {
    $tipo = $_GET['tipo'];
    $mensagem = "";

    switch ($tipo) {
        case "micro":
            $mensagem = "Alerta de MICRO enviado!";
            break;

        case "imp":
            $mensagem = "Alerta de IMPRESSORA enviada!";
            break;

        case "pessoa01":
            $mensagem = "Alerta enviado para Ryan!";
            break;

        case "pessoa02":
            $mensagem = "Alerta enviado para Romulo!";
            break;

        case "pessoa03":
            $mensagem = "Alerta enviado para Bruno!";
            break;

        default:
            echo "Tipo inválido.";
            exit;
    }

    // Grava o alerta com código aleatório para evitar duplicação
    $valor = $tipo . "." . rand(1000, 9999);
    file_put_contents($arquivo, $valor);

    // Exibe a mensagem correspondente
    echo $mensagem;
    exit;
}

echo "Nenhuma ação executada.";
?>
