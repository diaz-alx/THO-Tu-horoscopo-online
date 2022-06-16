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

				<div class="centrada">
                    <p>Bienvenido a nuestra web</p>
					<img src="<?php echo RUTA; ?>img/home.jpeg" alt="Signos zodiacales">
					<div id="texto-caption">
						<p>Horóscopo: las fechas de cada signo del zodiaco y por qué.</p>
					</div>
				</div>

		</div>

		<div class="divid der">
			<center>
				<img id="logo-index" src="<?php echo RUTA; ?>img/logo-home.png" alt="Signos zodiacales">
				<div class="caja">
					<div class="formulario">
						<form action="" method="post">
						<h2>Bienvenido a nuestra Web</h2> 
							<label for="name">Usuario</label><br>
							<input type="text" style="width:231px" style="width:231px" id="Username" name="Username"
								required><br><br>

							<label for="date">Contraseña</label><br>
							<input type="password" style="width:231px" style="width:231px" id="Password" name="Password"
								required><br><br>
								<?php if(isset($msg)){?>
								<?php echo $msg;?>
								<?php } ?>
							<input type="submit" name="Submit" value="Login" class="btn">
						</form>

					</div>

				</div>

				<center>

					<div class="footer">
						<a href="javascript:enviarIdioma('sp');">
						<img width="30"	src="<?php echo RUTA; ?>img/languageES.png" alt="Idioma Español"></a>
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