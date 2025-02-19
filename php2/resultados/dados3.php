<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacao = $_POST['operacao'];
    $resultado = "";

    if (!is_numeric($numero1) || !is_numeric($numero2)) {
        echo "<p style='color:red;'>Por favor, insira números válidos.</p>";
    } else {
        switch ($operacao) {
            case "soma":
                $resultado = $numero1 + $numero2;
                break;
            case "subtracao":
                $resultado = $numero1 - $numero2;
                break;
            case "multiplicacao":
                $resultado = $numero1 * $numero2;
                break;
            case "divisao":
                if ($numero2 == 0) {
                    echo "<p style='color:red;'>Divisão por zero não é permitida.</p>";
                    exit;
                }
                $resultado = $numero1 / $numero2;
                break;
            default:
                echo "<p style='color:red;'>Operação inválida.</p>";
                exit;
        }
        echo "<p style='color:green;'>Resultado: " . htmlspecialchars($resultado) . "</p>";
    }
}
?>