<?php function header_index(){ ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>THO - Tu Horóscopo Online</title>
        <link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet"> 
        <link rel="shortcut icon" href="<?php echo RUTA; ?>img/logo-home.png">
        <script languaje="javascript" type="text/javascript">
        function enviarIdioma (idioma){
            location.href ="<?php echo RUTA; ?>grabarCookie.php?idiomaUsuario=" + idioma ;
        }
        </script>

    </head>
<?php } ?>




<?php function header_result(){ ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>THO - Tu Horóscopo Online</title>
        <link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>css/style.css">
        <link rel="shortcut icon" href="<?php echo RUTA; ?>img/logo-home.png">
        <script languaje="javascript" type="text/javascript">
        function enviarIdioma (idioma){
            location.href ="<?php echo RUTA; ?>grabarCookie.php?idiomaUsuario=" + idioma ;
        }
        </script>

    </head>
	<body>
	<header id="encabezado">
		<a href="index.php" title="Inicio">
	    <img src="<?php echo RUTA; ?>img/horoscopo.png" id="logo" alt="Logo"></a>
	    <h1><center>Tu Horóscopo Online</center></h1>
	</header>

	<nav class="barra">
		<a href="index.php">Inicio</a>
		<a href="https://es.wikipedia.org/wiki/Hor%C3%B3scopo">¿Qué es el horóscopo?</a>
	</nav>

	<div class="contenido">
<?php } ?>
