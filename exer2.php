<?php 

require_once "cabecalho.php";

?>

<form action="exer2resp.php" method="post">

        <label for="number" class="form-label">Informe um número</label>
        <input type="number" name="number" class="form-control"> <br> 
        <label for="number2" class="form-label">Informe um número</label>
        <input type="number" name="number2" class="form-control"> <br> 
        <label for="number3" class="form-label">Informe um número</label>
        <input type="number"  name="number3" class="form-control"> <br> 
        <label for="number4" class="form-label">Informe um número</label>
        <input type="number" name="number4" class="form-control"> <br> 
        <label for="number5" class="form-label">Informe um número</label>
        <input type="number" name="number5" class="form-control"> <br>
        <label for="number6" class="form-label">Informe um número</label>
        <input type="number" name="number6" class="form-control"> <br>
        <label for="number7" class="form-label">Informe um número</label>
        <input type="number" name="number7" class="form-control"> <br>
        <button type="submit" class="btn btn-success btn-lg">Enviar</button>
    </form>

<?php 
    require_once "rodape.php";