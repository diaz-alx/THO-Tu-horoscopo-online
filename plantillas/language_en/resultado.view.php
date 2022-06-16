<!DOCTYPE html>
<html lang="en">

<head>
	<title>THO - Tu Horóscopo Online</title>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>css/style.css">
	<link rel="shortcut icon" href="<?php echo RUTA; ?>img/logo-home.png">
	<script>function enviarIdioma(idioma) {
			location.href = "<?php echo RUTA; ?>grabarCookie.php?idiomaUsuario=" + idioma;
		}
	</script>

</head>

<body>
	<header id="encabezado">
		<a href="index.php" title="Inicio">
			<img src="<?php echo RUTA; ?>img/horoscopo.png" id="logo" alt="Logo"></a>
		<h1>
			<center>Your Online Horoscope</center>
		</h1>
	</header>

	<nav class="barra">
		<a href="index.php">Home</a>
		<a href="https://es.wikipedia.org/wiki/Hor%C3%B3scopo">What is the horoscope?</a>
		<a href="<?php echo RUTA; ?>logout.php">Logout</a>
	</nav>

	<?php if(!isset($colorBG)):?>
                    <div class="contenido" > 
					<?php else:?>
                    <div class="contenido" style = "background-color:<?php echo  $_SESSION['colorfondo']; ?>">
					<?php endif; ?>

		<section class="seccion-izquierda">
			<center>
				<img src="<?php echo $simbolo; ?>" alt="simbolo zodiacal">
				<p><strong>Birthday:</strong>
					<?php echo $date;?>
				</p>
				<p><strong>Age: </strong>
					<?php echo $edad; ?>
				</p>
			</center>
		</section>

		<section class="seccion-derecha">
			<p>Hi
				<?php echo ucwords($name);?>, your zododiac sign is...
			</p>
			<h2>
				<?php echo ucwords($nombre); ?>
			</h2>
			<p>
				<?php echo $texto; ?>
			</p><br>
			<center><a class="btn" href="index.php">Search for other</a></center>
		</section>
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
</body>

</html>