<?php 
		function remeras_index(){
			$remeras = array("Francia"=>"francia.png", "Inglaterra"=>"Inglaterra.png", "Italia"=>"Italia.png");
			foreach ($remeras as $key => $value) { 
				echo "<div class='col-xs-6 col-sm-4'><div class='thumbnail'><img src='images/".$value."' class='img-responsive'><h4>".$key."<h4></div></div>";
			}
		}
		function remeras_personalizadas(){
			$remeras = array("Francia"=>"francia.png", "Inglaterra"=>"Inglaterra.png", "Italia"=>"Italia.png");
			foreach ($remeras as $key => $value) { 
				echo "<div class='col-xs-6 col-sm-4''><div class='thumbnail'><img src='images/".$value."'class='img-responsive'></div></div>";
			}
		}
		function remeras_camisetas($pais){
			$remerasAmericaNorte = array("USA"=>"usa.png", "Canada"=>"canada.png", "Mejico"=>"mejico.png", "Bahamas"=>"bahamas.png","Puerto Rico"=>"puertoRico.png");
			$remerasAmericaSur = array("Cuba"=>"cuba.png", "Bolivia"=>"bolivia.png", "Argentina"=>"argentina.png", "Colombia"=>"colombia.png","Peru"=>"peru.png");
			$remerasEuropa = array("Italia"=>"italia.png", "Holanda"=>"holanda.png", "Belgica"=>"belgica.png", "Alemania"=>"alemania.png","España"=>"españa.png", "grecia"=>"grecia.png");
			$remerasAfrica = array("Ghana"=>"ghana.png", "Costa de Marfil"=>"costaDeMarfil.png", "Angola"=>"angola.png", "Sudafrica"=>"sudafrica.png","Cameroon"=>"cameroon.png", "Algeria"=>"algeria.png");
			$remerasAsia = array("China"=>"china.png", "Japon"=>"japon.png", "Corea Del Sur"=>"coreaSur.png", "Malasia"=>"malasia.png","Vietnam"=>"vietnam.png", "Taiwan"=>"taiwan.png");

			if ($pais=="america1") {
				foreach ($remerasAmericaNorte as $key => $value) { 
				echo "<ul><li><img src='images/".$value."'></li><li>".$key."</li></ul>";
				}
			}
			else if ($pais=="america2") {
				foreach ($remerasAmericaSur as $key => $value) { 
				echo "<ul class='pricing-table small-2'><li class='title'><img src='images/".$value."'></li><li class='description'>".$key."</li></ul>";
				}
			}
			else if ($pais=="europa") {
				foreach ($remerasEuropa as $key => $value) { 
				echo "<ul class='pricing-table small-2'><li class='title'><img src='images/".$value."'></li><li class='description'>".$key."</li></ul>";
				}
			}
			else if ($pais=="africa") {
				foreach ($remerasAfrica as $key => $value) { 
				echo "<ul class='pricing-table small-2'><li class='title'><img src='images/".$value."'></li><li class='description'>".$key."</li></ul>";
				}
			}
			else if ($pais=="asia") {
				foreach ($remerasAsia as $key => $value) { 
				echo "<ul class='pricing-table small-2'><li class='title'><img src='images/".$value."'></li><li class='description'>".$key."</li></ul>";
				}
			}
				
		}



?>

