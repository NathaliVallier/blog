<?php
	session_start();
	require_once('conexao.php');
	require_once 'listagem.php';
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);

	error_reporting(E_ALL);
?>
<!DOCTYPE html> 
<html>
<head>
	<title>Blog</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>

<?php if (isset($_SESSION['nome'])){  ?>

	<table class="table table-striped table-bordered">
		<tbody>	
			
			<p><b>Listagem</p></b>			

			<?php foreach ($result as $linha) { ?>
				<tr>
					<td>
						<a href="post.php?id=<?php echo $linha['id_post'];?>">
							<?php echo $linha['data'].' - '.$linha['titulo']; ?>
						</a>
					</td>
					<td>
						<a class="btn btn-success" href="editar.php?id=<?php echo $linha['id_post']?>">
							Editar
						</a>
					</td>
					<td>
						<a class="btn btn-danger" href="excluir.php?id=<?php echo $linha['id_post'] ?>">
							Excluir post
						</a>
					</td>
				</tr>
			<?php } ?>

			<form action ="logout.php" method="post" value="Encerrar">
				
				<input type="submit" name="logout" value="Encerrar sessão"><br><br>

			</form>
			
			<form action="novo_post.php" method="post" value="Novo post">
				<input type="submit" name="Novo" value="Novo post"><br>
			</form>
			
		</tbody>
	</table>

<?php
	} else {
?>

	<center>
		<form action="login.php" method="post">
			Digite seu e-mail: <br>
			<input type="email" name="email"><br>
		
			Digite sua senha: <br>
			<input type="password" name="senha"><br><br>
	
			<input type="submit" value="Enviar">
		</form>
	</center>
<?php
	}
?>

</body>
</html>