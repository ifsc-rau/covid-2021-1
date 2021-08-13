
<?php

// Verifica se houve POST e se o usu�rio ou a senha �(s�o) vazio(s)
echo $_SERVER['REQUEST_METHOD'];
$nome_fantasia = $_POST['nome_fantasia'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco_completo = $_POST['endereco_completo'];

$conn = mysqli_connect('localhost','root','root', 'login');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "";

$sql = "INSERT INTO fornecedor (nome_fantasia, email, telefone, endereco_completo, codigo_fornecedor) VALUES ('$nome_fantasia', '$email', '$telefone', '$endereco_completo', '')";

if (mysqli_query($conn, $sql)) {
    echo '<script>
        
	  alert("Fornecedor cadastrado com sucesso!");
        
        
        
        
	</script>';
    // Link goes here!
	header('Location: estoque.php');
 
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>



