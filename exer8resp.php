<?php 

require_once "cabecalho.php";

$metros = $_POST['number'];

$vet = tintas($metros);

 echo "Você irá gastar ".$vet[0]. " lata(s) e gastará ".$vet[1]."R$";

 

require_once "rodape.php";

?>
