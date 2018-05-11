
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<div class="div-admin" style="background-image: url(img/fondo-admin.jpg);">
		<h1 style="text-align: center; color:  #f5f5dc;background-color: black;"><i class="fas fa-headphones"></i>&nbsp;Bienvenido ADMINISTRADOR&nbsp;<i class="fas fa-headphones"></i></h1>
	</div>
	<br>
<div class="container">
	<div class="row" style="">
		<div class="col-xl-4" style="margin-left: auto; margin-right: auto;">
			<button class="btn btn-info" id="btn-artista">Agregar Artista</button>
		</div>
		<br>
		<br>
		<div class="col-xl-4" style="margin-left: auto; margin-right: auto;">
			<button class="btn btn-info" id="btn-album">Agregar Album</button>
		</div>
		<br>
		<br>
		<div class="col-xl-4" style="margin-left: auto; margin-right: auto;">
			<button class="btn btn-info" id="btn-cancion">Agregar Cancion</button>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-4 " style="display: none;" id="div-artista">
			<br>
			<br>
			<table class="table table-striped table-hover" style="width: 370px">

					<tr>
						<td>Nombre del Artista:</td>
						<td><input class="form-control" type="text" name="txt-nombre" id="txt-nombre" size="20" placeholder="" value=""></td>
					</tr>
					
					<tr>
						<td>URL de la imagen:</td>
						<td><input class="form-control" type="text" name="txt-UrlImagen" id="txt-imagen" size="20" placeholder="URL de la imagen" value=""></td>
					</tr>
					<tr>
						<td colspan="2">
							<input class="btn btn-primary" type="submit" id="btn-enviarArtista" value="Enviar información" name="btn-enviar">
						</td>
					</tr>			
				</table>
		</div>
		<br>
		<div class="col-xl-4" id="div-album" style="display: none;">
			<br>
			<br>
			<table class="table table-striped table-hover" style="width: 370px;">

					<tr>
						<td>Nombre del Artista:</td>
						<td><input class="form-control" type="text" name="txt-nombreArtista" id="txt-nombreArtista" size="20" placeholder="" value=""></td>
					</tr>
					<tr>
						<td>Nombre del Album:</td>
						<td><input class="form-control" type="text" name="txt-album" id="txt-album" size="20" placeholder="" value=""></td>
					</tr>
					<tr>
						<td>Genero:</td>
						<td><input class="form-control" type="text" name="txt-genero" id="txt-genero" size="20" placeholder="" value=""></td>
					</tr>
					<tr>
						<td>Duracion del album:</td>
						<td><input class="form-control" type="text" name="txt-duracion" id="txt-duracion" size="20" placeholder="" value=""></td>
					</tr>
					<tr>
						<td>Cantidad de canciones:</td>
						<td><input class="form-control" type="text" name="txt-duracion" id="txt-duracion" size="20" placeholder="" value=""></td>
					</tr>
					<tr>
						<td>URL de la imagen:</td>
						<td><input class="form-control" type="text" name="txt-UrlImagen" id="txt-imagen" size="20" placeholder="URL de la imagen" value=""></td>
					</tr>
					<tr>
						<td colspan="2">
							<input class="btn btn-primary" type="submit" id="btn-enviarAlbum" value="Enviar información" name="btn-enviar">
						</td>
					</tr>			
				</table>
		</div>
		<br>
		<div class="col-xl-4" id="div-cancion" style="display: none;">
			
			<br>
			<br>
			<table class="table table-striped table-hover" style="width: 370px">

					<tr>
						<td>Nombre de la Cancion:</td>
						<td><input class="form-control" type="text" name="txt-nombreCanion" id="txt-cancion" size="20" placeholder="" value=""></td>
					</tr>
					<tr>
						<td>Nombre del Artista:</td>
						<td><input class="form-control" type="text" name="txt-nombreArtista" id="txt-nombreArtista" size="20" placeholder="" value=""></td>
					</tr>
					<tr>
						<td>Nombre del Album:</td>
						<td><input class="form-control" type="text" name="txt-album" id="txt-album" size="20" placeholder="" value=""></td>
					</tr>
					<tr>
						<td>URL de la Cancion:</td>
						<td><input class="form-control" type="text" name="txt-UrlCancion" id="txt-UrlCancion" size="20" placeholder="URL de la Cancion" value=""></td>
					</tr>
					<tr>
						<td colspan="2">
							<input class="btn btn-primary" type="submit" id="btn-enviarCancion" value="Enviar información" name="btn-enviar">
						</td>
					</tr>			
				</table>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		

			$("#btn-artista").click(function(){
			$("#div-artista").fadeIn(500);
			});

			$("#btn-album").click(function(){
			$("#div-album").fadeIn(500);
			});

			$("#btn-cancion").click(function(){
			$("#div-cancion").fadeIn(500);
			});

			$("#btn-enviarArtista").click(function(){
			$("#div-artista").fadeOut(500);
			});

			$("#btn-enviarAlbum").click(function(){
			$("#div-album").fadeOut(500);
			});

			$("#btn-enviarCancion").click(function(){
			$("#div-cancion").fadeOut(500);
			});
	</script>
</body>
</html>