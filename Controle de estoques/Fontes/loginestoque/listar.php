<<<<<<< HEAD

<?php
session_start();
include_once 'conexao.php';
?>


<?php 
$conn = mysqli_connect('localhost','root','root', 'login');
      
       if (isset($_SESSION ['msg'])) {
            echo $_SESSION ['msg'];
            unset($_SESSION['msg']);
       }
       
             
       
       echo "<b>PRODUTOS CADASTRADOS</b>"."<br>";
       $result_produto = "SELECT * FROM produto";
       $resultado_produto = mysqli_query($conn, $result_produto);
       while ($row_produto = mysqli_fetch_assoc($resultado_produto)) {
           
           echo "<b>Codigo</b>: " . $row_produto['codigo_produto'] . "<br>";
           echo "Descricao: " . $row_produto['descricao'] . "<br>";
           echo "Quantidade: " . $row_produto['quantidade'] . "<br>";
           echo "Valor: " . $row_produto['valor'] . "<br>";
           echo "Margem: " . $row_produto['margem'] . "<br>";
           "<hr>";           
       }
       ?>
<?php 
       "<hr>";
       
       if (isset($_SESSION ['msg'])) {
           echo $_SESSION ['msg'];
           unset($_SESSION['msg']);
       }
       echo "<b>FORNECEDORES CADASTRADOS</b>"."<br>";
       $result_fornecedor = "SELECT * FROM fornecedor";
       $resultado_fornecedor = mysqli_query($conn, $result_fornecedor);
       while ($row_fornecedor = mysqli_fetch_assoc($resultado_fornecedor)) {
           
           echo "<b>Codigo</b>: " . $row_fornecedor['codigo_fornecedor'] . "<br>";
           echo "Nome: " . $row_fornecedor['nome_fantasia'] . "<br>";
           echo "Email: " . $row_fornecedor['email'] . "<br>";
           "<br>";
           
       }
       print "<a href=estoque.php>Voltar</a>";
       ?>
       
       
       
=======

<?php
session_start();
include_once 'conexao.php';
?>


<?php 
$conn = mysqli_connect('localhost','root','root', 'login');
      
       if (isset($_SESSION ['msg'])) {
            echo $_SESSION ['msg'];
            unset($_SESSION['msg']);
       }
       
             
       
       echo "<b>PRODUTOS CADASTRADOS</b>"."<br>";
       $result_produto = "SELECT * FROM produto";
       $resultado_produto = mysqli_query($conn, $result_produto);
       while ($row_produto = mysqli_fetch_assoc($resultado_produto)) {
           
           echo "<b>Codigo</b>: " . $row_produto['codigo_produto'] . "<br>";
           echo "Descricao: " . $row_produto['descricao'] . "<br>";
           echo "Quantidade: " . $row_produto['quantidade'] . "<br>";
           echo "Valor: " . $row_produto['valor'] . "<br>";
           echo "Margem: " . $row_produto['margem'] . "<br>";
           "<hr>";           
       }
       ?>
<?php 
       "<hr>";
       
       if (isset($_SESSION ['msg'])) {
           echo $_SESSION ['msg'];
           unset($_SESSION['msg']);
       }
       echo "<b>FORNECEDORES CADASTRADOS</b>"."<br>";
       $result_fornecedor = "SELECT * FROM fornecedor";
       $resultado_fornecedor = mysqli_query($conn, $result_fornecedor);
       while ($row_fornecedor = mysqli_fetch_assoc($resultado_fornecedor)) {
           
           echo "<b>Codigo</b>: " . $row_fornecedor['codigo_fornecedor'] . "<br>";
           echo "Nome: " . $row_fornecedor['nome_fantasia'] . "<br>";
           echo "Email: " . $row_fornecedor['email'] . "<br>";
           "<br>";
           
       }
       print "<a href=estoque.php>Voltar</a>";
       ?>
       
       
       
>>>>>>> 3777e1d31a6eb0f1dc49b5206e1f16f728870e56
       