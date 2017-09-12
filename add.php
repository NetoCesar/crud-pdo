<?php 
require 'config.php';

$filme = $_POST['nome'];
$ano = $_POST['ano'];

$inserir=$pdo->prepare("INSERT INTO filmes(nome,ano) values(:nome,:ano)");
$inserir->bindValue(":nome",$filme);
$inserir->bindValue(":ano",$ano);
$inserir->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="form.php">Voltar</a>
</body>
</html>