<?php
	const IDIOMAS_PERMITIDOS = ['es', 'ca'];
	//definir una idioma por defecto
	$idioma = 'es';
	//asignar el idioma por defecto
	$idioma_navegador = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2 );
	//comprobar
	if (in_array($idioma_navegador, IDIOMAS_PERMITIDOS)){
		$idioma = $idioma_navegador;
	}
	//asignar el idioma guardado en la cookie (en caso de que exista)
	if (isset($_COOKIE['idioma'])){
		if (in_array($_COOKIE['idioma'], IDIOMAS_PERMITIDOS)){
			$idioma = $_COOKIE['idioma'];
		}else{
			//borramos cookies si esta mal
			setcookie('idioma', null, time() -1, '/');
		}
	}
	//asignar el idioma selecionado por el usuario en los enlaces y guardar lo en la cookie 
	if(isset($_GET['idioma'])){
		//verivicar que elnidioma que llegue es correcto
		if (in_array($_GET['idioma'], IDIOMAS_PERMITIDOS)){
			$idioma = $_GET['idioma'];
			setcookie('idioma', $idioma, time() +3600*24*365, '/');
		}
		
	}
	//incorporar el fichero de idioma
	require("idiomas/idioma_$idioma.php");
?>