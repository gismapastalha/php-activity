<?php
	require('idiomas/multiidioma.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>IEM</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/page.css" type="text/css" />
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script src="js/page.js" type="text/javascript"></script>
	<script src="js/form.js" type="text/javascript"></script>
	<script src="idiomas/idioma_<?=$idioma?>.js" type="text/javascript" defer ></script>
</head>
<body>
	<?php require('secciones/header.html');?>>
	<div class="wraper">
		<?php require('secciones/navbar.html');?>
		<div class="content">
			<div class="slider" >
				<img src="img/iem_3.jpg" /><img src="img/iem_4.jpg" />
		    </div>

		    <div class="sections">
		    	<h1 style="text-align:center"><?=$contact_titulo?></h1><br><br>
		    	<div class="contacto">
					<h2><?=$contact_h2?></h2>
					<p><?=$contact_p?></p><br>
					<form id="form" name="form" method="get" action='#'>
						<label for="nombre"><?=$contact_nombre?></label><input type="text" name="nombre" autofocus id="nombre" /><br><br>
						<label for="email"><?=$contact_email?></label><input type="email" name="email" id="email" placeholder="nom@mail.com" /><br><br>
						<label for="telefono"><?=$contact_telef?></label><input type="tel" name="telefono" id="telefono"><br><br>
						<label><?=$contact_msg?></label><br><br>
						<textarea id="mensaje" name="mensaje" placeholder="<?=$contact_holder?>" ></textarea><br><br>
						<span><?=$contact_polit?></span><br><br>
						<input id="privacidad" type="checkbox" name="privacidad">&nbsp&nbsp
						<span id='ver' onclick="muestraAlert()"><?=$contact_ver?></span><br><br>
						<input id="enviar" type="button" name="enviar" value="Enviar" onclick="validaFormulario()"/><br>
					</form>
					
					<div id="alerta">
						<span id="alertatext"><?=$contact_alert?><br><br>
						<input type="button" onclick="ocultaAlert()"/>
					</div>
				</div>
		    </div>
		    <br><br>
		</div>
	
		<?php require('secciones/footer.html');?>
	</div>
</body>
</html> 
