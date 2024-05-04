<?php 

    function exibirData() {
        echo "Hoje é dia ".date("d");
    }

    function somar($n1, $n2) {
        return $n1 + $n2;
    }

    // Ex1
    function positivoNegativo($v) {
        if ($v > 0) {
            return "Valor positivo!";
        } elseif ($v < 0) {
            return "Valor negativo!";
        } else {
            return "Igual a zero!";
        }
    }

    // Ex2 
    function menorValor($valores) {
        if (count($valores) == 0) {
            echo "Nenhum valor fornecido.";
            return;
        }
        $posicao = 0;
        $menorValor = $valores[0];
        foreach ($valores as $key => $valor) {
            if($valor < $menorValor) {
                $menorValor = $valor;
                $posicao = $key;
            }
        }
        return "O menor valor é: " . $menorValor . " na posição: ". $posicao +1;
    }

    // Ex3

    function calcularSoma($valor1, $valor2) {

        if($valor1 == $valor2) {
            $soma = ($valor1 + $valor2) * 3;
            return $soma;
        } else {
            $soma = $valor1 + $valor2;
            return $soma;
        }
        
    }

    // Ex4 

    function tabuada($valor) {
        echo "<pre>";
        for ($i = 0; $i < 11; $i++) {
            $total = $valor * $i;
            echo "$valor * $i = $total\n";
        }
        echo "</pre>";
    }

    // Ex5

    function calcularFatorial ($numero) {
        $fatorial = 1;
        for($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }
        return $fatorial;
    }

    // Ex6 
    
    function ordemCrescente($valor1, $valor2) {
        if ($valor1 == $valor2) {
            $resultado = "Números iguais: $valor1";
        } else {
            $resultado = $valor1 > $valor2 ? "$valor2, $valor1" : "$valor1, $valor2";
        }
    
        return $resultado;
    }
?>
