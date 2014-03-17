<?php include 'remeras.php'; ?>
<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>
<?php 
	$pais=$_GET["pais"];
?>
	<div class="content" id="dos">
		<h2>ALGUNOS EJEMPLOS</h2>
		<div class="remeras">
		<?php 
		remeras_camisetas($pais);
		?>
		</div>
	</div>

<?php include 'footer.php'; ?>
