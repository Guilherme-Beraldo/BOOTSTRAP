<?php 

require_once "cabecalho.php";

?>

    <form action="exer9resp.php" method="post">
        <label for="ano">Informe o seu ano de nascimento </label>
        <input type="number" name="ano">
        <button type="submit">Enviar</button>
    </form>

<?php 
    require_once "rodape.php";