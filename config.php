<?php

$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "formulario-site integrador";

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno)
{
    echo "Erro";
}
else
{
    "Conexão efetuada com sucesso";
}

?>
