<?php
function listaProdutos($conexao){
    $query = "select p.*, c.nome as nome_categoria from produto as p join categorias as c on c.id = p.categoria_id";
    $resultado = mysqli_query($conexao, $query);
    $produtos=array();
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos,$produto);
    }   
    return $produtos;
}

function insereProduto($nome, $preco,$descricao, $categoria_id, $usado, $conexao){
    $query = "insert into produto (nome, preco, descricao, categoria_id, usado) values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
    return mysqli_query($conexao, $query);
}

function removeProduto($id, $conexao){
    $query = "delete from produto where id={$id}";
    return mysqli_query($conexao, $query);
}

function buscaProduto($id, $conexao){
    $query="select * from produto where produto.id={$id}";
    $resultado= mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}
function alteraProduto($id, $nome, $preco,$descricao, $categoria_id, $usado, $conexao){
    $query = "update produto set nome= '{$nome}', preco={$preco}, descricao='{$descricao}', categoria_id={$categoria_id}, usado={$usado} where id={$id}";
    return mysqli_query($conexao, $query);
}
