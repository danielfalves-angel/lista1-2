<?php

function criptografarMensagem($texto) {
    $resultado = "";
    $textoMinusculo = strtolower($texto);

    for ($i = 0; $i < strlen($textoMinusculo); $i++) {
        $letra = $textoMinusculo[$i];

        if ($letra >= 'a' && $letra <= 'z') {
            $codigo = ord($letra) + 3;

            if ($codigo > ord('z')) {
                $codigo = $codigo - 26;
            }

            $resultado .= chr($codigo);
        } else {
            $resultado .= $letra;
        }
    }

    return $resultado;
}

function descriptografarMensagem($texto) {
    $resultado = "";
    $textoMinusculo = strtolower($texto);

    for ($i = 0; $i < strlen($textoMinusculo); $i++) {
        $letra = $textoMinusculo[$i];

        if ($letra >= 'a' && $letra <= 'z') {
            $codigo = ord($letra) - 3;

            if ($codigo < ord('a')) {
                $codigo = $codigo + 26;
            }

            $resultado .= chr($codigo);
        } else {
            $resultado .= $letra;
        }
    }

    return $resultado;
}

$original = "cachorro";

$criptografado = criptografarMensagem($original);
echo "criptografado: " . $criptografado . "<br>";

$descriptografado = descriptografarMensagem($criptografado);
echo "descriptografado: " . $descriptografado . "<br>";