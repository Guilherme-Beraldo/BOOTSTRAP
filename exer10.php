<?php 

require_once "cabecalho.php";

?>

    <form action="exer10resp.php" method="post">

        <label for="peso">Informe o seu peso </label>
        <input type="float" name="peso">
        <label for="altura">Informe a sua altura </label>
        <input type="float" name="altura">
        <button type="submit">Enviar</button>
        
    </form>


<?php 
    require_once "rodape.php";