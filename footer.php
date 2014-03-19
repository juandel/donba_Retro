		<footer class="row">
			<p class="pull-left col-xs-12 col-md-6"><small>Todos los derechos reservados | Don Balon © 2000</small></p>
			<p class="pull-right col-xs-12 col-md-6"><small>Telefonos (011) 4793 3211 / (011) 4793-3234 - ventas@donbalon.com.ar</small></p>
		</footer>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">
		
		document.addEventListener('DOMContentLoaded', drawMap);

		var map;

  		function drawMap() {
  			var storeLocation = new google.maps.LatLng(-34.4910278, -58.5237083);
	        var mapOptions = {
	        	center: storeLocation, 
	        	zoom: 15
	        };
	        
	        map = new google.maps.Map(document.getElementById("map-canvas"),
	            mapOptions);
	        
	        var marker = new google.maps.Marker({
	        	position: storeLocation,
	        	map: map,
	        	title: 'Don Balon - Veni a visitarnos!'
	        });
	    }
    </script> 	
	</body>
</html>