<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 2</title>
</head>
<body>
    <form method="POST">
        <p>Digite sua idade:</p>
        <input type="number" name="name">
    </form>
    <?php
    $idade = $_POST["name"];
    echo "sua idade é: $idade anos!</br>";
    if ($idade >=60)
        echo "você está idoso";
    else
        echo "você é jovem!"  ;
    ?>
</body>
</html>