<?php
function calcularFormula($a, $b)
{
    if (($a + $b) == 0) {
        return "Não é possível realizar a divisão por zero.";
    }

    $resultado = (pow($a, 2) + pow($b, 2)) / ($a + $b);

    return $resultado;
}

$a = 10;
$b = -10;

echo "Valor de a: $a <br>";
echo "Valor de b: $b <br><br>";
echo "Resultado: " . calcularFormula($a, $b);