<?php 
include 'header.php'; 

header_index();
?>

<body>
	<div>
    <div class="divid izq">
		<div class="container">
       		<div class="centrada">
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
						  	<label for="name">Nombre</label><br>
							<input type="text" style="width:231px" id="name" name="name" required><br><br>
							
							<label for="date">Fecha de nacimiento</label><br>
							<input type="date" style="width:231px" id="date" name="date" required><br><br>
							<input type="submit" name="enviado" value="Ver tu horóscopo" class="btn">
						</form>
						
					</div>
					
				</div>

<center>

<?php 
include 'footer.php';
footer_index(); 
?>