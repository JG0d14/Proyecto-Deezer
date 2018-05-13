
function guardarRegistro(){
	var parametros= "correo="+$("#txt-correo").val()+"&"+
					"contrasena="+$("#txt-contrasena").val()+"&"+
					"sexo="+$("#slc-sexo").val()+"&"+
					"edad="+$("#slc-edad").val();

	$.ajax({
		url:"ajax/api.php?accion=registrarse",
		method:"POST",
		data:parametros,
		dataType:"json",
		success:function(respuesta){
			console.log(respuesta);
		}
	});
}



$("#btn-login").click(function(){
    var parametros = "correo="+$("#correo").val()+"&contrasena="+$("#contrasena").val();
    console.log(parametros);

    $.ajax({
        url:"ajax/login.php",
        method:"POST",
        data: parametros,
        dataType:"json",
        success:function(respuesta){
            console.log(respuesta);
            if (respuesta.codigoResultado==0 && respuesta.codigo_tipo_usuario == 2)
                window.location.href = "home.php";//console.log("Usuario autorizado");
            else if (respuesta.codigoResultado==0 && respuesta.codigo_tipo_usuario == 1)
                window.location.href = "pag-admin.php";//console.log("Usuario autorizado");
        }
    });
});