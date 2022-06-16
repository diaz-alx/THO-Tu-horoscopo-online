<?php 
include 'header.php'; 
header_index();
?>

<body>
	<div>
    <div class="divid izq">
		<div class="container">
       		<div class="centrada">
			   		<p>Visitas de hoy: <?php echo contadorCookies(); ?></p>
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
						<form action="<?php echo RUTA; ?>resultado.php" method="post">
							<h2>Bienvenido</h2>
							
						  	<label for="name">Nombre</label><br>
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
<?php 
include 'footer.php';
footer_index(); 
?>