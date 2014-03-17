<?php
	$linksSelecciones=array('America del norte'=>'america1','America del sur'=>'america2',
		'Europa'=>'europa','Africa'=>'africa','Asia'=>'asia');
	$linksEquipos=array('San lorenzo'=>'america1','Boca'=>'america2',
		'River'=>'europa','Racing'=>'africa','Velez'=>'asia');
?>	


<div class="row" id="cual">
	<h2 class="title">CUAL VAS A LLEVAR ?</h2>	
	<div class="row" id="listado">
		<div class="col-sm-6 col-sm-offset-3">
			<ul class="col-xs-6">
				<li class='title'><h4>SELECCIONES</h4></li>
			<?php 
				foreach ($linksSelecciones as $nombre => $value) {
					echo "<li><a href='camisetas_.php?pais=".$value."'>".$nombre."</a></li>";
				}
			?>
			</ul>
			<ul class="col-xs-6">
				<li class='title'><h4>EQUIPOS</h4></li>
			<?php 						
				foreach ($linksEquipos as $nombre => $value) {
					echo "<li><a href='camisetas_.php?pais=".$value."'>".$nombre."</a></li>";
				} 
			?>
			</ul>
		</div>
	</div>
</div>
<div class="row">
	<h2 class="title">PERSONALIZADAS</h2>
	<div class="row">
		<h5 class="col-xs-8 col-xs-offset-2">Te animas a personalizar alguna Retro a tu gusto ?</h5>
	</div>
	<div class="remeras row">
	<?php 
	remeras_personalizadas();
	?>
	</div>
	<p id="text">Elegi tu preferida y personalizala a tu medida.<br>
		Proba nuevas combinaciones de colores. <br>
		Agrega tu escudo, ponele una publicidad, y elegi entre los distintos numeros <br>
		que ofrecemos para que tu equipo quede en la historia! <br>
	</p>
</div>