<?php 

require_once "cabecalho.php";

?>

<form action="exer8resp.php" method="post">

        <label for="number">Informe um valor em metros quadrados</label>
        <input type="number" name="number">
        <button type="submit">Enviar</button>
    </form>


<?php 
    require_once "rodape.php";