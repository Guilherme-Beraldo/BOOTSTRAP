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

    // Ex7

    function converter ($metros) {
        $centimetros = $metros * 100;
    
        echo "$centimetros ctm";
    }

    // Ex8

    function tintas ($metros) {
        $qtdlitros = $metros / 3;
        $qtdlatas = ceil($qtdlitros / 18);
        $valortotal = $qtdlatas * 80;
    
        return [$qtdlatas, $valortotal];
    }

    // Ex9

    function verificarIdade ($ano) {
        define ("anoAtual", 2024);
        $idadePessoa = anoAtual - $ano;
        $dias = $idadePessoa * 365;
        $futuro = $idadePessoa + 1;
    
        echo "Você tem $idadePessoa anos, viveu $dias dias, e em 2025 você fará $futuro anos!";
    }

    // Ex10

    function calcularImc ($peso, $altura) {
        $imc = $peso / ($altura * $altura);
     
        if ($imc < 18.5) {
          echo "Você esta abaixo do peso ideal para sua altura";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
         echo "Você esta com o peso ideal para a sua altura";
        } elseif ($imc >= 25 && $imc < 29.9) {
         echo "Você esta acima do peso ideal para a sua altura";
        } elseif ($imc >= 30 && $imc < 34.9) {
         echo "Você esta com obesidade grau 1";
        }
        elseif ($imc >= 35 && $imc < 39.9) {
         echo "Você esta com obesidade grau 2";
        }
        elseif ($imc >= 40) {
         echo "Você esta com obesidade grau 3, recomendamos consultar um nutricionista!";
        } else {
         echo "números digitados inválidos";
        }
     }
?>
