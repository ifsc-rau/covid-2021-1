<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cadastro de clientes</title>
	<link rel="stylesheet" type="text/css" href="css/estilo2.css">
</head>
<body>

	<div id="corpo-form"> 
    <form class="criar-tarefa" enctype="multipart/form-data" action="cadastrarcliente.php" method="post">
       <h1>Cadastro de clientes</h1>
       <form action="cadastrarcliente.php" method="post">
		<input type="text" name="nome"placeholder="Nome" maxlength="50">
		<input type="text" name="sexo" placeholder="Sexo" maxlength="30">
		<input type="text" name="cpf" placeholder="Cpf" maxlength="50">
		<input type="text" name="razao_social" placeholder="Razao social" maxlength="50">
		<input type="text" name="cnpj" placeholder="Cnpj" maxlength="50">
		<input type="text" name="telefone" placeholder="Telefone" maxlength="50">
		<input type="text" name="email" placeholder="Email" maxlength="50">
		<input type="text" name="endereco" placeholder="Endereço" maxlength="100">
		<input class="btn btn-secondary btn-lg" type="submit" value="Cadastrar Cliente" id="cadastrar" name="cadastrar"><br><br>
    </form>


	</div>
</body>
</html>