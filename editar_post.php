<?php
session_start();
require_once('conexao.php');
$titulo 	= $_POST['titulo'];
$descricao 	= $_POST['descricao'];
$data 		= $_POST['data'];
$id         = $_POST['id'];

$sql = "UPDATE posts set titulo = '$titulo', descricao = '$descricao', data = '$data' where id_post = '$id'";

$result = pg_query($conexao, $sql);
if($result != false){
	if(pg_affected_rows($result) != 0){
		header('Location: index.php');
	}
}
else {
	header("Location:editar.php?id=".$id);
}