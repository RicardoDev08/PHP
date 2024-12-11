<?php 

session_start();

include("verific.php");

if($_SESSION['setor']!='admin'){
    header("location: forms.html");
    exit();
};

?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pag ADM</title>
</head>
<body>
    <h1>PAG ADMIN</h1>
    <a href="user.php">Cadastrar Cliente</a> <br><br><br>
    <a href="logout.php">Sair</a>
</body>
</html>