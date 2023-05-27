<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Style.css">
	<title>Formulario</title>
</head>
<body>
<div class="container">
			<form  method="post">
			<h1 class="title">Bienvenidos</h1>
			<div class="for">
					<label  for="name"  id="name" >Nombre:</label>
				<Input type=text name="name" placeholder="Nombre"required></Input>
			</div>

			<div class="for">
					
				<label  for="lastname"  id="lastname" >Apellido:</label>
				<Input type=text name="lastname" placeholder="Apellido" required></Input>
			</div>

			<div class="for">
			<label   for="Acudiente"  id="acudiente" >Nombre Acudiente: </label>
				<Input type=text  name="acudiente" placeholder="NombreAc"required></Input>
			</div>

			<div class="for">
			<label  for="lastnameAcu"  id="lastnameAcu" >Apellido Acudiente:</label>
				<Input type=text name="lastnameAcu" placeholder="Apellido" required></Input>
			</div>
			
			<div class="for">
			<label  for="parentesco"  id="parentesco">Parentesco:</label> 
				<input type="text"  name="parentesco" placeholder=" Parentesco" required ></input>
			</div>

			<div class="for">
			<label  for="tel"  id="tel">Telefono:</label> 
				<input type="cel" name="phone" placeholder=" Telefono" required  maxlength="10"></input>
			</div>

			
	 	  	<input class="boton" type="submit" name="registrar" value="Registrarme">
			</form>
			<?php 
			include("registrar.php");
			?>
		 
		</div>


	
</body>
</html>
