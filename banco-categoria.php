<?php

function listaCategorias($conexao){
    $categorias=array();
    $query="select * from categorias";
    $resultados = mysqli_query($conexao,$query);
    while($categoria = mysqli_fetch_assoc($resultados)){
        array_push($categorias, $categoria);
    }
    return $categorias;
}
