<?php 
require_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action="add.php" method="POST">
		Filme: <input type="text" name="nome">
		Ano de Estréia: <input type="number" name="ano">
		<input type="submit">
	</form>
</body>
</html>