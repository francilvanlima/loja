<?php
function listaProduto ($conexao){
    $produtos = array();
    $resultado = mysqli_query($conexao, "select * from produtos");
    while ($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }
    return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao){
	$query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco}. '{$descricao}')";
	return mysqli_query($conexao, $query);
} 

function removeProduto($conexao, $id) {
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}