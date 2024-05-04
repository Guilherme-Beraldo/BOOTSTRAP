<?php 

require_once "cabecalho.php";

$valores = [
    isset($_POST['number']) ? $_POST['number'] : null,
    isset($_POST['number2']) ? $_POST['number2'] : null,
    isset($_POST['number3']) ? $_POST['number3'] : null,
    isset($_POST['number4']) ? $_POST['number4'] : null,
    isset($_POST['number5']) ? $_POST['number5'] : null,
    isset($_POST['number6']) ? $_POST['number6'] : null,
    isset($_POST['number7']) ? $_POST['number7'] : null
];

echo menorValor($valores);

require_once "rodape.php";

?>
