<<<<<<< HEAD

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

//$conn = mysqli_connect('localhost', 'root', '', 'estoque');

// Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{

    $result_venda = "SELECT * FROM produto where codigo_produto = '{$codigo_venda}'";
    $resultado_venda = mysqli_query($conn, $result_venda);
    while ($row_venda = mysqli_fetch_assoc($resultado_venda)) {
        $quantidadeBanco = $row_venda['quantidade'];
        echo "Quantidade: " . $quantidadeBanco . "<br>";   
    }

    if($quantidadeBanco >= 1) {
        $qtd = $quantidade;
        $test = $quantidadeBanco - $quantidade;
            if ($test >= 0) {
                $sql = "INSERT INTO venda (descricao, quantidade, valor, data, numero_nota_fiscal, margem, codigo_venda) VALUES ('$descricao', '$quantidade', '$valor', '$data', '$numero_nota_fiscal', '$margem', '$codigo_venda')";
                mysqli_query($conn, $sql);

                $sql1 = "UPDATE produto SET quantidade='$test' WHERE codigo_produto ='$codigo_venda'";
                
                mysqli_query($conn, $sql1); 
                echo '<script>
                alert("Venda cadastrada com sucesso!");
                </script>';          
                header('Location: estoque.php');
            }else{
                echo '<script>
                alert("Não foi possível cadastrar a venda!");
                </script>';
                header('Location: estoque.php');
            }
        }else{
                echo '<script>
                alert("Não foi possível cadastrar a venda!");
                </script>';
                header('Location: estoque.php');
        }
    }
    mysqli_close($conn);
    
=======

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

//$conn = mysqli_connect('localhost', 'root', '', 'estoque');

// Check connection
    if (! $conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{

    $result_venda = "SELECT * FROM produto where codigo_produto = '{$codigo_venda}'";
    $resultado_venda = mysqli_query($conn, $result_venda);
    while ($row_venda = mysqli_fetch_assoc($resultado_venda)) {
        $quantidadeBanco = $row_venda['quantidade'];
        echo "Quantidade: " . $quantidadeBanco . "<br>";   
    }

    if($quantidadeBanco >= 1) {
        $qtd = $quantidade;
        $test = $quantidadeBanco - $quantidade;
            if ($test >= 0) {
                $sql = "INSERT INTO venda (descricao, quantidade, valor, data, numero_nota_fiscal, margem, codigo_venda) VALUES ('$descricao', '$quantidade', '$valor', '$data', '$numero_nota_fiscal', '$margem', '$codigo_venda')";
                mysqli_query($conn, $sql);

                $sql1 = "UPDATE produto SET quantidade='$test' WHERE codigo_produto ='$codigo_venda'";
                
                mysqli_query($conn, $sql1); 
                echo '<script>
                alert("Venda cadastrada com sucesso!");
                </script>';          
                header('Location: estoque.php');
            }else{
                echo '<script>
                alert("Não foi possível cadastrar a venda!");
                </script>';
                header('Location: estoque.php');
            }
        }else{
                echo '<script>
                alert("Não foi possível cadastrar a venda!");
                </script>';
                header('Location: estoque.php');
        }
    }
    mysqli_close($conn);
    
>>>>>>> 3777e1d31a6eb0f1dc49b5206e1f16f728870e56
?>