<!DOCTYPE html>
<html lang="es">

<head>
	<title>THO - Tu Horóscopo Online</title>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo RUTA; ?>img/logo-home.png">
	<script languaje="javascript" type="text/javascript">
		function enviarIdioma(idioma) {
			location.href = "<?php echo RUTA; ?>grabarCookie.php?idiomaUsuario=" + idioma;
		}
	</script>

</head>

<body>
	<div>
		<div class="divid izq">
			<div class="container">
				<div class="centrada">
					<p>Bienvenido a nuestra web
						<?php echo contadorCookies(); ?>
					</p>
					<img src="<?php echo RUTA; ?>img/home.jpeg" alt="Signos zodiacales">
					<div id="texto-caption">
						<p>Horóscopo: las fechas de cada signo del zodiaco y por qué.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="divid der">
			<center>
				<img id="logo-index" src="<?php echo RUTA; ?>img/logo-home.png" alt="Signos zodiacales">
					<div class="caja">
					<div class="formulario">
						<p>Bienvenido </p>
						<form action="<?php echo RUTA; ?>resultado.php" method="post">
						  	<label for="name">Nombre</label>
							<input type="text" style="width:231px" id="name" name="name" required><br><br>
							<label for="date">Fecha de nacimiento</label><br>
							<input type="date" style="width:231px" id="date" name="date" required><br><br>
							<p>Color de fondo:
								<select name="OpcFondo">
									<option values='rojo'>rojo</option>
									<option values='verde'>verde</option>
									<option values='azul'>azul</option>
									<option values='cian'>cian</option>
									<option values='amarillo'>amarillo</option>
									<option values='gris'>gris</option>
								</select>
							</p>
							<input type="submit" name="enviado" value="Ver tu horóscopo" class="btn"><br><br>
							<input type="button" value="Cerrar Sesión" onclick="window.location='<?php echo RUTA; ?>logout.php';" class="btn"/>
						</form>

					</div>

				</div>

				<center>

					<div class="footer">
						<a href="javascript:enviarIdioma('sp');"><img width="30"
								src="<?php echo RUTA; ?>img/languageES.png" alt="Idioma Español"></a>
						<a href="javascript:enviarIdioma('en');"><img width="30"
								src="<?php echo RUTA; ?>img/languageEN.png"></a>
						<a href="javascript:enviarIdioma('fr');"><img width="30"
								src="<?php echo RUTA; ?>img/languageFR.png"></a>
						<p>Universidad Tecnológica de Panamá&reg;</p>
						<p>Por: Gabriel Díaz & Gerardo Valderrama</p>
					</div>
				</center>
		</div>
</body>

</html>