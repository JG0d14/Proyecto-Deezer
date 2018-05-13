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
      <div class="row">
      <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-3" style="">
                <article  class="card-home">
                <figure class="visual">
                    <figure >
                        <img class="home-img" src="img/img-home/c-1.jpg" style="">
                    </figure>
                </figure>
              </article>
             </div>
             <br>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-3">
                <article  class="card-home">
                <figure class="visual">
                    <figure >
                        <img class="home-img" src="img/img-home/c-2.jpg" style="">
                    </figure>
                </figure>
              </article>
                </div>
                <br>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-3">
                <article  class="card-home">
                <figure class="visual">
                    <figure >
                        <img class="home-img" src="img/img-home/c-3.jpg" style="">
                    </figure>
                </figure>
              </article>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-3">
                <article  class="card-home">
                <figure class="visual">
                    <figure >
                        <img class="home-img" src="img/img-home/c-4.jpg" style="">
                    </figure>
                </figure>
              </article>
                 </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-3">
                <article  class="card-home">
                <figure class="visual">
                    <figure >
                        <img class="home-img" src="img/img-home/c-5.jpg" style="">
                    </figure>
                </figure>
              </article>
                 </div>
          </div>
        </div>
            <br>

            <div class="container">
                <h2 class="heading-2">Explorar</h2>
                <h3 class="heading-5">Descubre los canales de música, entretenimiento y podcast</h3>
                <div class="heading-thumbnails container">
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
            </div>
            <br>
            <div class="container">
                <h2 class="heading-2">Selección de playlists</h2>
                <h3 class="heading-5">Una selección de nuestros editores para ti</h3>
                <div class="heading-thumbnails container">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="channel-card" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/img-home/p-1.jpg">
                            </div>

                           
                          </figure>
                          <div class="heading-4"><a class="link-heading" href="#">Spring Jazz</a></div>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/img-home/p-2.jpg">
                            </div>
                            
                          </figure>
                          <div class="heading-4"><a class="link-heading" href="#">Pura Salsa</a></div>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/img-home/p-3.jpg">
                            </div>
                            
                          </figure>
                          <div class="heading-4"><a class="link-heading" href="#">Essential Bob Marley </a></div>    
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/img-home/p-4.jpg">
                            </div>
                            
                          </figure> 
                          <div class="heading-4"><a class="link-heading" href="#">Latin Jazz</a></div>   
                        </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/img-home/p-5.jpg">
                            </div>
                            
                          </figure> 
                          <div class="heading-4"><a class="link-heading" href="#">Bath & Relax</a></div>   
                        </a>
                    </div>
                    
                </div>    
           </div>
            </div>
            <br>
            <br>
            <div class="container">
                <h2 class="heading-2">Nuevos Lanzamientos</h2>
                
                <div class="heading-thumbnails container">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="channel-card" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/img-home/n-1.jpg">
                            </div>

                           
                          </figure>
                          <div class="heading-4"><a class="link-heading" href="#">Joyride</a></div>    
                        </a>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/img-home/n-2.jpg">
                            </div>
                            
                          </figure>
                          <div class="heading-4"><a class="link-heading" href="#">Cerebral Hemispheres</a></div>    
                        </a>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/img-home/n-3.jpg">
                            </div>
                            
                          </figure>
                          <div class="heading-4"><a class="link-heading" href="#">All Glows</a></div>    
                        </a>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/img-home/n-4.jpg">
                            </div>
                            
                          </figure> 
                          <div class="heading-4"><a class="link-heading" href="#">Oblivion</a></div>   
                        </a>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-3 col-12 ">
                        <a class="" href="#">
                          <figure class="thumbnail"> 
                            <div class="picture">
                                <img class="image" src="img/img-home/n-5.jpg">
                            </div>
                            
                          </figure> 
                          <div class="heading-4"><a class="link-heading" href="#">Treehouse</a></div>   
                        </a>
                    </div>
                    
                </div>    
           </div>
            </div>
            
    </div>

 
</body>
</html>