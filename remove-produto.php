<?php 
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
$id = $_POST["id"];
removeProduto($id,$conexao);
$_SESSION["success"]="Produto removido com sucesso!";
header("Location: produto-lista.php");
die();
include("footer.php")?>