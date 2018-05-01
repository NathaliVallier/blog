<?php

require_once ('conexao.php');

$id = $_GET ['id'];
$sql = "SELECT * from posts where id_post = '$id'";

$result = pg_query($conexao, $sql);

if($result != false){
		if(pg_num_rows($result) > 0){
			$result = pg_fetch_assoc($result);
		}
	}

