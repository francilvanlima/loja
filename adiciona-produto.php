<?php include("cabecalho.php"); ?>
<?php
function insereProduto($conexao, $nome, $preco){
	$query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco})";
	return mysqli_query($conexao, $query);
} 

$nome = $_GET["nome"];
$preco = $_GET["preco"];
$conexao = mysqli_connect('localhost', 'root', '', 'loja');


if (insereProduto($conexao, $nome, $preco)) { ?>
	<p class="text-success">Produto <?= $nome; ?>, <?= $preco; ?> reais adicionado com sucesso!</p>
	<?php } else { ?>
	<p class="text-danger">Produto<?= $nome;?> não foi adicionado!</p>
	<?php
}
?>

<?php include("rodape.php"); ?>

<!-- // mysqli_close($conexao); -->
