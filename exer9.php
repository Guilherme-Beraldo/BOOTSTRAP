<?php 

require_once "cabecalho.php";

?>

    <form action="exer9resp.php" method="post">
        <label for="ano" class="form-label">Informe o seu ano de nascimento </label>
        <input type="number" name="ano" class="form-control">
        <button type="submit" class="btn btn-outline-warning btn-lg">Enviar</button>
    </form>

<?php 
    require_once "rodape.php";