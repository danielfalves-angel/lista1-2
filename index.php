
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="ex_01.php">Exercise 1</a>
    <a href="ex_02.php">Exercise 2</a> 
    <a href="ex_03.php">Exercise 3</a> 
    <a href="ex_04.php">Exercise 4</a> 
    <a href="ex_05.php">Exercise 5</a> <br> <br>
    <a href="ex_06.php">Exercise 6</a> 
    <a href="ex_07.php">Exercise 7</a> 
    <a href="ex_08.php">Exercise 8</a> 
    <a href="ex_09.php">Exercise 9</a> 
    <a href="ex_10.php">Exercise 10</a> <br> <br>
    <a href="ex_11.php">Exercise 11</a>  
    <a href="ex_12.php">Exercise 12</a>  
    <a href="ex_13.php">Exercise 13</a>  
    <a href="ex_14.php">Exercise 14</a> 

    <hr>

    <?php

        require_once "funcoes.php";

        echo "<h3>10 Funções:</h3>";

        echo "1 IMC: " . calcularIMC(70, 1.75) . "<br>";

        echo "2 e-mail (test@test.com): " . validarEmail("test@test.com") . "<br>";

        echo "3 senha gerada (6 caracteres): " . gerarSenha(6) . "<br>";

        echo "4 vogais em 'Programacao': " . contarVogais("Programacao") . "<br>";

        echo "5 morango invertido: " . inverterTexto("morango") . "<br>";

        echo "6 idade de quem nasceu em 1967: " . calcularIdade(1967) . " anos<br>";

        echo "7 $ 50.00 em Reais (Cotação 6.50): R$ " . converterMoeda(50, 6.50) . "<br>";

        echo "8 telefone formatado: " . formatarTelefone("47997526510") . "<br>";

        echo "9 saudação (9h): " . gerarSaudacao(9) . "<br>";

        echo "10 validação de '12345656789': " . validarSenhaForte("12345656789") . "<br>";

    ?>

    <hr>

</body>
</html>