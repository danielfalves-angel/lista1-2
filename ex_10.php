<?php

function calcularMedia($notas) {
    $maior = max($notas);
    $menor = min($notas);
    $soma = array_sum($notas);
    $quantidade = count($notas);
    
    $media = $soma / $quantidade;

  
    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    // Exibe os resultados
    echo "Maior nota: " . $maior . "<br>";
    echo "Menor nota: " . $menor . "<br>";
    echo "Média: " . $media . "<br>";
    echo "Situação: " . $situacao . "<br>";
}

$minhasNotas = [6.7, 6.7, 6.7, 6.7];
calcularMedia($minhasNotas);