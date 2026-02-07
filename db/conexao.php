<?php 
include("config.php");

$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die("Não foi possível conectar ao banco de dados " . mysqli_connect_error());
?>