<?php

function analisarProdutos($produtos, $busca) {
    $maisCaro = $produtos[0];
    $maisBarato = $produtos[0];
    $soma = 0;
    $achou = "Não encontrado";

    for ($i = 0; $i < count($produtos); $i++) {
        $p = $produtos[$i];
        $soma = $soma + $p['preco'];

        if ($p['preco'] > $maisCaro['preco']) {
            $maisCaro = $p;
        }

        if ($p['preco'] < $maisBarato['preco']) {
            $maisBarato = $p;
        }

        if ($p['nome'] == $busca) {
            $achou = "Encontrado (R$ " . $p['preco'] . ")";
        }
    }

    $media = $soma / count($produtos);

    echo "mais caro: " . $maisCaro['nome'] . " (R$ " . $maisCaro['preco'] . ")<br>";
    echo "mais barato: " . $maisBarato['nome'] . " (R$ " . $maisBarato['preco'] . ")<br>";
    echo "média dos preços: R$ " . $media . "<br>";
    echo "pesquisa por " . $busca . ": " . $achou . "<br>";
}

$produtos = [
    ["nome" => "Arroz", "preco" => 20],
    ["nome" => "Feijão", "preco" => 8],
    ["nome" => "Carne", "preco" => 40],
    ["nome" => "Leite", "preco" => 5],
    ["nome" => "Pão", "preco" => 3],
    ["nome" => "Bolacha", "preco" => 2],
    ["nome" => "biscoito", "preco" => 2]
];

analisarProdutos($produtos, "biscoito");