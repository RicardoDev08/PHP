<!-- <?php

echo '<h1 style = "color:blue">Ricardãooo</h1>';


?>

<?php

echo 'Hello word! <br/>';
$PrimeiroNome ='Ricardinho!';
echo $PrimeiroNome;

?>
<?php

$PrimeiroNome ='Ricardinho';
$Sobrenome = 'Sousinha';
$UltimoNome = "Silvinha";
echo  $PrimeiroNome.' de '.$UltimoNome;

echo '<br/>Bem Vindo, ' .$PrimeiroNome.' '.$Sobrenome.' '.$UltimoNome;
?> -->
<!--
<?php
$nome = 'João Siqueira';
$endereco = 'Coronel Antonino, Rua das Balas, nº118';
$NumeroCaracteres = strlen($nome);
echo "Seu nome é $nome Ele tem $NumeroCaracteres caracteres!<br />";
echo "<br />Olá, $nome. Seu novo endereço: $endereco foi registrado no sistema.";

?>
<?php
$nome = 'Ricardo';
$idade = '16';
$curso = 'Desenvolvimento de Sistemas';
$cidade = 'Campo Grande';
$estado = 'Mato Grosso Do Sul';
$filme = 'Sonic';

echo "<br><br>Meu nome é $nome, tenho $idade anos, faço curso de $curso,
    moro na cidade de $cidade no estado de $estado, terminei de assistir o filme de $filme."

?> -->
<?php
$nota1 = 4;
$nota2 = 2;
$MediaDasProvas = ($nota1 + $nota2) /2;
echo "Sua Média : $MediaDasProvas";

$preco = 100;
$desconto1 = 10;
$ValorTotal = $preco-($preco*$desconto1/100);
echo "<br><br>o preco do jogo é $preco e com desconto de $desconto1% fica $ValorTotal.";

$amigo1 = 21;
$amigo2 = 30;
$amigo3 = 29;
$amigo4 = 27;
$amigo5 = 23;
$MediaIdade = ($amigo1 + $amigo2 + $amigo3 + $amigo4 + $amigo5) /5;

echo "<br><br>A Média de idade do meus 5 amigos é $MediaIdade";
?>