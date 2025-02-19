<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simples</title>
</head>
<body>
    <h2>Calculadora Simples</h2>
    <form action="./resultados/dados3.php" method="POST">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" required><br><br>
        
        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" required><br><br>
        
        <label for="operacao">Operação:</label>
        <select id="operacao" name="operacao" required>
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select><br><br>
        
        <input type="submit" value="Calcular">
    </form>
</body>
</html>