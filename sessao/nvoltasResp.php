

<?php
session_start();

// Função para calcular o melhor tempo e a volta em que ocorreu
function calcularMelhorTempo($tempos) {
    $melhorTempo = min($tempos);
    $voltaMelhorTempo = array_search($melhorTempo, $tempos) + 1; // +1 porque os arrays em PHP são baseados em zero
    return array($melhorTempo, $voltaMelhorTempo);
}

// Função para calcular o tempo médio
function calcularTempoMedio($tempos) {
    $totalVoltas = count($tempos);
    $tempoTotal = array_sum($tempos);
    $tempoMedio = $tempoTotal / $totalVoltas;
    return $tempoMedio;
}

// Verificar se o número de voltas foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num_voltas"])) {
    // Obter o número de voltas do formulário
    $num_voltas = $_POST["num_voltas"];

    // Armazenar o número de voltas na sessão
    $_SESSION["num_voltas"] = $num_voltas;
} elseif (!isset($_SESSION["num_voltas"])) {
    // Se o número de voltas não foi enviado via POST e não está na sessão, inicialize-o com zero
    $_SESSION["num_voltas"] = 0;
}

// Verificar se os tempos de volta foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tempos"])) {
    // Obter os tempos de volta do formulário
    $tempos = $_POST["tempos"];

    // Armazenar os tempos de volta na sessão
    $_SESSION["tempos"] = $tempos;
} elseif (!isset($_SESSION["tempos"])) {
    // Se os tempos de volta não foram enviados via POST e não estão na sessão, inicialize-os com um array vazio
    $_SESSION["tempos"] = array();
}

// Calcular o melhor tempo e a volta em que ocorreu
list($melhorTempo, $voltaMelhorTempo) = calcularMelhorTempo($_SESSION["tempos"]);

// Calcular o tempo médio das voltas
$tempoMedio = calcularTempoMedio($_SESSION["tempos"]);

// Redirecionar de volta para o arquivo HTML
header("Location: nvoltas.php");
exit();
?>



