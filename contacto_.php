<div class="row prima">
	<h2 class="title">CONTACTANOS</h2>
	<div class="row">	
		<div class="col-sm-6">
			<?php
			if (!isset($_POST["submit"])){
  			?>
			<form role="form" method="post" action="" name="contactForm">
	  			<div class="form-group">
				    <input type="name" class="form-control" id="exampleInputNombre1" placeholder="Nombre" name="nombre">
				</div>
	  			<div class="form-group">
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo electronico" name="email">
				</div>
	  			<div class="form-group textarea">
				    <textarea class="form-control" id="exampleInputText1" placeholder="Mensaje" name="message"></textarea>
				</div>
	  			<button type="submit" class="btn btn-default" name="submit">Enviar</button>
			</form>
			<?php 
			}else{
				$name=$_POST["nombre"];
				$email=$_POST["email"];
				$message=$_POST["message"];
				
				$data="Nombre: ".$name."<br>
						Email: ".$email."<br>
						Mensaje: ".$message."<br>";
				echo $data;
			


			// Start Swift Mailer
			$transport = Swift_SmtpTransport::newInstance('relay-hosting.secureserver.net', 25);
				// ->setUsername('ventasdonbalon@gmail.com')
				// ->setPassword('santino10');
			// Create mailer
			$mailer= Swift_Mailer::newInstance($transport);
			$message=Swift_Message::newInstance('Contacto donba Retro')
				->setFrom(array('ventas@donbalon.com.ar' => 'Ventas Donbalon Retro'))
				->setTo(array('ventas@donbalon.com.ar'=> 'Consulta Diseño Camiseta','pixnel11@gmail.com'))
				->setSubject ('Contacto Donbalon Retro')
				->setBody($data, 'text/html');
			//send message
			$result= $mailer->send($message);
			}
			?>
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
		</div>
	</div>
</div>

<div class=" row duo">
	<h2 class="title">DONDE ESTAMOS</h2>
	<div id="map-canvas"/></div>
</div>
