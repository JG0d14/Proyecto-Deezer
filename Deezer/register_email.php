<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title></title>
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
		<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<link  type="text/css" href="css/estilos.css" rel="stylesheet">
	</head>
<body class="img-body" style="background-image: url(img/fondo.jpg)">
	<div>
			<header class="encabezado">
				
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-3 col-3">
							<div>
								<img  src="img/deezerlogo.png" >
								<a class="button" href="index.php">Conectarse</a>
							</div>
						</div>
					</div>			
			</header>
			<main >
				<div  class="main-contenido">
					   <div class="letras" >
					   	 <div>
					   	 	<h1 style="margin-bottom: 10px; font-weight: 700; letter-spacing: .25px;">Escucha tu música, sin límites. <br> Donde quieras, cuando quieras.</h1>
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

						<form method="GET" action="procesar.php">
						    <div>
							    <input class="index-input" id="txt-correo" type="text" name="txt-correo" placeholder="Correo electrónico" required>
						    </div>
						    <div>
							    <input class="index-input" id="txt-contrasena" type="password" name="txt-contrasena" placeholder="Contraseña" required>
						    <div>
							    <select id="slc-sexo" name="slc-sexo" class="select-register" required>					
								    <option value="1">Sexo</option>
								    <option value="2">Mujer</option>
								    <option value="3">Hombre</option>
							    </select>
							    <select id="slc-edad" name="slc-edad" class="select-register" required>					
								    <option value="0">Edad</option>
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

							    </select>
						    </div>
						    <div><br>
							    <input id="btn-guardar" type="button" value="Registrarse" class="btn btn-primary btn-conectarse" onclick="guardarRegistro();">
						    </div>
                        </form>
						<div class="index-link">
							<a href="register_num.html" style="color: #efeff2;">Registrarse con un numero de telefono</a>
						</div>
				    </div>
				</div>
			</main>
			<footer style="margin-top:auto; width: 100%; height: 20px;text-align: center; ">
				2004-2018 derechos reservados
			</footer>
		</div>
		
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/controlador.js"></script>
	</body>
</html>