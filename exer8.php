<?php 

require_once "cabecalho.php";

?>

<form action="exer8resp.php" method="post">

        <label for="number" class="form-label">Informe um valor em metros quadrados</label>
        <input type="number" name="number" class="form-control">
        <button type="submit" class="btn btn-outline-success btn-lg">Enviar</button>
    </form>


<?php 
    require_once "rodape.php";