<?php
$arq = $_FILES;
$tipos = $arq['arquivo']['type'];
$arr_tipos = ['image/jpeg','image/png','image/BMP','image/SVG'];

try {
	foreach ($arr_tipos as $key) {
		if ($tipos == $key) {
			move_uploaded_file($arq['arquivo']['tmp_name'],'img/imagem.jpg');
			echo "<script>alert('Imagem carregada com sucesso.')</script>";	
		} else {
			echo "<script>alert('Arquivo Inapropriado.')</script>";
		}
	}
} catch(Exception $e){
	echo 'Erro: ',  $e->getMessage();
} finally {
	header('Location: index.php');
	exit();
}




