<?php
$conexao = pg_connect("host=localhost port=5433 dbname=postgresphp user=postgres password=naruto");

if ($conexao == false)
	echo 'Nao conectou';
?>

