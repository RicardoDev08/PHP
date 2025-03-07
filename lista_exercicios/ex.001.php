<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-1</title>
</head>
<body>
    <form method="POST">
        <p>Digite um número</p><input type="text" id="pnumero"name="pnumero"><br>
        <p>Digite outro número</p><input type="text" id="snumero"name="snumero"><br>
        <input type="submit" name="verificar" value="calcular">
    </form>
    <?php
    $num1 = $_POST["pnumero"];
    $num2 = $_POST["snumero"];

    $soma = $num1 + $num2;
    $subtracao = $num1 - $num2;
    $multiplicacao = $num1 * $num2;
    $divisao = $num1 / $num2; 

    echo "A soma de $num1 + $num2 = $soma";
    echo "</br>A subtração de $num1 - $num2 = $subtracao";
    echo "</br>A multiplicação de $num1 x $num2 = $multiplicacao";
    echo "</br>A divisão de $num1 / $num2 = $divisao"; 
    ?>
</body>
</html>
