<?php 

require_once "cabecalho.php";

?>

<form action="exer3resp.php" method="post">

        <label for="number" class="form-label">Informe um número</label>
        <input type="number" name="number" class="form-control">
        <label for="number2" class="form-label">Informe mais um número</label>
        <input type="number" name="number2" class="form-control">
        <button type="submit" class="btn btn-warning">Enviar</button>
    </form>

<?php 
    require_once "rodape.php";