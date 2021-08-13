<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cadastro de fornecedores</title>
	<link rel="stylesheet" type="text/css" href="css/estilo3.css">
</head>
<body>

	<div id="corpo-form"> 
    <form class="criar-tarefa" enctype="multipart/form-data" action="cadastrarfornecedor.php" method="post">
       <h1>Cadastro de fornecedores</h1>
       <form action="cadastrarfornecedor.php" method="post">
		<input type="text" name="nome_fantasia"placeholder="Nome Fantasia" maxlength="50">
		<input type="text" name="email" placeholder="Email" maxlength="30">
		<input type="text" name="telefone" placeholder="Telefone" maxlength="50">
		<input type="text" name="endereco_completo" placeholder="Endereco completo" maxlength="100">
		<input class="btn btn-primary btn-lg" type="submit" value="Cadastrar fornecedor" id="cadastrar" name="cadastrar"><br><br>
    </form>


	</div>
</body>
</html>
