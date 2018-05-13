function guardarRegistro(){
	var parametros= "correo="+$("#txt-correo").val()+"&"+
					"contrasena="+$("#txt-contrasena").val()+"&"+
					"sexo="+$("#slc-sexo").val()+"&"+
					"edad="+$("#slc-edad").val();
	console.log(parametros);

	$.ajax({
		url:"ajax/api.php?accion=registrarse",
		method:"POST",
		data:parametros,
		dataType:"json",
		success:function(respuesta){
			alert('Se registro');
		}
	});
}