<?php
function gerarSenha() {
    $bytes = random_bytes(3); 

    return $bytes;
}

$rand = gerarSenha();
echo bin2hex($rand);
?>