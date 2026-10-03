<?php

function formatarTexto($texto) {
    echo "maiusculas: " . strtoupper($texto) . "<br>";
    echo "minusculas: " . strtolower($texto) . "<br>";
    echo "primeiras letras maiusculas: " . ucwords(strtolower($texto)) . "<br>";
    echo "quantidade de caracteres: " . strlen($texto) . "<br>";
}
$texto = "O rato roeu a roupa do Rei de roma na Casa do João";
formatarTexto("$texto");
