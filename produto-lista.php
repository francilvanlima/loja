<?php include("cabecalho.php"); ?>
<?php include("conecta.php"); 
$resultado = mysqli_query($conexão, "select * from produtos");
$produto = mysqli_fetch_assoc($resultado);
echo $produto["nome"];
?>

<?php include("rodape.php"); ?>
