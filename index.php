<!DOCTYPE html>
<html>
<head>
    <title>¡iRadarEye</title>
    <!-- Incluye los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<?php require 'menu.php';?>
<body>
    <!-- Incluye los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    
        <div class=".col-4 ms-auto "><a href="mapa.php"><button type="button" class="btn btn-primary btn-lg  mx-5" style="padding-left:100px; padding-right: 100px; box-shadow: 15px 13px 40px black; top:50%; top: 0; margin-top: 5%; position:fixed; ">Mapa</button></a>	</div>
       
        <div class="container cuerpo h-100 w-100">
            <div class="text-center mt-5 d-flex justify-content-center">
                <div class="Barcelona"><a  href="./boostrap/paginaBarcelona.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Barcelona</button>
				</div>
                <br><br>
				<div class="Madrid"><a href="./boostrap/paginaMadrid.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Madrid</button>
				</div>
            </div>
			<div class="text-center mt-5 d-flex justify-content-center">
                <div class="Andalucia"><a href="./boostrap/paginaAndalucia.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Andalucía</button>
				</div>
				<div class="Murcia"><a href="./boostrap/paginaMurcia.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Murcia</button>
				</div>
            </div>
			<div class="text-center mt-5 d-flex justify-content-center">
                <div class="Leon"><a href="./boostrap/paginaLeon.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Castilla y Leon</button>
				</div>
				<div class="Extremadura"><a href="./boostrap/paginaExtremadura.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Extremadura</button>
				</div>
            </div>
            <div class="text-center mt-5 d-flex justify-content-center">
                <div class="Castilla"><a href="./boostrap/paginaMancha.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Castilla la Mancha</button>
				</div>
				<div class="Valencia"><a href="./boostrap/paginaValencia.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Valencia</button>
				</div>
            </div>
            <div class="text-center mt-5 d-flex justify-content-center">
                <div class="Aragon"><a href="./boostrap/paginaAragon.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Aragón</button>
				</div>
				<div class="Rioja"><a href="./boostrap/paginaRioja.html"><button type="button" class="btn btn-primary btn-lg  mx-5">La Rioja</button>
				</div>
            </div>
            <div class="text-center mt-5 d-flex justify-content-center">
                <div class="Navarra"><a href="./boostrap/paginaNavarra.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Navarra</button>
				</div>
				<div class="Vasco"><a href="./boostrap/paginaVasco.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Pais Vasco</button>
				</div>
            </div>
            <div class="text-center mt-5 d-flex justify-content-center">
                <div class="Asturias"><a href="./boostrap/paginaAsturias.html"><button type="button" class="btn btn-primary btn-lg  mx-5">Asturias</button>
				</div>
            </div>
           
        </div>
        </div>
    </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    
		<style>

            
			body{
                background-image:url(./img/radar.PNG);
				background-repeat:no-repeat;
				background-position:center;
				background-size:cover;
                background-attachment: fixed;
			}
        
            .Barcelona {
                display: block;
                padding: 100px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(./img/barcelona.jpg);
                background-position: center;
                opacity: 0.8;
                
            }
            
            .Madrid{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(./img/madrid.jpg);
                background-position: center;
                opacity: 0.8;
            }

            .Andalucia{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(./img/andalucia.PNG);
                opacity: 0.8;
            }
            
            .Murcia{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(./img/murcia.webp);
                background-position: center;
                opacity: 0.8;
            }

            .Leon{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(./img/Castilla\ y\ Leon.jpg);
                opacity: 0.8;
            }

            .Extremadura{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(./img/extremadura.jpg);
                opacity: 0.8;
            }

            .Castilla{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(./img/castilla.webp);
                background-position: center;
                opacity: 0.8;
            }

            .Valencia{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(./img/valencia.jpg);
                background-position: center;
                opacity: 0.8;
            }

            .Aragon{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(./img/aragon.jpg);
                background-position: center;
                opacity: 0.8;
            }

            .Rioja{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(./img/rioja.jpg);
                background-position: center;
                opacity: 0.8;
            }

            .Navarra{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(./img/navarra.jpg);
                background-position: center;
                opacity: 0.8;
            }

            .Vasco{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(./img/vasco.jpg);
                background-position: center;
                opacity: 0.8;
            }

            .Asturias{
                display: block;
                padding: 120px;
                margin: 150px; 
                box-shadow: 15px 15px 40px black;
                cursor: pointer;
                background-image:url(./img/asturias.jpg);
                background-position: center;
                opacity: 0.8;
            }

		</style>
    
</body>
</html>