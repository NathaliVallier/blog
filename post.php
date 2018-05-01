<?php
session_start();
require_once('listarpost.php');
?>
	
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title> <?php echo $result['titulo']; ?> </title>
</head>

	<body>
	<article>
	<?php
	if(isset($_SESSION['nome'])){	
	echo $result['data'].'<br>';
	echo $result['descricao'];
	?>
	</article>
	<a href="index.php">voltar</a>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	</body>

	</html>
	<?php
}else{
	header('Location:index.php');
}