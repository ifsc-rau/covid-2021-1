
<?php

// Verifica se houve POST e se o usu�rio ou a senha �(s�o) vazio(s)
//echo $_SERVER['REQUEST_METHOD'];
$descricao = $_POST['descricao'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];
$margem = $_POST['margem'];

$conn = mysqli_connect('localhost','root','root', 'login');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "";

$sql = "INSERT INTO produto (descricao, quantidade, valor, margem, codigo_produto) VALUES ('$descricao', '$quantidade', '$valor', '$margem', '')";

if (mysqli_query($conn, $sql)) {
   // echo "Produto cadastrado com sucesso";
    echo '<script>
        
	  alert("Produto cadastrado com sucesso!");
      
      
	
        
	</script>';
     // Link goes here!
    print "<a href=estoque.php>Voltar</a>";
   
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>


