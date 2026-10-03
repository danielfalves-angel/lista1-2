<?php

function estatisticasNumericas($numeros) {
    $soma = 0;
    $maior = $numeros[0];
    $menor = $numeros[0];
    $pares = 0;
    $impares = 0;
    $total = count($numeros);

    for ($i = 0; $i < $total; $i++) {
        $n = $numeros[$i];

        $soma = $soma + $n;

        if ($n > $maior) {
            $maior = $n;
        }

        if ($n < $menor) {
            $menor = $n;
        }

        if ($n % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    $media = $soma / $total;

    sort($numeros);
    $meio = (int)($total / 2);

    if ($total % 2 == 1) {
        $mediana = $numeros[$meio];
    } else {
        $mediana = ($numeros[$meio - 1] + $numeros[$meio]) / 2;
    }
    
    echo "soma: " . $soma . "<br>";
    echo "média: " . $media . "<br>";
    echo "maior valor: " . $maior . "<br>";
    echo "menor valor: " . $menor . "<br>";
    echo "mediana: " . $mediana . "<br>";
    echo "quantidade de pares: " . $pares . "<br>";
    echo "quantidade de ímpares: " . $impares . "<br>";
}


$meusNumeros = [10, 2, 5, 8, 3, 7];
estatisticasNumericas($meusNumeros);