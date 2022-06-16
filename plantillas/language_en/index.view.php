<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <title>THO - Tu Horóscopo Online</title>
        <link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet"> 
        <link rel="shortcut icon" href="<?php echo RUTA; ?>img/logo-home.png">
        <script>function enviarIdioma (idioma){
            location.href ="<?php echo RUTA; ?>grabarCookie.php?idiomaUsuario=" + idioma ;
        }
        </script>
    </head>
<body>
	<div>
    <div class="divid izq">
		<div class="container">
       		<div class="centrada">
			   		<p>Today visits: <?php echo contadorCookies(); ?></p>
					<img src="<?php echo RUTA; ?>img/home.jpeg" alt="Signos zodiacales">
				<div id="texto-caption">
					<p>Horoscope: the dates of each zodiac sign and why.</p>
				</div>
			</div>	
        </div>
    </div>

    <div class="divid der">
            <center>
				<img id="logo-index" src="<?php echo RUTA; ?>img/logo-home.png" alt="Signos zodiacales">	
				<div class="caja">
					<div class="formulario">
						<form action="<?php echo RUTA; ?>resultado.php" method="post">
						  	<label for="name">Name</label><br>
							<input type="text" style="width:231px" id="name" name="name" required><br><br>
							
							<label for="date">Birthday</label><br>
							<input type="date" style="width:231px" id="date" name="date" required><br><br>
							<p>Background Color:
								<select name="OpcFondo">
									<option values='rojo'>red</option>
									<option values='verde'>green</option>
									<option values='azul'>blue</option>
									<option values='cian'>cyan</option>
									<option values='amarillo'>yellow</option>
									<option values='gris'>gray</option>
								</select>
							</p>
							
							<input type="submit" name="enviado" value="See your Horoscope" class="btn"><br><br>
							<input type="button" value="Logout" onclick="window.location='<?php echo RUTA; ?>logout.php';" class="btn"/>
						</form>
						
					</div>
					
				</div>

<center>
<div class="footer">
				<a href="javascript:enviarIdioma('sp');"><img width="30" src="<?php echo RUTA; ?>img/languageES.png"></a>
        		<a href="javascript:enviarIdioma('en');"><img width="30" src="<?php echo RUTA; ?>img/languageEN.png"></a>
				<a href="javascript:enviarIdioma('fr');"><img width="30" src="<?php echo RUTA; ?>img/languageFR.png"></a>
				<p>Universidad Tecnológica de Panamá&reg;</p>
				<p>By: Gabriel Díaz & Gerardo Valderrama</p>
				</div>
			</center>
    </div> 
    </body>
</html>