<?php 
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");
 
$id = $_POST['id'];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
if(array_key_exists("usado", $_POST)){
    $usado="true";
}else{
    $usado="false";
    }

if(alteraProduto($id, $nome,$preco,$descricao,$categoria_id,$usado, $conexao)){
    ?><p class="text-success">Produto <?= $nome?>, <?= $preco?> alterado com sucesso.</p><?php
}
else{
    $msg = mysqli_error($conexao);
    ?><p class="text-danger">ERRO: o Produto <?= $nome?>, NÃO foi alterado: <?=$msg?> </p><?php

}

include("footer.php")?>