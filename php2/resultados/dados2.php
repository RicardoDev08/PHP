<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    if (empty($nome) || empty($email)) {
        echo "<p style='color:red;'>Por favor, preencha todos os campos.</p>";
    } else {
        echo "<p style='color:green;'>Cadastro realizado com sucesso!</p>";
        echo "<p>Nome: " . htmlspecialchars($nome) . "</p>";
        echo "<p>E-mail: " . htmlspecialchars($email) . "</p>";
    }
}


?>