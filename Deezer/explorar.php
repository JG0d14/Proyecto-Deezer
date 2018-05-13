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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
       <div class="container-fluid">
         <h1 class="heading-1">Todos los canales</h1>  
       </div>
       <section class="channel-section">
           <div class="container-fluid">
               <h2 class="heading-2">Destacados</h2>
           </div>
           <div class="heading-thumbnails container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="channel-card" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/popular.jpg">
                            </div>
                            <div class="title">
                                <p>Popular</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/lista_de_exitos.jpg">
                            </div>
                            <div class="title">
                                <p>Listas de éxitos</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/nuevos.jpg">
                            </div>
                            <div class="title">
                                <p>Nuevos lanzamientos</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/mixes.jpg">
                            </div>
                            <div class="title">
                                <p>Mixes</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/exclusivas.jpg">
                            </div>
                            <div class="title">
                                <p>Exclusivas de Deezer</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/lista_de_exitos.jpg">
                            </div>
                            <div class="title">
                                <p>Listas de éxitos</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                </div>    
           </div>
       </section>
       <section class="channel-section">
           <div class="container-fluid">
               <h2 class="heading-2">Musica</h2>
           </div>
           <div class="heading-thumbnails container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="channel-card" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/rap.jpg">
                            </div>
                            <div class="title">
                                <p>Rap</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/rnb.jpg">
                            </div>
                            <div class="title">
                                <p>R’n’B</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/pop.jpg">
                            </div>
                            <div class="title">
                                <p>Pop</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/dance.jpg">
                            </div>
                            <div class="title">
                                <p>Dance / EDM</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/clasica.jpg">
                            </div>
                            <div class="title">
                                <p>Clasica</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/reggaeton.jpg">
                            </div>
                            <div class="title">
                                <p>Reggaeton</p>
                            </div>
                          </figure> 
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/musica_cristiana.jpg">
                            </div>
                            <div class="title">
                                <p>Música cristiana</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/musica_latina.jpg">
                            </div>
                            <div class="title">
                                <p>Música latina</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/musica_mexicana.jpg">
                            </div>
                            <div class="title">
                                <p>Musica mexicana</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/blues.jpg">
                            </div>
                            <div class="title">
                                <p>Blues</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/musica_brasilena.jpg">
                            </div>
                            <div class="title">
                                <p>Musica brasileña</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/niños.jpg">
                            </div>
                            <div class="title">
                                <p>Niños</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/soul.jpg">
                            </div>
                            <div class="title">
                                <p>Soul / funk</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/salsa.jpg">
                            </div>
                            <div class="title">
                                <p>Salsa</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/jazz.jpg">
                            </div>
                            <div class="title">
                                <p>Jazz</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/reggae.jpg">
                            </div>
                            <div class="title">
                                <p>Reggae</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/musica_africana.jpg">
                            </div>
                            <div class="title">
                                <p>Musica africana</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/metal.jpg">
                            </div>
                            <div class="title">
                                <p>Metal</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/electronica.jpg">
                            </div>
                            <div class="title">
                                <p>Electronica</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/indie.jpg">
                            </div>
                            <div class="title">
                                <p>Indie</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/rock.jpg">
                            </div>
                            <div class="title">
                                <p>Rock</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/tv.jpg">
                            </div>
                            <div class="title">
                                <p>TV, videojuegos y <br> bandas sonoras</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/folk.jpg">
                            </div>
                            <div class="title">
                                <p>Folk y musica de <br> cantautor</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                </div>    
           </div>
       </section>
       <section class="channel-section">
           <div class="container-fluid">
               <h2 class="heading-2">Momentos</h2>
           </div>
           <div class="heading-thumbnails container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="channel-card" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/flashback.jpg">
                            </div>
                            <div class="title">
                                <p>Flashback</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/chill.jpg">
                            </div>
                            <div class="title">
                                <p>Chill</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/deporte.jpg">
                            </div>
                            <div class="title">
                                <p>Deporte</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/fiesta.jpg">
                            </div>
                            <div class="title">
                                <p>Fiesta</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/corazon.jpg">
                            </div>
                            <div class="title">
                                <p>Corazón y romance</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/momentos.jpg">
                            </div>
                            <div class="title">
                                <p>Momentos</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                </div>    
           </div>
       </section>
       <section class="channel-section">
           <div class="container-fluid">
               <h2 class="heading-2">Más contenido</h2>
           </div>
           <div class="heading-thumbnails container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="channel-card" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/thumbnails/futbol.jpg">
                            </div>
                            <div class="title">
                                <p>Futbol</p>
                            </div>
                          </figure>    
                        </a>
                    </div>
                </div>    
           </div>
       </section>
    
    </div>

 
</body>
</html>