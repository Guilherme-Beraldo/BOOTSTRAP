<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Tempos de Volta</title>
</head>
<body>

<h2>Calculadora de Tempos de Volta</h2>

<form action="nvoltasResp.php" method="post">
    <label for="num_voltas">Insira o número de voltas:</label><br>
    <input type="number" id="num_voltas" name="num_voltas" required><br><br>

    <?php
    session_start();
    if ($_SESSION["num_voltas"] > 0) {
        echo "<label for='tempos'>Insira os tempos das voltas (separados por vírgula):</label><br>";
        for ($i = 1; $i <= $_SESSION["num_voltas"]; $i++) {
            echo "<input type='text' name='tempos[]' placeholder='Volta $i' required><br>";
        }
        echo "<br>";
        echo "<button type='submit'>Calcular</button>";
    }
    ?>
</form>

<?php if (!empty($_SESSION["tempos"])): ?>
    <h3>Resultados:</h3>
    <p>Melhor tempo: <?php echo $melhorTempo; ?> segundos</p>
    <p>Volta do melhor tempo: <?php echo $voltaMelhorTempo; ?></p>
    <p>Tempo médio das voltas: <?php echo $tempoMedio; ?> segundos</p>
<?php endif; ?>

</body>
</html>
