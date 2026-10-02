<?php

function converterTemperatura($valor, $ori, $dest) {
    // Celsius -> Fahrenheit
    if ($ori == "celsius" && $dest == "fahrenheit") {
        return ($valor * 9 / 5) + 32;
    }
    // Celsius -> Kelvin
    if ($ori == "celsius" && $dest == "kelvin") {
        return $valor + 273.15;
    }
    // Fahrenheit -> Celsius
    if ($ori == "fahrenheit" && $dest == "celsius") {
        return ($valor - 32) * 5 / 9;
    }
    // Fahrenheit -> Kelvin
    if ($ori == "fahrenheit" && $dest == "kelvin") {
        return ($valor - 32) * 5 / 9 + 273.15;
    }
    // Kelvin -> Celsius
    if ($ori == "kelvin" && $dest == "celsius") {
        return $valor - 273.15;
    }
    // Kelvin -> Fahrenheit
    if ($ori == "kelvin" && $dest == "fahrenheit") {
        return ($valor - 273.15) * 9 / 5 + 32;
    }

    return $valor;
}

echo "resultado: " . converterTemperatura(40, "celsius", "fahrenheit");
