			<footer class="row">
				<p class="pull-left col-xs-12 col-md-6"><small>Todos los derechos reservados | Don Balon © 2000</small></p>
				<p class="pull-right col-xs-12 col-md-6"><small>Telefonos (011) 4793 3211 / (011) 4793-3234 - ventas@donbalon.com.ar</small></p>
			</footer>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>		
		<script>
			var myCenter=new google.maps.LatLng(-34.493152, -58.527263);
			function initialize(){
				var mapProp = {
					center:myCenter,
					zoom:2,
					mapTypeId:google.maps.MapTypeId.ROADMAP
				};
				var map=new google.maps.Map(document.getElementById("googleMap")
				,mapProp);
				var marker=new google.maps.Marker({
	 	 			position:myCenter});
					marker.setMap(map);
			}		
			google.maps.event.addDomListener(window,'load',initialize);
		</script>	
	</body>
</html>