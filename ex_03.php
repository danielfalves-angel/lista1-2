<?php
function esconderSen($string) {
    return str_repeat('*', strlen($string));
}

$sen = "bebes burros";
echo "senha escondida " . esconderSen($sen) . "<br>";
echo "senha original " . $sen;