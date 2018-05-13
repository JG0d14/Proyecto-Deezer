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
	<title></title>
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
	 <!-- Sidebar -->
     <div class="sidenav">
        <center><img src="img/deezerhome.png" class="logo"></center>
        <div class="nav nav-main">
            <a class="nav-link" href="home.php">INICIO</a>
            <a class="nav-link" href="explorar.php">EXPLORAR</a>
            <a class="nav-link" href="recomendaciones.php">RECOMENDACIONES</a>
        </div>
        <div class="nav-divider"></div>
        <div class="nav nav-main">
            <div class="nav-submenu"><i class="fas fa-user-circle nav-icons"></i><a class="nav-submenulink" href="#">Mi Musica</a><a href="formularioperfil.php" style="padding-left: 100px;"><i class="fas fa-cog nav-icons"></i></a></div>
            <div class="nav-submenu"><i class="fas fa-heart nav-icons"></i><a class="nav-submenulink" href="#">Mis Favoritas</a></div>
            <div class="nav-submenu"><i class="fas fa-music nav-icons"></i><a class="nav-submenulink" href="#">Playlists</a></div>
            <div class="nav-submenu"><i class="fas fa-dot-circle nav-icons"></i><a class="nav-submenulink" href="#">Albumes</a></div>
            <div class="nav-submenu"><i class="fas fa-clock nav-icons"></i><a class="nav-submenulink" href="#">Actividad</a></div>
            <div class="nav-submenu"><i class="fas fa-podcast nav-icons"></i><a class="nav-submenulink" href="#">Aplicaciones</a></div>
          <div class="nav-submenu"><a class="nav-submenulink" href = "logout.php">Cerrar Sesion</h1></div>
          <audio class="reproductor" src="music/Metallica - Master of Puppets (1986)/01 - Battery.mp3" controls id="reproductor"></audio>
        </div>
     </div>

     <!-- Contenido -->
    <div class="main">
    	<div class="container">
    		<article  class="card">
    			<figure class="visual">
    				<figure class="playlist-img">
    					<img class="picture-link" src="img/thumbnails/best-hiphop.jpg">
    				</figure>
    			</figure>
    			<div class="info-playlist">
    				<div class="sticker">PLAYLIST</div>
    				<h3>
    					<div class="heading-3"><a class="link-heading" href="#">Hot Hip-hop, R&B</a></div>
    					<div class="heading-4"><a class="link-heading" href="#">de Deezer Editors - Playlists Archives</a></div>
    				</h3>
    				<div class="info-down-playlist">
    					<div class="heading-5">Con los artistas:</div>
    					<div class="heading-5-sub">Snoop Dogg, Drake, Wiz Khalifa, The-Dream, Solange, Rihanna, Punnany Massif, Nicki Minaj, Miguel, Majka & Pápai Joci y más.</div>
    				</div>
    			</div>
    		</article>

            <article class="card">
             <div>
                <figure class="visual2">
                    <figure class="album-img">
                        <img style="width: 100%" class="picture-link" src="music/Metallica - Master of Puppets (1986)/cover.jpg">
                    </figure>               
                </figure>
                <div class="info">
                    <div class="sticker">ÁLBUM</div>
                    <div class="title-separ">Y si escuchas:</div>
                    <h3>
                        <div class="heading-3"><a class="link-heading" href="#">Master of Puppets</a></div>
                        <div class="heading-4"><a class="link-heading" href="#">de Metallica</a></div>
                    </h3>
                    <div class="info-down">
                        <figure class="thumbnail-bordered">
                            <img class="picture-link" src=""> 
                        </figure>
                        <div class="details">
                            <div class="heading-4"><a class="link-heading heading-5" href="#">Discografia</a></div>
                            <div class="heading-5-sub">One</div>
                        </div>
                    </div>
                </div>          
              </div>    
            </article>


    		<article class="card">
    		 <div>
    		 	<figure class="visual2">
    				<figure class="album-img">
    				    <img class="picture-link" src="img/thumbnails/superslimey.jpg">
    				</figure>  				
    			</figure>
    			<div class="info">
    				<div class="sticker">ÁLBUM</div>
    				<div class="title-separ">Y si escuchas:</div>
    				<h3>
    					<div class="heading-3"><a class="link-heading" href="#">SUPER SLIMEY</a></div>
    					<div class="heading-4"><a class="link-heading" href="#">de Future, Young Thug</a></div>
    				</h3>
    				<div class="info-down">
    					<figure class="thumbnail-bordered">
    						<img class="picture-link" src="img/thumbnails/future.jpg"> 
    					</figure>
    					<div class="details">
    						<div class="heading-4"><a class="link-heading heading-5" href="#">Discografia</a></div>
    						<div class="heading-5-sub">Skeleton XXV Project Volume Three, SUPER SLIMEY </div>
    					</div>
    				</div>
    			</div>			
    		  </div>	
    		</article>

    	</div>
    </div>

 
</body>
</html>