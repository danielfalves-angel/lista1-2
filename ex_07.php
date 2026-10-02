<?php

function calcularDesconto($valorTotal) {
    $desconto = 0;

    // Define a porcentagem do desconto com base no valor
    if ($valorTotal > 1000) {
        $desconto = 0.30; // 30%
    } elseif ($valorTotal > 500) {
        $desconto = 0.20; // 20%
    } elseif ($valorTotal > 100) {
        $desconto = 0.10; // 10%
    }

    $valorDesconto = $valorTotal * $desconto;
    $valorFinal = $valorTotal - $valorDesconto;

    return [
        'valor_original' => $valorTotal,
        'desconto' => $valorDesconto,
        'valor_final' => $valorFinal
    ];
}

$valorTotal = 1200;
echo "valor final: " . calcularDesconto($valorTotal)['valor_final'] . "<br>";
echo "desconto: " . calcularDesconto($valorTotal)['desconto'] . "<br>";
echo "valor original: " . calcularDesconto($valorTotal)['valor_original'] . "<br>";