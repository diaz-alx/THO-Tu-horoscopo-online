<?php 
include 'header.php'; 
header_index();
?>

<body>
	<div>
    <div class="divid izq">
		<div class="container">
       		<div class="centrada">
			   		<p>Les visites d'aujourd'hui: <?php echo contadorCookies(); ?></p>
					<img src="<?php echo RUTA; ?>img/home.jpeg" alt="Signos zodiacales">
				<div id="texto-caption">
					<p>Horoscope: les dates de chaque signe du zodiaque et pourquoi.</p>
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
						  	<label for="name">Nom</label><br>
							<input type="text" style="width:231px" id="name" name="name" required><br><br>
							
							<label for="date">Date de naissance</label><br>
							<input type="date" style="width:231px" id="date" name="date" required><br><br>
							<p>Couleur de l'arrière plan:
								<select name="OpcFondo">
									<option values='rojo'>rouge</option>
									<option values='verde'>vert</option>
									<option values='azul'>bleu</option>
									<option values='cian'>cyan</option>
									<option values='amarillo'>jaune</option>
									<option values='gris'>gris</option>
								</select>
							</p>
							
							<input type="submit" name="enviado" value="Voir votre horoscope" class="btn"><br><br>
							<input type="button" value="Logout" onclick="window.location='<?php echo RUTA; ?>logout.php';" class="btn"/>
						</form>
						
					</div>
					
				</div>

<center>
<?php 
include 'footer.php';
footer_index(); 
?>