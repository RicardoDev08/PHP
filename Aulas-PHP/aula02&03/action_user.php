<?php 
session_start();
include("conn.php");

$first_name = mysqli_real_escape_string($con, $_POST["first_name"]);
$last_name = mysqli_real_escape_string($con, $_POST["last_name"]);
$sexo = mysqli_real_escape_string($con, $_POST["sexo"]);
$fone = mysqli_real_escape_string($con, $_POST["fone"]);
$address = mysqli_real_escape_string($con, $_POST["address"]);
$email = mysqli_real_escape_string($con, $_POST["email"]);

$query_insert = "insert into clientes values (null,'{$first_name}','{$last_name}','{$sexo}','{$fone}','{$address}','{$email}');";

$result_insert = mysqli_query($con, $query_insert);

if($result_insert == ''){
    echo"<script language:'javascript'>
    window.alert('Não foi possível efetuar o cadastro');
    window.location.href='user.php';</script>";
}
else{
    echo "<script language:'javascript'>
    window.alert('Cadastro efetuado com sucesso');
    window.location.href='user.php';</script>";

    exit();
}
?>