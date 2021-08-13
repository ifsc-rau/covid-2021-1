<?php
// Verifica se houve POST
echo $_SERVER['REQUEST_METHOD'];
$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];
$margem = $_POST['margem'];


$conn = mysqli_connect('localhost','root','root', 'login');
//$conn = mysqli_connect('localhost','root','', 'estoque');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully ";

	$sql = "UPDATE produto SET descricao='$descricao', quantidade='$quantidade', valor='$valor', margem='$margem' WHERE codigo_produto='$codigo'";
    mysqli_query($conn, $sql); 

	if(mysqli_affected_rows($conn)){
		echo '<script>alert("Produto atualizado com sucesso!");</script>';
		header('Location: estoque.php');
	}else{
		echo '<script>alert("Não foi possível atualizar!");</script>';
		header('Location: estoque.php');

	}
?>