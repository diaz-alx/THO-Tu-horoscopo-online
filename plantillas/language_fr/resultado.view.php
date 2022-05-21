<?php 
include 'header.php';
header_result(); 
?>
<section class="seccion-izquierda">
    	<center>	
	        <img src="<?php echo $simbolo; ?>" alt="simbolo zodiacal">
	        <p><strong>Date de naissance:</strong> <?php echo $date;?> </p>
			<p><strong>âge: </strong>  <?php echo $edad; ?></p>
        </center>
    </section>

    <section class="seccion-derecha">
		<p>Bonjour <?php echo ucwords($name);?>, votre signe est...</p>
		<h2><?php echo ucwords($nombre); ?></h2>
		<p><?php echo $texto; ?></p><br>
        <center><a class="btn" href="index.php">Consulter d'autres</a></center>
	</section>

<?php 
include 'footer.php';
footer_result(); 
?>