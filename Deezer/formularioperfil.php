<?php 
    session_start();
    if (!isset($_SESSION["usr"]) || !isset($_SESSION["psw"]))
        header("Location: index.php");

    include("class/class-conexion.php");
    $conexion = new Conexion();
     $sql = sprintf( 
        "SELECT codigo_usuario, codigo_tipo_usuario, ". 
            "correo, nombre, contrasena FROM tbl_usuarios ".
        "WHERE correo = '%s' and contrasena = '%s' and codigo_tipo_usuario = 2",
        $_SESSION["usr"],
        $_SESSION["psw"]
    );
    //echo $sql;
    //exit;
    $resultado = $conexion->ejecutarConsulta($sql);
    $respuesta = array();
    if ($conexion->cantidadRegistros($resultado)<=0){
           header("Location: index.php");
    }
    

?>


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- Custom -->
	<link rel="stylesheet" type="text/css" href="css/formulario.css">

	<title></title>
</head>

<body>
	

	<div class="container">
	  <div class="wrapper">
	   <div style="padding: 24px">	
		<div class="row">
			<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
	             <img src="img/usuario.png">
	        </div>
	        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12">
	        	<h2 class="heading-2" style="margin-bottom: 24px; padding-bottom: 16px; font-size: 18px; letter-spacing: .25px;">Mi Oferta</h2>
	        	<div class="row">
	        		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
	        			<h1 style="font-size: 12px;">Actualmente disfrutas de la versión gratuita de Deezer.</h1>
	        		</div>
	        		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
	        			<button class="btn-suscripcion" type="button">Gestionar mi suscripcion</button>
	        		</div>
	        		<div class="col-xl-12 col-lg-12">
	        			<h1 class="heading-2" style="font-size: 18px; letter-spacing: .25px; padding-bottom: 16px; padding-top: 24px;">Conectarse</h1>
	        		</div>
	        		<div class="col-xl-3 col-lg-3">
	        		    <div style="margin-top: 2px">
	        			   <h2 class="label-text">Tu correo electrónico:</h2>
	        		    </div>
	        		</div>
	        		<div class="col-xl-3 col-lg-3">
	        			<input class="input-form1" type="text" placeholder="Correo">
	        		</div>
	        		<div class="col-xl-6 col-lg-6">
	        			<button class="btn-suscripcion" type="button">Modificar</button>
	        		</div>
	        		<div class="col-xl-3 col-lg-3">
	        		    <div style="margin-top: 2px">
	        			   <h2 class="label-text">Tu contraseña:</h2>
	        		    </div>
	        		</div>
	        		<div class="col-xl-3 col-lg-3">
	        			<input class="input-form1" type="text" placeholder="Contraseña">
	        		</div>
	        		<div class="col-xl-6 col-lg-6">
	        			<button class="btn-suscripcion" type="button">Modificar</button>
	        		</div>
	        		<div class="col-xl-12 col-lg-12">
	        			<h1 class="heading-2" style="font-size: 18px; letter-spacing: .25px; padding-bottom: 16px; padding-top: 24px;">Datos visibles para otros usuarios</h1>
	        		</div>
	        		<div class="col-xl-3 col-lg-3">
	        		    <div style="margin-top: 2px">
	        			   <h2 class="label-text">Sexo:</h2>
	        		    </div>
	        		</div>
	        		<div class="col-xl-9 col-lg-9">
	        			<label><input class="btn-radio" type="radio" name="rbt-genero" value="F">  Hombre</label> 
					    <label><input class="btn-radio" type="radio" name="rbt-genero" value="M">  Mujer</label>
	        		</div>
	        		<div class="col-xl-3 col-lg-3">
	        		    <div style="margin-top: 2px">
	        			   <h2 class="label-text">Nombre de Usuario </h2>
	        		    </div>
	        		</div>
	        		<div class="col-xl-3 col-lg-3">
	        			<input class="input-form2" type="text" placeholder="Usuario">
	        		</div>
	        		<div class="col-xl-12 col-lg-12">
	        			<h1 class="heading-2" style="font-size: 18px; letter-spacing: .25px; padding-bottom: 16px; padding-top: 24px;">Datos privados</h1>
	        		</div>
	        		<div class="col-xl-3 col-lg-3">
	        		    <div style="margin-top: 2px">
	        			   <h2 class="label-text">Apellido(s)</h2>
	        		    </div>
	        		</div>
	        		<div class="col-xl-9 col-lg-9">
	        			<input class="input-form2" type="text">
	        		</div>
	        		<div class="col-xl-3 col-lg-3">
	        		    <div style="margin-top: 2px">
	        			   <h2 class="label-text">Nombre</h2>
	        		    </div>
	        		</div>
	        		<div class="col-xl-9 col-lg-9">
	        			<input class="input-form2" type="text">
	        		</div>
	        		<div class="col-xl-3 col-lg-3">
	        		    <div style="margin-top: 2px">
	        			   <h2 class="label-text">Fecha de nacimiento</h2>
	        		    </div>
	        		</div>
	        		<div class="col-xl-9 col-lg-9">
	        			<select class="form-control, combox, form-control-sm" name="slc-dia">
						    <option value="1">01</option>
						    <option value="2">02</option>
						    <option value="3">03</option>
						    <option value="4">04</option>
						    <option value="5">05</option>
						    <option value="6">06</option>
						    <option value="7">07</option>
						    <option value="8">08</option>
						    <option value="9">09</option>
						    <option value="10">10</option>
						    <option value="11">11</option>
						    <option value="12">12</option>
						    <option value="13">13</option>
						    <option value="14">14</option>
						    <option value="15">15</option>
						    <option value="16">16</option>
						    <option value="17">17</option>
						    <option value="18">18</option>
						    <option value="19">19</option>
						    <option value="20">20</option>
						    <option value="21">21</option>
						    <option value="22">22</option>
						    <option value="23">23</option>
						    <option value="24">24</option>
						    <option value="25">25</option>
						    <option value="26">26</option>
						    <option value="27">27</option>
						    <option value="28">28</option>
						    <option value="29">29</option>
						    <option value="30">30</option>
						    <option value="31">31</option>

					    </select>
					    <select class="form-control, combox, form-control-sm" name="slc-mes">
						<option value="1">01</option>
						    <option value="2">02</option>
						    <option value="3">03</option>
						    <option value="4">04</option>
						    <option value="5">05</option>
						    <option value="6">06</option>
						    <option value="7">07</option>
						    <option value="8">08</option>
						    <option value="9">09</option>
						    <option value="10">10</option>
						    <option value="11">11</option>
						    <option value="12">12</option>
					    </select>
					    <select class="form-control, combox, form-control-sm" name="slc-mes">
						    <option value="1">2017</option>
						    <option value="2">2016</option>
						    <option value="3">2015</option>
						    <option value="4">2014</option>
						    <option value="5">2013</option>
						    <option value="6">2012</option>
						    <option value="7">2011</option>
						    <option value="8">2010</option>
						    <option value="9">2009</option>
						    <option value="10">2008</option>
						    <option value="11">2007</option>
						    <option value="12">2006</option>
					</select>
	        	    </div>
	        	    <div class="col-xl-3 col-lg-3">
	        		    <div style="margin-top: 2px">
	        			   <h2 class="label-text">Direccion</h2>
	        		    </div>
	        		</div>
	        		<div class="col-xl-9 col-lg-9">
	        			<input class="input-form2" type="text">
	        		</div>
	        	    <div class="col-xl-3 col-lg-3">
	        		    <div style="margin-top: 2px">
	        			   <h2 class="label-text">Codigo Postal</h2>
	        		    </div>
	        		</div>
	        		<div class="col-xl-9 col-lg-9">
	        			<input class="input-form2" type="text">
	        		</div>
	        		<div class="col-xl-3 col-lg-3">
	        		    <div style="margin-top: 2px">
	        			   <h2 class="label-text">Ciudad</h2>
	        		    </div>
	        		</div>
	        		<div class="col-xl-9 col-lg-9">
	        			<input class="input-form2" type="text">
	        		</div>
	        		<div class="col-xl-3 col-lg-3">
	        		    <div style="margin-top: 2px">
	        			   <h2 class="label-text">Movil</h2>
	        		    </div>
	        		</div>
	        		<div class="col-xl-9 col-lg-9">
	        			<input class="input-form2" type="text">
	        		</div>
	        		<div class="col-xl-3 col-lg-3">
	        		    <div style="margin-top: 2px">
	        			   <h2 class="label-text">Idioma</h2>
	        		    </div>
	        		</div>
	        		<div class="col-xl-9 col-lg-9">
	        			<select class="form-control, combox" name="slc-mes">
						    <option value="1">Español</option>
					    </select>
					    
	        		</div>

<a href="home.php">Volver a inicio</a>
	        	</div>
	        </div>
	    </div>
	   </div>
	  </div>

	</div>

</body>
</html>