<?php
	$link=$_GET['link'];
	$num=$_GET['num'];
	if(!isset($num)) { $num="01"; }
?>
<?php include 'remeras.php'; 
	include 'header.php';
	include 'nav.php'; 
	require_once 'Swift-5.1.0/lib/swift_required.php';
?>

<div class="jumbotron">
	<img <?php echo ("src='images/sliderIndex-".$num.".jpg'");?>>
</div>
<?php if ($link=='home') {
	include 'home.php';
}elseif ($link=='seleccion') {
	include 'seleccion_.php';
}elseif ($link=='personalizadas') {
	include 'personalizadas_.php';
}elseif($link=='camisetas'){
	include 'camisetas_.php';
}elseif($link=='contacto'){
	include 'contacto_.php';
}?>
			
<?php include 'footer.php'; ?>
