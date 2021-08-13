<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cadastro de produto</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	
	<div id="corpo-form"> 
    <form class="criar-tarefa" enctype="multipart/form-data" action="cadastrarproduto.php" method="post">
       <h1><b>Cadastro de produto</b></h1>
       <form action="cadastrarproduto.php" method="post">
		<input type="text"  name="descricao"placeholder="Descrição" maxlength="50">
		<input type="text" name="quantidade" placeholder="Quantidade" maxlength="30">
		<input type="text" name="valor" placeholder="Valor" maxlength="50">
		<input type="text" name="margem" placeholder="Margem" maxlength="15">
		<input class="btn btn-secondary btn-lg" type="submit" value="Cadastrar Produto" id="cadastrar" name="cadastrar"><br><br>
    </form>


	</div>
</body>
</html>