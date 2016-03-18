<?php
include("conecta.php");
include("banco-usuario.php");
include("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"],$_POST["senha"]);

if($usuario==null){
    $_SESSION["danger"]="Usuário ou senha inválido!";
    header("location:index.php");
}else{
    $_SESSION["success"]="Usuário logado com sucesso!";
    header("location:index.php");
    logaUsuario($_POST["email"]);
}
die();