<?php
session_start();
require_once ('listarpost.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<title>Editar post</title>
</head>

<body>
<?php if(isset($_SESSION['nome'])) { ?>
	<table class="table table-striped table-bordered">
		<tbody>	



	<center>
		<form action="editar_post.php" method="post">
			<div class="form-group">
				<label for="email">Título</label>
				<input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $result['titulo']?>">
			</div>
			<div class="form-group">
				<label for="email">Descrição</label>
				<input type="text" class="form-control" name="descricao" id="descricao" value="<?php echo $result['descricao']?>">
			</div>
			<div class="form-group">
				<label for="email">Data</label>
				<input type="text" class="form-control" name="data" id="data" value="<?php echo $result['data']?>">
			</div>
			<input type="hidden" name="id" value="<?php echo $result['id_post'];?>">
			<button type="submit" class="btn btn-primary">Editar</button>
		</form>
	</center>
	<?php
}else{
	header('Location:index.php');
}
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>