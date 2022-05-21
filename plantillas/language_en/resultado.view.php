<?php 
include 'header.php';
header_result(); 
?>
<section class="seccion-izquierda">
    	<center>	
	        <img src="<?php echo $simbolo; ?>" alt="simbolo zodiacal">
	        <p><strong>Birthday:</strong> <?php echo $date;?> </p>
			<p><strong>Age: </strong>  <?php echo $edad; ?></p>
        </center>
    </section>

    <section class="seccion-derecha">
		<p>Hi <?php echo ucwords($name);?>, your zododiac sign is...</p>
		<h2><?php echo ucwords($nombre); ?></h2>
		<p><?php echo $texto; ?></p><br>
        <center><a class="btn" href="index.php">Search for other</a></center>
	</section>

<?php 
include 'footer.php';
footer_result(); 
?>