<?php 

require_once "cabecalho.php";

$peso = $_POST['peso'];
$altura = $_POST['altura'];

calcularImc($peso, $altura);

require_once "rodape.php";

?>
