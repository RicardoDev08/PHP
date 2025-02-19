<?php
//$lista= array(1,2,3,4,4);

//$pares = array_filter($lista, function($list){
 //   return $list % 2== 0;
//});

//$soma= array_sum($pares);

//echo "O resultado é: " .$soma;

//correção

$lista = [1,2,3,4];
$soma = 0;

for($i=0; $i < count($lista);$i++){
    if($lista[$i] % 2 ==0){
        $soma += $lista[$i];
    }
}

echo $soma

?>