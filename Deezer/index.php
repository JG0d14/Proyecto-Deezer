<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title></title>
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
		<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
	</head>
<body class="img-body" style="background-image: url(img/fondo.jpg)">
	<div>
			<header class="encabezado">
				
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-3 col-3">
							<div>
								<img  src="img/deezerlogo.png" >
								<a class="button" href="register_email.php">Registrarse</a>
							</div>
						</div>
					</div>			
			</header>
			<main >
				<div  class="main-contenido">
					   <div class="letras" >
					   	 <div>
					   	 	<h1 style="margin-bottom: 10px; font-weight: 700; letter-spacing: .25px;">¿Qué vas a escuchar hoy?</h1>
					   	 </div>
					  
					   <div>
					   		 <h1 style="font-size: 20px;">Escucha las canciones de tu Flow en Deezer <br> y descubre las colecciones de música por género.</h1>
					   </div>
					</div>
					<div style="width: 100vw; height: 61vh; width: 275px; margin: 0 auto;">
						<div  >
							<div>
							<button class="button-facebook"><i class="fab fa-facebook-f" style="color: white"></i>|&nbsp;&nbsp;Facebook </button>
							<button class="button-google"><i class="fab fa-google" style="color: #DC143C"></i>|&nbsp;&nbsp;&nbsp;&nbsp;  Google </button>
					    		
					    	</div>
						</div>
						<br>
						<form action="">
						<div>
							<input class="index-input" id="correo" type="text" placeholder="Correo electrónico" required>
						</div>
						<div>
							<input class="index-input" id="contrasena" type="password" placeholder="Contraseña" required>
						</div><br>
						<div>
							<button id="btn-login" class="btn-conectarse">Conectarse</button>
						</div>
						</form>
				    </div>
				</div>
			</main>
			<footer style="margin-top:auto; width: 100%; height: 20px;text-align: center; ">
				2004-2018 derechos reservados
			</footer>
		</div>
		
		
		<script src="js/jquery.min.js"></script>
        <script src="js/controlador.js"></script>	
		
	</body>
</html>