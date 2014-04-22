<?php 
	$pais=$_GET['pais'];
	$an="americaNorte";
	$as="americaSur";
	$eu="europa";
	$af="africa";
	$asi="asia";

	$equipos=$_GET['equipos'];
	$arg="argentina";
	$bra="brasil";
	$ing="inglaterra";
	$esp="españa";
	$ita="italia";
	$ale="alemania";
	$fra="francia";

?>
	<div class="row prima">
		<h2>ALGUNOS EJEMPLOS</h2>
		<div class="row">
		<?php 
		if ($pais==$an){
			foreach ($remerasAmericaNorte as $p => $jpg) {
				echo "<div class='col-xs-6 col-sm-4'><div class='thumbnail'><img src='".$routeImages.$jpg."'class='img-responsive'></div></div>";	
			}
		}if ($pais==$as){
			foreach ($remerasAmericaSur as $p => $jpg) {
				echo "<div class='col-xs-6 col-sm-4'><div class='thumbnail'><img src='".$routeImages.$jpg."'class='img-responsive'></div></div>";	
			}
		}if ($pais==$eu){
			foreach ($remerasEuropa as $p => $jpg) {
				echo "<div class='col-xs-6 col-sm-4'><div class='thumbnail'><img src='".$routeImages.$jpg."'class='img-responsive'></div></div>";	
			}
		}if ($pais==$af){
			foreach ($remerasAfrica as $p => $jpg) {
				echo "<div class='col-xs-6 col-sm-4'><div class='thumbnail'><img src='".$routeImages.$jpg."'class='img-responsive'></div></div>";	
			}
		}if ($pais==$asi){
			foreach ($remerasAsia as $p => $jpg) {
				echo "<div class='col-xs-6 col-sm-4'><div class='thumbnail'><img src='".$routeImages.$jpg."'class='img-responsive'></div></div>";	
			}
		}

		if ($equipos==$arg) {
			foreach ($remerasArgentina as $p => $jpg) {
				echo "<div class='col-xs-6 col-sm-4'><div class='thumbnail'><img src='".$routeImages.$jpg."'class='img-responsive'></div></div>";	
			}
		}if ($equipos==$bra) {
			foreach ($remerasBrasil as $p => $jpg) {
				echo "<div class='col-xs-6 col-sm-4'><div class='thumbnail'><img src='".$routeImages.$jpg."'class='img-responsive'></div></div>";	
			}
		}if ($equipos==$ing) {
			foreach ($remerasInglaterra as $p => $jpg) {
				echo "<div class='col-xs-6 col-sm-4'><div class='thumbnail'><img src='".$routeImages.$jpg."'class='img-responsive'></div></div>";	
			}
		}if ($equipos==$esp) {
			foreach ($remerasEspaña as $p => $jpg) {
				echo "<div class='col-xs-6 col-sm-4'><div class='thumbnail'><img src='".$routeImages.$jpg."'class='img-responsive'></div></div>";	
			}
		}if ($equipos==$ita) {
			foreach ($remerasItalia as $p => $jpg) {
				echo "<div class='col-xs-6 col-sm-4'><div class='thumbnail'><img src='".$routeImages.$jpg."'class='img-responsive'></div></div>";	
			}
		}if ($equipos==$ale) {
			foreach ($remerasAlemania as $p => $jpg) {
				echo "<div class='col-xs-6 col-sm-4'><div class='thumbnail'><img src='".$routeImages.$jpg."'class='img-responsive'></div></div>";	
			}
		}if ($equipos==$fra) {
			foreach ($remerasFrancia as $p => $jpg) {
				echo "<div class='col-xs-6 col-sm-4'><div class='thumbnail'><img src='".$routeImages.$jpg."'class='img-responsive'></div></div>";	
			}
		}
		?>
		</div>
	</div>
<!-- 	<div class='col-xs-6 col-sm-4'>
		<div class='thumbnail'>
			<img src='images/".$value."'class='img-responsive'>
		</div>
	</div> -->