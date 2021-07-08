
<?php
// Verifica se houve POST
//echo $_SERVER['REQUEST_METHOD'];
$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];
$margem = $_POST['margem'];


$conn = mysqli_connect('localhost','root','root', 'login');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully ";

$result_produto = "UPDATE produto SET descricao='$descricao', quantidade='$quantidade', valor='$valor',margem='$margem',  modified=NOW() WHERE codigo='$codigo'";
$resultado_produto = mysqli_query($conn, $result_produto);

if(mysqli_affected_rows($conn)){
	echo '<script>alert("Produto atualizado com sucesso!");</script>';
}else{
	echo '<script>alert("Não foi possível atualizar!");</script>';
}
print "<a href=estoque.php>Voltar</a>";
?>