<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<label>ENVIE</label>
		<br>
		<input type="file" name="arquivo">
		<br>
		<input type="submit" value="Enviar">		
	</form>
	<?php
		session_start();
		$_SESSION['foto'] = file_exists('img/imagem.jpg');

		if ($_SESSION['foto']) {
			?>
				<img src="img/imagem.jpg" alt="">
			<?php
		} 
	?>
	
</body>
</html>