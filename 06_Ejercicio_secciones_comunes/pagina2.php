<?php
	require('idiomas/multiidioma.php');
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>include</title>
		<meta charset='UTF-8'>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
	</head>
	<body>
		<?php require('secciones/header.php'); ?>	
		<?php require('secciones/navbar.php'); ?>	
		<section><h2><?=$seccion_pagina2?></h2><img src="img/img1.jpg">
		<form action="">
			<input type="text" id="nombre">
			<input type="button" value="Enviar" onclick="validar()" >
		</form>
	</section>		
		<?php require('secciones/footer.html'); ?>	
		<script src="js/script.js"></script>
		<script src="idiomas/idioma_<?=$idioma?>.js"></script>
		
	</body>
</html>