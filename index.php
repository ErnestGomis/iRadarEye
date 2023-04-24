<!DOCTYPE html>
<html>
<head>
    <title>¡iRadarEye</title>
    <!-- Incluye los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<?php require 'menu.php'; ?>
<body>
    <!-- Incluye los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container md6">
                <a class="navbar-brand .col-4" href="#">iRadarEye</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../sesion/login.php" style="width:100%;">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" style="padding-left: 100px;">Buscador🔍</a></li>
                        <li class="dropstart">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding-left: 10px;">Menu</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Perfil 👤</a></li>
                                <li><a class="dropdown-item" href="#">Escapes Rooms🚪</a></li>
                                <li><a class="dropdown-item" href="#">Favoritos✰</a></li>
                                <li><a class="dropdown-item" href="#">Login</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#">Configuración</a></li>  <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br></br>
        <div class="img" href="(../img/radar.PNG);">
        <div class=".col-4 ms-auto "><a href="../html/MapaInteractivo.html"><button type="button" class="btn btn-primary btn-lg  mx-5" style="padding-left:100px; padding-right: 100px; box-shadow: 15px 13px 40px black; top:50%; top: 0; margin-top: 5%; ">Mapa</button></a>	</div>
       
        <div class="container cuerpo h-100 w-100">
            <div class="text-center mt-5 d-flex justify-content-center">
                <div class="Barcelona"><a  href="paginaBarcelona.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Barcelona</button>
				</div>
                <br><br>
				<div class="Madrid"><a href="paginaMadrid.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Madrid</button>
				</div>
            </div>
			<div class="text-center mt-5 d-flex justify-content-center">
                <div class="Andalucia"><a href="paginaAndalucia.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Andalucía</button>
				</div>
				<div class="Murcia"><a href="paginaMurcia.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Murcia</button>
				</div>
            </div>
			<div class="text-center mt-5 d-flex justify-content-center">
                <div class="Leon"><a href="paginaLeon.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Castilla y Leon</button>
				</div>
				<div class="Extremadura"><a href="paginaExtremadura.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Extremadura</button>
				</div>
            </div>
            <div class="text-center mt-5 d-flex justify-content-center">
                <div class="Castilla"><a href="paginaMancha.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Castilla la Mancha</button>
				</div>
				<div class="Valencia"><a href="paginaValencia.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Valencia</button>
				</div>
            </div>
            <div class="text-center mt-5 d-flex justify-content-center">
                <div class="Aragon"><a href="paginaAragon.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Aragón</button>
				</div>
				<div class="Rioja"><a href="paginaRioja.html"><button type="button" class="btn btn-primary btn-lg  mx-5">La Rioja</button>
				</div>
            </div>
            <div class="text-center mt-5 d-flex justify-content-center">
                <div class="Navarra"><a href="paginaNavarra.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Navarra</button>
				</div>
				<div class="Vasco"><a href="paginaVasco.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Pais Vasco</button>
				</div>
            </div>
            <div class="text-center mt-5 d-flex justify-content-center">
                <div class="Asturias"><a href="paginaAsturias.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Asturias</button>
				</div>
            </div>
           
        </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    
		<style>
			img{
				position: absolute;
				z-index:2;
			}
			body{
				background-repeat:no-repeat;
				background-position:center;
				background-size:cover;
				position:relative;
                background-image:url(../img/radar.PNG);
               
			}
        
            .Barcelona {
                display: block;
                padding: 100px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(../img/barcelona.jpg);
                background-position: center;
                opacity: 0.8;
                
            }
            
            .Madrid{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(../img/madrid.jpg);
                background-position: center;
                opacity: 0.8;
            }

            .Andalucia{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(../img/andalucia.PNG);
                opacity: 0.8;
            }
            
            .Murcia{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(../img/murcia.webp);
                background-position: center;
                opacity: 0.8;
            }

            .Leon{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(../img/Castilla\ y\ Leon.jpg);
                opacity: 0.8;
            }

            .Extremadura{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(../img/extremadura.jpg);
                opacity: 0.8;
            }

            .Castilla{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(../img/castilla.webp);
                background-position: center;
                opacity: 0.8;
            }

            .Valencia{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(../img/valencia.jpg);
                background-position: center;
                opacity: 0.8;
            }

            .Aragon{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(../img/aragon.jpg);
                background-position: center;
                opacity: 0.8;
            }

            .Rioja{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(../img/rioja.jpg);
                background-position: center;
                opacity: 0.8;
            }

            .Navarra{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(../img/navarra.jpg);
                background-position: center;
                opacity: 0.8;
            }

            .Vasco{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(../img/vasco.jpg);
                background-position: center;
                opacity: 0.8;
            }

            .Asturias{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(../img/asturias.jpg);
                background-position: center;
                opacity: 0.8;
            }

		</style>
    </body>
</body>
</html>