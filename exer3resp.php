<?php 

require_once "cabecalho.php";

$valor1 = $_POST['number'];
$valor2 = $_POST['number2'];

echo calcularSoma($valor1, $valor2);

require_once "rodape.php";

?>
