<?php
function analisarTexto($texto) {
    $textoMinusculo = strtolower($texto);
    $caracteres = strlen($texto);
    $palavras = count(explode(" ", $texto));
    $vogais = 0;
    $consoantes = 0;

    for ($i = 0; $i < $caracteres; $i++) {
        $letra = $textoMinusculo[$i];

        if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
            $vogais++;
        } elseif ($letra >= 'a' && $letra <= 'z' && $letra != 'a' && $letra != 'e' && $letra != 'i' && $letra != 'o' && $letra != 'u') {
            $consoantes++;
        }
    }

    return [
        'palavras' => $palavras,
        'caracteres' => $caracteres,
        'vogais' => $vogais,
        'consoantes' => $consoantes
    ];
}

$texto = "tung tung tung sahur";
$resultado = analisarTexto($texto);

echo "palavras: " . $resultado['palavras'] . "<br>";
echo "caracteres: " . $resultado['caracteres'] . "<br>";
echo "vogais: " . $resultado['vogais'] . "<br>";
echo "consoantes: " . $resultado['consoantes'] . "<br>";