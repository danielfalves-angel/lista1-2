<?php
function calcularIMC($peso, $altura) {
    return $peso / ($altura * $altura);
}

// 2. Validar e-mail
function validarEmail($email) {
    if (strpos($email, "@") !== false && strpos($email, ".") !== false) {
        return "Válido";
    }
    return "Inválido";
}

function gerarSenha($tamanho) {
    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $senha = "";
    for ($i = 0; $i < $tamanho; $i++) {
        $posicao = rand(0, strlen($caracteres) - 1);
        $senha .= $caracteres[$posicao];
    }
    return $senha;
}

function contarVogais($texto) {
    $texto = strtolower($texto);
    $contador = 0;
    for ($i = 0; $i < strlen($texto); $i++) {
        $c = $texto[$i];
        if ($c == 'a' || $c == 'e' || $c == 'i' || $c == 'o' || $c == 'u') {
            $contador++;
        }
    }
    return $contador;
}

function inverterTexto($texto) {
    $invertido = "";
    for ($i = strlen($texto) - 1; $i >= 0; $i--) {
        $invertido .= $texto[$i];
    }
    return $invertido; 
}

function calcularIdade($anoNascimento) {
    $anoAtual = 2026;
    return $anoAtual - $anoNascimento;
}

function converterMoeda($valorDolar, $cotacao) {
    return $valorDolar * $cotacao;
}

function formatarTelefone($numero) {
    if (strlen($numero) == 11) {
        $ddd = substr($numero, 0, 2);
        $parte1 = substr($numero, 2, 5);
        $parte2 = substr($numero, 7, 4);
        return "($ddd) $parte1-$parte2";
    }
    return $numero;
}

function gerarSaudacao($hora) {
    if ($hora >= 6 && $hora < 12) {
        return "Bom dia!";
    } elseif ($hora >= 12 && $hora < 18) {
        return "Boa tarde!";
    } else {
        return "Boa noite!";
    }
}

function validarSenhaForte($senha) {
    if (strlen($senha) >= 8) {
        return "Senha forte";
    }
    return "Senha fraca (mínimo 8 caracteres)";
}