<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 - PHP</title>
</head>
<body>

    <?php

    echo "123 ";
    echo"24124"."<br>";

    $color = 'preto';

    echo "Meu carro é " .$color. "<br>";
    
    $txt = '@bdleste';
    echo "Visite $txt!<br>";
    echo "Visite ".$txt."!"."<br>";
    
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    echo "O nome digitado na URL é: ".$nome."<br>";
    echo "A idade digitada na URL é: ".$idade."<br>";
    
    $nota = []; //Iniciar o Vetor
    $nota[1] = 7;
    $nota[2] = 6;
    $nota[3] = 7;
    $nota[4] = 6;

    echo "A nota  1 é = $nota[1] <br>";

    $media = ($nota[1]+$nota[2]+$nota[3]+$nota[4])/4;

    echo "A media é = $media";
    
    ?>

</html>