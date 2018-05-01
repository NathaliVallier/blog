<?php

require_once('conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM posts WHERE id_post = '$id'";

$result = pg_query($conexao, $sql);
if($result != false){
	if(pg_affected_rows($result) != 0){
		header('Location: index.php');
	}
}