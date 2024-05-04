<?php 

require_once "cabecalho.php";

?>

<form action="exer6resp.php" method="post">

        <label for="number" class="form-label">Informe um número</label>
        <input type="number" name="number" class="form-control">
        <label for="number2" class="form-label">Informe um número</label>
        <input type="number" name="number2" class="form-control">
        <button type="submit" class="btn btn-dark">Enviar</button>
    </form>
<?php 
    require_once "rodape.php";