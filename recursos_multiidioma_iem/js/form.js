function validaFormulario() {
	var text="";
	var error=false;

	if($("#nombre").val() == "") {
		//validar nombre informado
		text=(nombreFalta + "\n");
		error=true;
	}

	if($("#email").val() == "") {
		//validar email informado
		text=(text + emailFalta + "\n");
		error=true;
	} else {
		//validar email correcto
		if (!/^\w+([\.-]\w+)*@\w+([\.-]\w+)*$/.test($("#email").val())) {
			text=(text + emailNo_valid + "\n");
			error=true;
		}
	}

	if($("#mensaje").val() == "") {
		text=(text + msgFalta + "\n");
		error=true;
	} 

	if (!document.getElementById('privacidad').checked) {
		text=(text + validarPrivacidad);
		error=true;
	};

	if (error==true) {
		text=(revisarDatos + text + "\n\n");
	}

	if (error==true) {
		alert(text);
	} else {
		$('#form').submit();
	}
}