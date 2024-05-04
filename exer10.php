<?php 

require_once "cabecalho.php";

?>

    <form action="exer10resp.php" method="post">

        <label for="peso" class="form-label">Informe o seu peso </label>
        <input type="float" name="peso" class="form-control">
        <label for="altura" class="form-label">Informe a sua altura </label>
        <input type="float" name="altura" class="form-control">
        <button type="submit" class="btn btn-lg btn-outline-secondary">Enviar</button>
        
    </form>


<?php 
    require_once "rodape.php";