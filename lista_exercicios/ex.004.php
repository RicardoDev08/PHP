<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <p>Vamos calcular a área de um retângulo!</p>
        <br><p>Medida do comprimento:</p>
        <br><input type="number" name="comprimento" id="comprimento">
        <br><p>Medida da largura:</p>
        <br><input type="number" name="Largura" id="largura">
    </form>
    <?php
    $comprimento = $_POST["comprimento"];
    $largura = $_POST["Largura"];
    function AreaRetangulo($comprimento, $largura){
        $a = $comprimento * $largura;
        return $AreaRetangulo;
    };
    echo "Área do retângulo:" $a;
    
  
    
    
    ?>
</body>
</html>