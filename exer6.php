<?php 

require_once "cabecalho.php";

?>

<form action="exer6resp.php" method="post">

        <label for="number">Informe um número</label>
        <input type="number" name="number">
        <label for="number2">Informe um número</label>
        <input type="number" name="number2">
        <button type="submit">Enviar</button>
    </form>
<?php 
    require_once "rodape.php";