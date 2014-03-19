<div class="row prima">
	<h2 class="title">CONTACTANOS</h2>
	<div class="row">	
		<div class="col-sm-6">
			<?php
				if (!isset($_POST["submit"])){
  			?>
			<form role="form" method="post" action="index.php?link=contacto&num=04">
	  			<div class="form-group">
				    <input type="name" class="form-control" id="exampleInputNombre1" placeholder="Nombre" name="name">
				</div>
	  			<div class="form-group">
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo electronico" name="email">
				</div>
	  			<div class="form-group textarea">
				    <textarea class="form-control" id="exampleInputText1" placeholder="Mensaje" name="message"></textarea>
				</div>
	  			<button type="submit" class="btn btn-default" name="submit">Enviar</button>
			</form>
		</div>
		<div class="col-sm-6">
			<p>Av. SIR ALEXANDER FLEMING 972,<br>
			MARTINEZ.
			</p>
			<p>HORARIO DE ATENCION<br>
			LU-VI: 9-18:30<br>
			SAB: 9-13:30<br>
			DOM: Cerrado<br>
			</p>
			<p>TELEFONOS DE CONTACTO<br>
			(011)4793 3211<br>
			(011)4793 3134<br>
			(011)4793 3824<br>
			</p>
			
			<? 
			}else{
				if (isset($_POST["name"])){
					$name=$_POST["name"];
					$email=$_POST["email"];
					$message=$_POST["message"];
					$namEmail=$name.$email;
					// message lines should not exceed 70 characters (PHP rule), so wrap it
					$message = wordwrap($message, 70);
					mail("juancito_jd@hotmail.com","contacto Donba",$message,"From: $email \n");
			echo "<p>Gracias ".$name." por contactarte con nosotros!!!<br>
			Te estaremos respondiendo a ".$email." a la brevedad.</p>
			</div>
			<div class='col-sm-6'>
			<p>Av. SIR ALEXANDER FLEMING 972,<br>
			MARTINEZ.
			</p>
			<p>HORARIO DE ATENCION<br>
			LU-VI: 9-18:30<br>
			SAB: 9-13:30<br>
			DOM: Cerrado<br>
			</p>
			<p>TELEFONOS DE CONTACTO<br>
			(011)4793 3211<br>
			(011)4793 3134<br>
			(011)4793 3824<br>
			</p>";
				}				
			}?>
		</div>
	</div>
</div>

<div class=" row duo">
	<h2 class="title">DONDE ESTAMOS</h2>
	<div id="map-canvas"/></div>
</div>
