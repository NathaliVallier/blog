<?php
session_start();

?>

<!DOCTYPE html> 
<html>
<head>
	<title>Novo post</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<?php
if(isset($_SESSION['nome'])){
	?>
<div class="container-fluid">
	<form action="recebe.php" method="post">
	Título: <br>
	<input type="text" name="titulo" id='titulo' style="width: 600px;"><br>
	Texto: <br>
	<input type="text" name="descricao" id='descricao' style="width: 600px; height: 200px;"><br>
	Data: <br>
	<input type="text" name="data" id='data' style="width: 600px"> <br>
	<input type="submit" class="btn btn-primary" value="Postar">
	</form>
</div>
	<?php
}else{
	header('Location:index.php');
}
?>

</body>
</html>