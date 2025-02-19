<?php
function calculadora($num1, $num2, $opera){
    if($opera =="+"){
        $result = $num1 + $num2;
    }
    if($opera =="-"){
        $result = $num1 - $num2;
    }
    if($opera =="/"){
        $result = $num1 / $num2;
    }
    if($opera =="*"){
        $result = $num1 * $num2;
    }
    return $result
}

echo calculadora(5,5,"+");

?>