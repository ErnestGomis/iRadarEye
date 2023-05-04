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
       
        <div class="container">
            <div class="text-center mt-5 d-flex justify-content-center">
                <button type="button" class="btn btn-primary btn-lg mx-1 Barcelona"><a href="./boostrap/paginaBarcelona.html" style="color: #fff;">Barcelona</button></a>
                <button type="button" class="btn btn-primary btn-lg mx-1 Madrid"><a href="./boostrap/paginaMadrid.html" style="color: #fff;">Madrid</button></a>
            </div>


			<div class="text-center mt-5 d-flex justify-content-center">
                <button type="button" class="btn btn-primary btn-lg mx-1 Andalucia"><a href="./boostrap/paginaAndalucia.html" style="color: #fff;">Andalucia</button></a>
                <button type="button" class="btn btn-primary btn-lg mx-1 Murcia"><a href="./boostrap/paginaMurcia.html" style="color: #fff;">Murcia</button></a>	
            </div>
            
			<div class="text-center mt-5 d-flex justify-content-center">
                <button type="button" class="btn btn-primary btn-lg mx-1 Leon"><a href="./boostrap/paginaLeon.html" style="color: #fff;">Castilla y Leon</button></a>
                <button type="button" class="btn btn-primary btn-lg mx-1 Extremadura"><a href="./boostrap/paginaExtremadura.html" style="color: #fff;">Extremadura</button></a>
				<button type="button" class="btn btn-primary btn-lg mx-1 Castilla"><a href="./boostrap/Mancha.html" style="color: #fff;">Castilla la Mancha</button></a>
            </div>

            <div class="text-center mt-5 d-flex justify-content-center">
                <button type="button" class="btn btn-primary btn-lg mx-1 Valencia"><a href="./boostrap/paginaValencia.html" style="color: #fff;">Valencia</button></a>
                <button type="button" class="btn btn-primary btn-lg mx-1 Aragon"><a href="./boostrap/paginaAragon.html" style="color: #fff;">Aragón</button></a>
				<button type="button" class="btn btn-primary btn-lg mx-1 Rioja"><a href="./boostrap/paginaRioja.htmll" style="color: #fff;">La Rioja</button></a>
            </div>
           
            <div class="text-center mt-5 d-flex justify-content-center">
                <button type="button" class="btn btn-primary btn-lg mx-1 Navarra"><a href="./boostrap/paginaNavarra.html" style="color: #fff;">Navarra</button></a>
                <button type="button" class="btn btn-primary btn-lg mx-1 Vasco"><a href="./boostrap/paginaVasco.html" style="color: #fff;">Pais Vasco</button></a>
				<button type="button" class="btn btn-primary btn-lg mx-1 Asturias"><a href="./boostrap/paginaAsturias.htmll" style="color: #fff;">Asturias</button></a>
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

            .container{
                display:block;
            }

            
        
            .Barcelona {
                display: block;
                padding: 120px;
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