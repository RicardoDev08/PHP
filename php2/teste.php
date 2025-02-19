<?php
function calculadora($num1, $num2, $opera){
    switch($opera){
        case "soma":
            return $num1 + $num2;
        case "sub":
            return $num1 - $num2;
        case "mult":
            return $num1 * $num2;
        case "div":
            if ($num2 != 0){
                return $num1 / $num2;
            } else {
                return "Erro: Divisão por zero";
            }
        default:
            return "Operação inválida";
    }
}

$num1 = 10;
$num2 = 5;
$opera= "soma";

$result= calculadora($num1, $num2, $opera);
echo "Resultado " . $result;

?>