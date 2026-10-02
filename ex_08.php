<?php

function ordenarNomes($textoNomes) {
    $nomes = explode(",", $textoNomes);

    for ($i = 0; $i < count($nomes); $i++) {
        $nomes[$i] = trim($nomes[$i]);
    }

    sort($nomes);

    return implode(", ", $nomes);
}

$lista = "daniel , ignacio , colin , tomazia , renato , roeder , alemao , pirigoso ,";

echo ordenarNomes($lista);