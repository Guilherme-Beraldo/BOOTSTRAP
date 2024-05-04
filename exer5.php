<?php 

require_once "cabecalho.php";

?>

<form action="exer5resp.php" method="post">

        <label for="number" class="form-label">Informe um número maior que zero</label>
        <input type="number" name="number" class="form-control">
        <button type="submit" class="btn btn-secondary">Enviar</button>
    </form>

<?php 
    require_once "rodape.php";