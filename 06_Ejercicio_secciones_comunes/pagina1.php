<?php
	require('idiomas/multiidioma.php');
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>include</title>
		<meta charset='UTF-8'>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
	</head>
	<body>
		<?php require('secciones/header.php'); ?>	
		<?php require('secciones/navbar.php'); ?>
			
		<section>
			<?php readfile("idiomas/seccion_pagina1_$idioma.php"); ?>
		</section>	
		<?php require('secciones/footer.html'); ?>
	</body>
</html>
