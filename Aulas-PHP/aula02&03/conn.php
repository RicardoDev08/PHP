<?php
$host = "10.28.1.244";
$usuario = "root";
$senha = "";
$bd = "php";
 
$con = new mysqli($host, $usuario, $senha, $bd);
 
if ($con->connect_errno) {
    echo "Falha na Conexão: (" . $con->connect_errno . ") " . $con->connect_error;
} 
else {
    echo $con->host_info . " Conexão concluída! ";
}
?>
 