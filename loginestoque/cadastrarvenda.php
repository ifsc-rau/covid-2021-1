
<?php
// Verifica se houve POST e se o usu�rio ou a senha �(s�o) vazio(s)
// echo $_SERVER['REQUEST_METHOD'];
$descricao = $_POST['descricao'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];
$data = $_POST['data'];
$numero_nota_fiscal = $_POST['numero_nota_fiscal'];
$margem = $_POST['margem'];
$codigo_venda = $_POST['codigo_venda'];

$conn = mysqli_connect('localhost', 'root', 'root', 'login');
// Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{

    // Select da tabela produto
    $result_produto = "SELECT * FROM produto WHERE codigo_produto = '$codigo_venda'";
    $resultado_produto = mysqli_query($conn, $result_produto);
    while ($row_produto = mysqli_fetch_array($result_produto)) {
        if ($quantidade <= $row_produto['quantidade']) {
            $sql = "INSERT INTO venda (descricao, quantidade, valor, data, numero_nota_fiscal, margem, codigo_venda) VALUES ('$descricao', '$quantidade', '$valor', '$data', '$numero_nota_fiscal', '$margem', '$codigo_venda')";
            $valor = $row_produto['quantidade'] - $quantidade;

            $result_prod = "UPDATE produto SET quantidade='$valor', modified=NOW() WHERE codigo_produto='$codigo_venda'";
            $resultado_prod = mysqli_query($conn, $result_prod);

            while ($row_produto = mysqli_fetch_array($result_produto)) {
                echo '<script>
                alert("Venda realizada com sucesso!");             
                </script>';
            }
            print "<a href=estoque.php>Voltar</a>";
        }  
    }  
    }

    mysqli_close($conn);
?>


