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
       
       echo "<b>VENDAS CADASTRADAS</b>"."<br>";
       $result_venda = "SELECT * FROM venda";
       $resultado_venda = mysqli_query($conn, $result_venda);
       while ($row_venda = mysqli_fetch_assoc($resultado_venda)) {
           
           echo "Descricao: " . $row_venda['descricao'] . "<br>";
           echo "Quantidade: " . $row_venda['quantidade'] . "<br>";
           echo "Valor: " . $row_venda['valor'] . "<br>";
           echo "Data: " . $row_venda['data'] . "<br>";
           echo "Numero Nota fiscal: " . $row_venda['numero_nota_fiscal'] . "<br>";
           echo "Margem: " . $row_venda['margem'] . "<br>";
           echo "Codigo: " . $row_venda['codigo_venda'] . "<br>";           
           "<br>"; 
           
       }
       print "<a href=estoque.php>Voltar</a>";
       ?>
