<?php

function analisarNumero($numero) {

    if ($numero % 2 == 0) {
        echo "par ou impar: par<br>";
    } else {
        echo "par ou impar: impar<br>";
    }

    $divisores = 0;
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $divisores++;
        }
    }

    if ($divisores == 2) {
        echo "primo: sim<br>";
    } else {
        echo "primo: não<br>";
    }

    $somaDivisores = 0;
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $somaDivisores += $i;
        }
    }

    if ($somaDivisores == $numero && $numero > 0) {
        echo "perfeito: sim<br>";
    } else {
        echo "perfeito: não<br>";
    }
}
$numero = 55;
echo "numero: " . $numero . "<br>";
analisarNumero($numero);
