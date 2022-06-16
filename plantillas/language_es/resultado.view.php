<?php 
require 'header.php';
header_result(); 
?>
<section class="seccion-izquierda">
    	<center>	
	        <img src="<?php echo $simbolo; ?>" alt="simbolo zodiacal">
	        <p><strong>Fecha de nacimiento:</strong> <?php echo $date;?> </p>
			<p><strong>Edad: </strong>  <?php echo $edad; ?></p>
        </center>
    </section>

    <section class="seccion-derecha">
		<p>Hola <?php echo ucwords($name);?>, tu signo es...</p>
		<h2><?php echo ucwords($nombre); ?></h2>
		<p><?php echo $texto; ?></p><br>
        <center><a class="btn" href="index.php">Consultar otro</a></center>
	</section>

<?php 
require 'footer.php';
footer_result(); 
?>