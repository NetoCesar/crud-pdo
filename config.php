<?php 

$user = "root";
$pass = 123;
try{
	$pdo= new pdo('mysql:host=localhost;dbname=well',$user,$pass);	
}catch(PDOExeption $e){
	echo $e->getMessage();
}
?>