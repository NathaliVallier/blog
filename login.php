<?php
	session_start();
	
	require_once('conexao.php');
	
	$email=$_POST['email'];
	$senha=$_POST['senha'];

	$sql = "SELECT * from usuarios where email = '$email' AND senha = '$senha'";


	$result = pg_query($conexao, $sql);
	//var_dump(pg_num_rows($result));die;
	
	if(pg_num_rows ($result) != 0){		
		$dados = pg_fetch_array($result);
		$_SESSION['nome'] = $dados['nome'];
		header("Location:index.php");		
	
	} else 
		header("Location:index.php");


?>
