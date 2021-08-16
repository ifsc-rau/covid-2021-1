<<<<<<< HEAD
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cadastro de venda</title>
	<link rel="stylesheet" type="text/css" href="css/estilo1.css">
</head>
<body>

	<div id="corpo-form"> 
    <form class="criar-tarefa" enctype="multipart/form-data" action="cadastrarvenda.php" method="post">
       <h1>Cadastro de venda</h1>
       <form action="cadastrarvenda.php" method="post">
       	<input type="text" name="descricao"placeholder="Descrição" maxlength="50">
       	<input type="text" name="quantidade"placeholder="Quantidade" maxlength="50">
		<input type="text" name="valor"placeholder="Valor" maxlength="50">
		<input type="text" name="data" placeholder="Data" maxlength="30">
		<input type="text" name="numero_nota_fiscal" placeholder="Numero nota fiscal" maxlength="50">
		<input type="text" name="margem" placeholder="Margem" maxlength="50">
		<input type="text" name="codigo_venda" placeholder="Codigo do produto" maxlength="50">
		<input class="btn btn-primary btn-lg" type="submit" value="Cadastrar venda" id="cadastrar" name="cadastrar"><br><br>
    </form>


	</div>
</body>
=======
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cadastro de venda</title>
	<link rel="stylesheet" type="text/css" href="css/estilo1.css">
</head>
<body>

	<div id="corpo-form"> 
    <form class="criar-tarefa" enctype="multipart/form-data" action="cadastrarvenda.php" method="post">
       <h1>Cadastro de venda</h1>
       <form action="cadastrarvenda.php" method="post">
       	<input type="text" name="descricao"placeholder="Descrição" maxlength="50">
       	<input type="text" name="quantidade"placeholder="Quantidade" maxlength="50">
		<input type="text" name="valor"placeholder="Valor" maxlength="50">
		<input type="text" name="data" placeholder="Data" maxlength="30">
		<input type="text" name="numero_nota_fiscal" placeholder="Numero nota fiscal" maxlength="50">
		<input type="text" name="margem" placeholder="Margem" maxlength="50">
		<input type="text" name="codigo_venda" placeholder="Codigo do produto" maxlength="50">
		<input class="btn btn-primary btn-lg" type="submit" value="Cadastrar venda" id="cadastrar" name="cadastrar"><br><br>
    </form>


	</div>
</body>
>>>>>>> 3777e1d31a6eb0f1dc49b5206e1f16f728870e56
</html>