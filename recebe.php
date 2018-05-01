<?php
session_start();
require_once('conexao.php');
ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);

	error_reporting(E_ALL);

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];

$sql = "INSERT INTO posts (titulo, descricao, data) VALUES ('$titulo', '$descricao', '$data')";

$result = pg_query($conexao, $sql);

if($result != false){
	if(pg_affected_rows($result) != 0){
		header('Location: index.php');
	}
} 