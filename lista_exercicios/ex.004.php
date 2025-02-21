<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 4</title>
</head>
<body>
    <form method="POST">
        <p>Vamos calcular a área de um retângulo!</p>
        <br><p>Medida do comprimento:</p>
        <br><input type="number" name="comprimento" id="comprimento" required>
        <br><p>Medida da largura:</p>
        <br><input type="number" name="largura" id="largura" required>
    </form>
    <?php
    $comprimento = $_POST["comprimento"];
    $largura = $_POST["largura"];

    function AreaRetangulo($comprimento, $largura){
        $area = $comprimento * $largura;
        return $area;
    };
    $resultado = AreaRetangulo($comprimento,$largura);
    echo "A area do retângulo" .$resultado    
  
    
    
    ?>
</body>
</html>