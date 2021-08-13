
<?php

// Verifica se houve POST e se o usu�rio ou a senha �(s�o) vazio(s)
//echo $_SERVER['REQUEST_METHOD'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];
$razao_social = $_POST['razao_social'];
$cnpj = $_POST['cnpj'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];


$conn = mysqli_connect('localhost','root','root', 'login');
//$conn = mysqli_connect('localhost','root','', 'estoque');// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "";

$sql = "INSERT INTO cliente (nome, sexo, cpf, razao_social, cnpj, telefone, email, endereco, codigo_cliente) VALUES ('$nome', '$sexo', '$cpf', '$razao_social', '$cnpj', '$telefone', '$email', '$endereco', '')";

if (mysqli_query($conn, $sql)) {
    
    echo '<script>alert("Cliente cadastrado com sucesso!");</script>';
    // Link goes here!
	header('Location: estoque.php');

    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>


