<?php

session_start();

include("conn.php");
$nome = mysqli_real_escape_string($con, $_POST["nome"]);

$senha = mysqli_real_escape_string($con, $_POST["senha"]);


if (empty($nome) || empty($senha)) {

    echo "<script>
            alert('Por favor, preencha todos os campos.');
            setTimeout(function(){
                window.location.href = 'conn.php';
            }, 5000); // Espera 5 segundos antes de redirecionar
          </script>";
    exit(); 
}

$query = "select * from user where nome = '{$nome}' and senha = '{$senha}' ";

// echo $query;

$result= mysqli_query($con, $query);


$row = mysqli_num_rows($result);

echo $row;

$retorno = mysqli_fetch_array($result);

if($row>0){
    $_SESSION["nome"] = $nome;
    $_SESSION["setor"] = $retorno['setor'];
    // header("location:admin.php");
    if($_SESSION['setor']=='admin'){
        header("location:admin.php");
    }
    else if ($_SESSION["setor"] == "cliente"){
        header("location:user.php");
    }
    exit();
}


?>