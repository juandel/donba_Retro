<?php 

//Cambiar ruta de imagenes. Se pueden hacer subdirectorios. No se recomienda cambiar directorio "images", 
//usar nuevo directorio dentro de "images".
//ej. "images/remeras/", "images/frambuesas/", "images/remeras/fotos".

$routeImages="images/remeras/";



//En cada campo ingrese respectivo Nombre de equipo segundo casillero nombre de la imagen. 
//1- Nombre Equipo (como aparece abajo de la imagen). 2- Nombre archivo imagen (ej. riverplate.png)

$remerasArgentina=array("San Lorenzo"=>"sanlorenzo.png", "Boca Jrs."=>"boca.png", "River Plate"=>"riverplate.png", "Independiente"=>"independiente.png","Racing Club"=>"racingclub.png");
$remerasBrasil=array("Flamengo"=>"flamengo.png", "Cruzeiro"=>"cruzeiro.png", "Vasco da gama"=>"vascodagama.png", "Atletico Mineiro"=>"atleticoMineiro.png","Botafogo"=>"botafogo.png");
$remerasInglaterra=array("Manchester United"=>"manchesterUnited.png", "Arsenal"=>"arsenal.png", "Liverpool"=>"liverpool.png", "Manchester City"=>"manchesterCity.png","Chelsea"=>"chelsea.png");
$remerasEspaña=array("Barcelona"=>"barcelona.png", "Real Madrid"=>"realMadrid.png", "Atletico Madrid"=>"atleticoMadrid.png", "Valencia"=>"valencia.png", "Betis"=>"betis.png");
$remerasItalia=array("Milan"=>"milan.png", "Inter"=>"inter.png", "Juventus"=>"juventus.png", "Fiorentina"=>"fiorentina.png","Napoli"=>"napoli.png");
$remerasAlemania=array("Bayern Munich"=>"bayernMunich.png", "Bayern leverkusen"=>"bayernleverkusen.png", "Borussia Dortmund"=>"borussiaDortmund.png");
$remerasFrancia=array("Paris Saint Germain"=>"parisSaintGermain.png", "Olimpique"=>"olimpique.png", "Toulouse FC"=>"toulouse.png", "FC Nantes"=>"nantes.png");

$remerasAmericaNorte = array("USA"=>"usa.png", "Canada"=>"canada.png", "Mejico"=>"mejico.png", "Bahamas"=>"bahamas.png","Puerto Rico"=>"puertoRico.png");
$remerasAmericaSur = array("Cuba"=>"cuba.png", "Bolivia"=>"bolivia.png", "Argentina"=>"argentina.png", "Colombia"=>"colombia.png","Peru"=>"peru.png");
$remerasEuropa = array("Italia"=>"italia.png", "Holanda"=>"holanda.png", "Belgica"=>"belgica.png", "Alemania"=>"alemania.png","España"=>"españa.png", "Grecia"=>"grecia.png", "Francia"=>"francia.png", "Inglaterra"=>"inglaterra.png");
$remerasAfrica = array("Ghana"=>"ghana.png", "Costa de Marfil"=>"costaDeMarfil.png", "Angola"=>"angola.png", "Sudafrica"=>"sudafrica.png","Cameroon"=>"cameroon.png", "Algeria"=>"algeria.png");
$remerasAsia = array("China"=>"china.png", "Japon"=>"japon.png", "Corea Del Sur"=>"coreaSur.png", "Malasia"=>"malasia.png","Vietnam"=>"vietnam.png", "Taiwan"=>"taiwan.png");


//VVVVVVVVVVVVVVVVVVvvvvvvvvvvvvvv--------------------------V NO TOCAR V---------------------------vvvvvvvvvvvvvVVVVVVVVVVVVVVVVVV
//                                                             ABAJO



$remeras = array_merge($remerasArgentina, $remerasBrasil, $remerasInglaterra, $remerasEspaña, $remerasItalia, $remerasAlemania, $remerasFrancia, $remerasAmericaNorte, $remerasAmericaSur, $remerasEuropa, $remerasAfrica, $remerasAsia);



function shuffle_assoc(&$array) {
    $keys = array_keys($array);

    shuffle($keys);

    foreach($keys as $key) {
        $new[$key] = $array[$key];
    }

    $array = $new;

    return true;
}

function remeras_personalizadas(){
    Global $routeImages;
	$remeras = array("Francia"=>"francia.png", "Inglaterra"=>"Inglaterra.png", "Italia"=>"Italia.png");
	foreach ($remeras as $key => $value) { 
		echo "<div class='col-xs-6 col-sm-4''><div class='thumbnail'><img src='".$routeImages.$value."'class='img-responsive'></div></div>";
	}
}
$linksSelecciones=array('America del norte'=>'americaNorte','America del sur'=>'americaSur',
	'Europa'=>'europa','Africa'=>'africa','Asia'=>'asia');
$linksEquipos=array('Argentina'=>'argentina','Brasil'=>'brasil','Inglaterra'=>'inglaterra',
	'España'=>'españa','Italia'=>'italia','Alemania'=>'alemania','Francia'=>'francia');



?>

