<?php 

require_once "cabecalho.php";

?>

<form action="exer7resp.php" method="post">

        <label for="number" class="form-label">Informe um valor em metros</label>
        <input type="number" name="number" class="form-control">
        <button type="submit" class="btn btn-lg btn-block btn-outline-primary">Enviar</button>
    </form>

<?php 
    require_once "rodape.php";