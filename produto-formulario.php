<?php include("cabecalho.php"); ?>

	<h1>Formulário de Produto</h1>
		<form action="adiciona-produto.php">
			Nome:
			<input type="text" name="nome"><br/>
			<br>
			Preço:
			<input type="number" name="preco"><br/>
			<br>
			<input type="submit" value="Cadastrar">
			<br>
		</form>

<?php include("rodape.php"); ?>